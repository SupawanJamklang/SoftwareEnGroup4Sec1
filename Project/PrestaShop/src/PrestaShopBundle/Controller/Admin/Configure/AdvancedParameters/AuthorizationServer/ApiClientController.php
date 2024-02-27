<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

declare(strict_types=1);

namespace PrestaShopBundle\Controller\Admin\Configure\AdvancedParameters\AuthorizationServer;

use Exception;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\ApiClientSettings;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\DeleteApiClientCommand;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\EditApiClientCommand;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Command\GenerateApiClientSecretCommand;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Exception\ApiClientConstraintException;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Exception\ApiClientNotFoundException;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Exception\CannotAddApiClientException;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Exception\CannotUpdateApiClientException;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\Query\GetApiClientForEditing;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\QueryResult\EditableApiClient;
use PrestaShop\PrestaShop\Core\Domain\ApiClient\ValueObject\CreatedApiClient;
use PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Builder\FormBuilderInterface;
use PrestaShop\PrestaShop\Core\Form\IdentifiableObject\Handler\FormHandlerInterface;
use PrestaShop\PrestaShop\Core\Search\Filters\ApiClientFilters;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use PrestaShopBundle\Security\Attribute\AdminSecurity;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Manages the "Configure > Advanced Parameters > Authorization Server" page.
 */
class ApiClientController extends FrameworkBundleAdminController
{
    /**
     * @return Response
     */
    #[AdminSecurity("is_granted('create', request.get('_legacy_controller')) || is_granted('update', request.get('_legacy_controller')) || is_granted('delete', request.get('_legacy_controller')) || is_granted('read', request.get('_legacy_controller'))")]
    public function indexAction(ApiClientFilters $apiClientFilters): Response
    {
        $apiClientGridFactory = $this->get('prestashop.core.grid.factory.api_client');
        $apiClientGrid = $apiClientGridFactory->getGrid($apiClientFilters);

        return $this->render('@PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/ApiClient/index.html.twig', [
            'apiClientGrid' => $this->presentGrid($apiClientGrid),
            'help_link' => $this->generateSidebarLink('AdminAuthorizationServer'),
            'layoutTitle' => $this->trans('API Clients', 'Admin.Navigation.Menu'),
            'layoutHeaderToolbarBtn' => $this->getApiClientsToolbarButtons(),
        ]);
    }

    #[AdminSecurity("is_granted('create', request.get('_legacy_controller'))", redirectRoute: 'admin_api_clients_index')]
    public function createAction(Request $request): Response
    {
        $apiClientForm = $this->getFormBuilder()->getForm();
        $apiClientForm->handleRequest($request);

        try {
            $handlerResult = $this->getFormHandler()->handle($apiClientForm);
            if (null !== $handlerResult->getIdentifiableObjectId()) {
                /** @var CreatedApiClient $createdApiClient */
                $createdApiClient = $handlerResult->getIdentifiableObjectId();
                $this->displayTemporarySecret(
                    $this->trans('The API Client and client secret have been generated successfully.', 'Admin.Notifications.Success'),
                    $createdApiClient->getSecret()
                );

                return $this->redirectToRoute('admin_api_clients_edit', ['apiClientId' => $createdApiClient->getApiClientId()->getValue()]);
            }
        } catch (Exception $e) {
            $this->addFlash('error', $this->getErrorMessageForException($e, $this->getErrorMessages()));
        }

        return $this->render(
            '@PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/ApiClient/create.html.twig',
            [
                'layoutTitle' => $this->trans('New API Client', 'Admin.Navigation.Menu'),
                'apiClientForm' => $apiClientForm->createView(),
            ]
        );
    }

    private function displayTemporarySecret(string $successMessage, string $secret): void
    {
        $this->addFlash(
            'info',
            sprintf(
                '%s <strong>%s</strong>',
                $successMessage,
                $this->trans('This secret value will only be displayed once. Don\'t forget to make a copy in a secure location.', 'Admin.Notifications.Info'),
            )
        );

        // Pass generated secret via flash message
        $this->addFlash('client_secret', $secret);
    }

    #[AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_api_clients_index')]
    public function editAction(Request $request, int $apiClientId): Response
    {
        $apiClientForm = $this->getFormBuilder()->getFormFor($apiClientId);
        $apiClientForm->handleRequest($request);

        try {
            $handlerResult = $this->getFormHandler()->handleFor($apiClientId, $apiClientForm);

            if (null !== $handlerResult->getIdentifiableObjectId()) {
                $this->addFlash('success', $this->trans('Successful update', 'Admin.Notifications.Success'));

                return $this->redirectToRoute('admin_api_clients_edit', ['apiClientId' => $apiClientId]);
            }
        } catch (Exception $e) {
            $this->addFlash('error', $this->getErrorMessageForException($e, $this->getErrorMessages()));
        }

        $formData = $apiClientForm->getData();

        return $this->render('@PrestaShop/Admin/Configure/AdvancedParameters/AuthorizationServer/ApiClient/edit.html.twig', [
            'layoutTitle' => $this->trans('Editing API Client "%name%"', 'Admin.Navigation.Menu', ['%name%' => $formData['client_name']]),
            'apiClientForm' => $apiClientForm->createView(),
        ]);
    }

    #[AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_api_clients_edit')]
    public function regenerateSecretAction(Request $request, int $apiClientId): Response
    {
        try {
            $newSecret = $this->getCommandBus()->handle(new GenerateApiClientSecretCommand($apiClientId));
            $this->displayTemporarySecret(
                $this->trans('Your new client secret has been generated successfully. Your former client secret is now obsolete.', 'Admin.Notifications.Success'),
                $newSecret
            );
        } catch (Exception $e) {
            $this->addFlash('error', $this->getErrorMessageForException($e, $this->getErrorMessages()));
        }

        return $this->redirectToRoute('admin_api_clients_edit', ['apiClientId' => $apiClientId]);
    }

    /**
     * @param int $apiClientId
     *
     * @return JsonResponse
     */
    #[AdminSecurity("is_granted('update', request.get('_legacy_controller'))", redirectRoute: 'admin_api_clients_index')]
    public function toggleStatusAction(int $apiClientId): JsonResponse
    {
        /** @var EditableApiClient $editableApiClient */
        $editableApiClient = $this->getQueryBus()->handle(new GetApiClientForEditing($apiClientId));

        try {
            $command = new EditApiClientCommand($apiClientId);
            $command->setEnabled(!$editableApiClient->isEnabled());
            $this->getCommandBus()->handle($command);
        } catch (Exception $e) {
            return $this->json([
                'status' => false,
                'message' => $this->getErrorMessageForException($e, $this->getErrorMessages()),
            ]);
        }

        return $this->json([
            'status' => true,
            'message' => $this->trans('The status has been successfully updated.', 'Admin.Notifications.Success'),
        ]);
    }

    /**
     * @param int $apiClientId
     *
     * @return Response
     */
    #[AdminSecurity("is_granted('delete', request.get('_legacy_controller'))", message: 'You do not have permission to delete this.', redirectRoute: 'admin_api_clients_index')]
    public function deleteAction(int $apiClientId): Response
    {
        try {
            $this->getCommandBus()->handle(new DeleteApiClientCommand($apiClientId));
            $this->addFlash(
                'success',
                $this->trans('Successful deletion', 'Admin.Notifications.Success')
            );
        } catch (Exception $e) {
            $this->addFlash('error', $this->getErrorMessageForException($e, $this->getErrorMessages()));
        }

        return $this->redirectToRoute('admin_api_clients_index');
    }

    private function getFormHandler(): FormHandlerInterface
    {
        return $this->get('prestashop.core.form.identifiable_object.api_client_form_handler');
    }

    private function getFormBuilder(): FormBuilderInterface
    {
        return $this->get('prestashop.core.form.identifiable_object.builder.api_client_form_builder');
    }

    /**
     * @return array
     */
    private function getApiClientsToolbarButtons(): array
    {
        $toolbarButtons = [];

        $toolbarButtons['addApiClient'] = [
            'href' => $this->generateUrl('admin_api_clients_create'),
            'desc' => $this->trans('Add new API Client', 'Admin.Actions'),
            'icon' => 'add_circle_outline',
            'class' => 'btn-primary',
        ];

        return $toolbarButtons;
    }

    /**
     * Provides translated error messages for exceptions
     *
     * @return array
     */
    private function getErrorMessages()
    {
        return [
            ApiClientNotFoundException::class => $this->trans(
                'The object cannot be loaded (or found).',
                'Admin.Notifications.Error'
            ),
            ApiClientConstraintException::class => [
                ApiClientConstraintException::CLIENT_ID_ALREADY_USED => $this->trans(
                    'This value for "%field%" is already used and must be unique.',
                    'Admin.Notifications.Error',
                    ['%field%' => $this->trans('Client ID', 'Admin.Advparameters.Feature')]
                ),
                ApiClientConstraintException::CLIENT_NAME_ALREADY_USED => $this->trans(
                    'This value for "%field%" is already used and must be unique.',
                    'Admin.Notifications.Error',
                    ['%field%' => $this->trans('Client Name', 'Admin.Advparameters.Feature')]
                ),
                ApiClientConstraintException::INVALID_CLIENT_ID => $this->trans(
                    'The %s field is invalid.',
                    'Admin.Notifications.Error',
                    [sprintf('"%s"', $this->trans('Client ID', 'Admin.Advparameters.Feature'))]
                ),
                ApiClientConstraintException::INVALID_CLIENT_NAME => $this->trans(
                    'The %s field is invalid.',
                    'Admin.Notifications.Error',
                    [sprintf('"%s"', $this->trans('Client Name', 'Admin.Advparameters.Feature'))]
                ),
                ApiClientConstraintException::INVALID_DESCRIPTION => $this->trans(
                    'The %s field is invalid.',
                    'Admin.Notifications.Error',
                    [sprintf('"%s"', $this->trans('Description', 'Admin.Global'))]
                ),
                ApiClientConstraintException::CLIENT_ID_TOO_LARGE => $this->trans(
                    'The field "%field%" cannot be longer than %limit% characters.',
                    'Admin.Notifications.Error',
                    [
                        '%field%' => $this->trans('Client ID', 'Admin.Advparameters.Feature'),
                        '%limit%' => ApiClientSettings::MAX_CLIENT_ID_LENGTH,
                    ]
                ),
                ApiClientConstraintException::CLIENT_NAME_TOO_LARGE => $this->trans(
                    'The field "%field%" cannot be longer than %limit% characters.',
                    'Admin.Notifications.Error',
                    [
                        '%field%' => $this->trans('Client Name', 'Admin.Advparameters.Feature'),
                        '%limit%' => ApiClientSettings::MAX_CLIENT_NAME_LENGTH,
                    ]
                ),
                ApiClientConstraintException::DESCRIPTION_TOO_LARGE => $this->trans(
                    'The field "%field%" cannot be longer than %limit% characters.',
                    'Admin.Notifications.Error',
                    [
                        '%field%' => $this->trans('Description', 'Admin.Global'),
                        '%limit%' => ApiClientSettings::MAX_DESCRIPTION_LENGTH,
                    ]
                ),
            ],
            CannotAddApiClientException::class => $this->trans(
                'An error occurred while creating the API Client.',
                'Admin.Advparameters.Notification'
            ),
            CannotUpdateApiClientException::class => $this->trans(
                'An error occurred while creating the API Client.',
                'Admin.Advparameters.Notification'
            ),
        ];
    }
}
