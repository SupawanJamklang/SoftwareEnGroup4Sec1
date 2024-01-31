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

namespace PrestaShop\Module\PsEditionBasic\Presenter;

use PrestaShop\Module\PsEditionBasic\Helper\SetupGuideHelper;
use PrestaShop\PrestaShop\Adapter\SymfonyContainer;
use PrestaShopBundle\Translation\TranslatorInterface;

class SetupGuideDataPresenter
{
    /**
     * @var TranslatorInterface
     */
    public $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * Get setup guide datas.
     *
     * @return array
     */
    public function getSetupGuideData(): array
    {
        $router = SymfonyContainer::getInstance()->get('router');

        $response = [];

        try {
            if (\Module::isInstalled('smb_edition') && \Module::isEnabled('smb_edition') && $router->generate('smb_edition_manage_domain_name')) {
                array_push($response, $this->buildStep(
                    'domain',
                    $this->translator->trans('Customize your Domain Name', [], 'Modules.Editionbasic.Admin'),
                    $this->translator->trans("Customize your domain name to boost your store's search engine ranking.", [], 'Modules.Editionbasic.Admin'),
                    [
                        'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
                        'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11530021421714-changer-le-nom-de-domaine', [], 'Modules.Editionbasic.Admin'),
                    ],
                    [
                        [
                            'cta' => $this->translator->trans('Skip this step', [], 'Modules.Editionbasic.Admin'),
                            'href' => '#',
                            'variant' => 'secondary',
                            'skip' => true,
                        ],
                        [
                            'cta' => $this->translator->trans('Customize your Domain Name', [], 'Modules.Editionbasic.Admin'),
                            'href' => $router->generate('smb_edition_manage_domain_name'),
                            'userflow_id' => 'dbef1ad6-d589-4991-9f95-918190d153a9',
                        ],
                    ]
                ));
            }
        } catch (\Exception $e) {
        }

        array_push($response, $this->buildStep(
            'product',
            $this->translator->trans('Add your First Product', [], 'Modules.Editionbasic.Admin'),
            $this->translator->trans('Expand your catalog with your very first product', [], 'Modules.Editionbasic.Admin'),
            [
                'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
                'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11637213915666-ajouter-un-nouveau-produit', [], 'Modules.Editionbasic.Admin'),
            ],
            [
                [
                    'cta' => $this->translator->trans('Add a Product', [], 'Modules.Editionbasic.Admin'),
                    'href' => $router->generate('admin_product_catalog'),
                    'userflow_id' => '0a517acb-531a-4aeb-ab8a-b850ddbfdf70', // TODO: get from parameters
                ],
            ]
        ));
        array_push($response, $this->buildStep(
            'payment',
            $this->translator->trans('Configure your Payment Options', [], 'Modules.Editionbasic.Admin'),
            $this->translator->trans("Enhance your customers' shopping experience by offering multiple payment options on your store.", [], 'Modules.Editionbasic.Admin'),
            [
                'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
                'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11640755605778-configurer-les-moyens-de-paiement', [], 'Modules.Editionbasic.Admin'),
            ],
            [
                [
                    'cta' => $this->translator->trans('Configure your Payment Options', [], 'Modules.Editionbasic.Admin'),
                    'href' => $router->generate('admin_payment_methods'),
                    'userflow_id' => 'fea1c94c-591b-4c44-b05d-8236ec30c3e4',
                ],
            ]
        ));
        array_push($response, $this->buildStep(
            'shipping',
            $this->translator->trans('Configure your Delivery Options', [], 'Modules.Editionbasic.Admin'),
            $this->translator->trans('Configure delivery options to send your products.', [], 'Modules.Editionbasic.Admin'),
            [
                'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
                'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11615624974994-configurer-les-modes-de-livraison', [], 'Modules.Editionbasic.Admin'),
            ],
            [
                [
                    'cta' => $this->translator->trans('Skip this step', [], 'Modules.Editionbasic.Admin'),
                    'href' => '#',
                    'variant' => 'secondary',
                    'skip' => true,
                ],
                [
                    'cta' => $this->translator->trans('Configure your Delivery Options', [], 'Modules.Editionbasic.Admin'),
                    'href' => \Context::getContext()->link->getAdminLink('AdminCarriers'),
                    'userflow_id' => 'e085ee0c-cecf-4ba6-8a70-3f4310790dbf',
                ],
            ]
        ));

        try {
            if (\Module::isInstalled('psxlegalassistant') && \Module::isEnabled('psxlegalassistant') && $router->generate('psxlegalassistant_main_page')) {
                array_push($response, $this->buildStep(
                    'legal',
                    $this->translator->trans('Meet your Legal Obligations', [], 'Modules.Editionbasic.Admin'),
                    $this->translator->trans('Ensure your store complies with legal requirements before you begin selling.', [], 'Modules.Editionbasic.Admin'),
                    [
                        'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
                        'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11644037761042-repondre-aux-obligations-legales', [], 'Modules.Editionbasic.Admin'),
                    ],
                    [
                        [
                            'cta' => $this->translator->trans('Meet your Legal Obligations', [], 'Modules.Editionbasic.Admin'),
                            'href' => $router->generate('psxlegalassistant_main_page'),
                            'userflow_id' => '66ceeb79-9663-45f8-9276-b4b23ae750d6',
                        ],
                    ]
                ));
            }
        } catch (\Exception $e) {
        }

        array_push($response, $this->buildStep(
           'logo',
           $this->translator->trans('Add a Logo', [], 'Modules.Editionbasic.Admin'),
           $this->translator->trans('Add Logos for your store (Header, E-mails, Invoice, and Favicon)', [], 'Modules.Editionbasic.Admin'),
           [
               'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
               'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11674550243474-ajouter-un-logo-et-une-favicon', [], 'Modules.Editionbasic.Admin'),
           ],
           [
               [
                   'cta' => $this->translator->trans('Add a Logo', [], 'Modules.Editionbasic.Admin'),
                   'href' => $router->generate('admin_logos_index'),
                   'userflow_id' => '02f43ff1-f2ff-4ab6-9480-2229b2524f7c',
               ],
           ]
       ));

        try {
            if (\Module::isInstalled('psxdesign') && \Module::isEnabled('psxdesign') && $router->generate('admin_psxdesign_themes_index')) {
                array_push($response, $this->buildStep(
                    'theme',
                    $this->translator->trans('Select and Customize your Theme', [], 'Modules.Editionbasic.Admin'),
                    $this->translator->trans('Choose and customize a theme that defines the look of your store', [], 'Modules.Editionbasic.Admin'),
                    [
                        'cta' => $this->translator->trans('View documentation', [], 'Modules.Editionbasic.Admin'),
                        'href' => $this->translator->trans('https://help-center.prestashop.com/fr/articles/11663976521490-choisir-et-configurer-un-theme', [], 'Modules.Editionbasic.Admin'),
                        'variant' => 'secondary',
                        'skip' => true,
                    ],
                    [
                        [
                            'cta' => $this->translator->trans('Skip this step', [], 'Modules.Editionbasic.Admin'),
                            'href' => '#',
                            'variant' => 'secondary',
                            'skip' => true,
                        ],
                        [
                            'cta' => $this->translator->trans('Select and Customize your Theme', [], 'Modules.Editionbasic.Admin'),
                            'href' => $router->generate('admin_psxdesign_themes_index'),
                            'userflow_id' => '1262b67b-ab4b-49ad-8fa2-e6a5a9e7f8ad',
                        ],
                    ]
                ));
            }
        } catch (\Exception $e) {
        }

        return $response;
    }

    /**
     * Build step for data presenter
     *
     * @param string $name
     * @param string $title
     * @param string $description
     * @param array $documentation
     * @param array $buttons
     *
     * @return array
     */
    public function buildStep(string $name, string $title, string $description, array $documentation, array $buttons): array
    {
        return [
            'name' => $name,
            'title' => $title,
            'description' => $description,
            'isCompleted' => SetupGuideHelper::isStepCompleted($name),
            'isUserCompleted' => SetupGuideHelper::isStepUserCompleted($name),
            'isAutoCompleted' => SetupGuideHelper::isStepAutoCompleted($name),
            'documentation' => $documentation,
            'buttons' => $buttons,
        ];
    }
}
