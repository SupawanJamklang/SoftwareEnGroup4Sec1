<?php

/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

declare(strict_types=1);

namespace PrestaShop\Module\PsEditionBasic\Controller;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Response;

class AdminPsEditionBasicController extends FrameworkBundleAdminController
{
    protected function layoutTitle(): string
    {
        return $this->trans('Home', 'Modules.Editionbasic.Admin');
    }

    public function filter_settings_tabs_recursive(array $tabs, array $whitelist): array
    {
        $filtered = [];

        foreach ($tabs as $tab) {
            if (in_array($tab['class_name'], $whitelist)) {
                $filtered[] = $tab;
                continue;
            }

            $filtered = array_merge($filtered, $this->filter_settings_tabs_recursive($tab['sub_tabs'], $whitelist));
        }

        return array_values($this->reorganize_tabs($filtered, $whitelist));
    }

    public function filter_modules_tabs_recursive(array $tabs, array $whitelist): array
    {
        $filtered = [];

        foreach ($tabs as $key => $tab) {
            if (isset($tab['sub_tabs']) && is_array($tab['sub_tabs'])) {
                foreach ($tab['sub_tabs'] as $subTab) {
                    array_push($filtered, $subTab);
                }
            }
        }

        foreach ($filtered as $key => $tab) {
            if (in_array($tab['class_name'], $whitelist) || $tab['active'] === 0 || $tab['class_name'] === 'AdminPsEditionBasicSettingsController') {
                unset($filtered[$key]);
            } else {
                if (isset($tab['sub_tabs']) && is_array($tab['sub_tabs'])) {
                    $this->filter_modules_tabs_recursive($tab['sub_tabs'], $whitelist);
                }
            }
        }

        return array_values($filtered);
    }

    public function reorganize_tabs(array $tabs, array $whitelist): array
    {
        $reorganized = [];

        foreach ($whitelist as $tabClassName) {
            foreach ($tabs as $item) {
                if ($item['class_name'] === $tabClassName) {
                    $reorganized[] = $item;
                    break;
                }
            }
        }

        return $reorganized;
    }

    public function indexAction(): Response
    {
        $modulePsEditionBasic = $this->container->get('ps_edition_basic.module');

        $jsLink = $modulePsEditionBasic->getParameter('ps_edition_basic.edition_basic_homepage_js');

        $psAccountService = $this->get('PrestaShop\Module\PsAccounts\Service\PsAccountsService');
        $userTokenRepository = $this->container->get('PrestaShop\Module\PsAccounts\Repository\UserTokenRepository');

        $reflection = new \ReflectionClass($this->getContext()->controller);
        $method = $reflection->getMethod('getTabs');
        $method->setAccessible(true);
        $tabs = $method->invoke($this->getContext()->controller);

        $employeeAccount = $psAccountService->getEmployeeAccount();
        $psAccountID = ($employeeAccount ? $employeeAccount->getUid() : $psAccountService->getUserUuid());

        /**
         * @var string|string[]
         */
        $shopCountry = $this->getContext()->country->iso_code;
        if (is_array($shopCountry)) { // Country might be an array
            $shopCountry = $shopCountry[array_key_first($shopCountry)] ?? '';
        }
        $shopCountry = strtolower($shopCountry);

        return $this->render('@Modules/ps_edition_basic/views/templates/admin/homepage.html.twig', [
            'layoutTitle' => $this->layoutTitle(),
            'enableSidebar' => true,
            'jsLink' => $jsLink,
            'jsContext' => json_encode([
                'moduleName' => $modulePsEditionBasic->displayName,
                'moduleSlug' => $modulePsEditionBasic->name,
                'moduleVersion' => $modulePsEditionBasic->version,
                'userToken' => strval($userTokenRepository->getOrRefreshToken()) ?: '',
                'psAccountShopID' => $psAccountService->getShopUuid() ?: '',
                'psAccountID' => $psAccountID ?: '',
                'shopName' => (string) $this->configuration->get('PS_SHOP_NAME', ''),
                'isShopEnabled' => (bool) $this->configuration->get('PS_SHOP_ENABLE', false),
                'psSubscriptionID' => (string) $this->configuration->get('PS_SHOP_SUBSCRIPTION_ID', ''),
                'callBack' => [
                    'isCalledBack' => (bool) $this->configuration->get('PS_IS_CALLED_BACK', false),
                    'apiResponse' => (array) json_decode($this->configuration->get('PS_CALLBACK_API_RESPONSE', '[]'), true),
                ],
                'tabs' => $this->filter_settings_tabs_recursive($tabs, PS_EDITION_BASIC_SETTINGS_WHITE_LIST),
                'locale' => $this->getContext()->language->iso_code,
                'shopCountry' => $shopCountry,
                'modulesTabs' => $this->filter_modules_tabs_recursive($tabs, array_merge(PS_EDITION_BASIC_SETTINGS_WHITE_LIST, PS_EDITION_BASIC_MENU_WHITE_LIST)),
            ]),
        ]);
    }
}
