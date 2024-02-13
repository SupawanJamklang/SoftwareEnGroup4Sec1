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
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 */

use PrestaShop\PrestaShop\Core\Payment\PaymentOption;

if (!defined('_PS_VERSION_')) {
    exit;
}

class qr_payment extends PaymentModule
{
    private $_html = '';
    private $_postErrors = [];

    public $checkName;
    public $address;
    public $extra_mail_vars;

    public function __construct()
    {
        $this->name = 'ps_qrpayment';
        $this->tab = 'payments_gateways';
        $this->version = '2.1.0';
        $this->author = 'SEG04';
        $this->controllers = ['payment', 'validation'];

        parent::__construct();

        $this->displayName = $this->l('QR Code Payment');
        $this->description = $this->l('Displays an image of a QR code for payment.');

        $config = Configuration::getMultiple(['CHEQUE_NAME', 'CHEQUE_ADDRESS']);
        if (isset($config['CHEQUE_NAME'])) {
            $this->checkName = $config['CHEQUE_NAME'];
        }
        if (isset($config['CHEQUE_ADDRESS'])) {
            $this->address = $config['CHEQUE_ADDRESS'];
        }

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Payments by QRcode', [], 'Modules.Checkpayment.Admin');
        $this->description = $this->trans('Display contact details blocks to make it easy for customers to pay by check on your store.', [], 'Modules.Checkpayment.Admin');
        $this->confirmUninstall = $this->trans('Are you sure you want to delete these details?', [], 'Modules.Checkpayment.Admin');
        $this->ps_versions_compliancy = ['min' => '1.7.6.0', 'max' => _PS_VERSION_];

        if ((!isset($this->checkName) || !isset($this->address) || empty($this->checkName) || empty($this->address)) && $this->active) {
            $this->warning = $this->trans('The "Payee" and "Address" fields must be configured before using this module.', [], 'Modules.Checkpayment.Admin');
        }
        if (!count(Currency::checkPaymentCurrencies($this->id)) && $this->active) {
            $this->warning = $this->trans('No currency has been set for this module.', [], 'Modules.Checkpayment.Admin');
        }

        $this->extra_mail_vars = [
            '{check_name}' => Configuration::get('CHEQUE_NAME'),
            '{check_address}' => Configuration::get('CHEQUE_ADDRESS'),
            '{check_address_html}' => Tools::nl2br(Configuration::get('CHEQUE_ADDRESS')),
        ];
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('paymentOptions')
            && $this->registerHook('displayPaymentReturn')
        ;
    }

    public function uninstall()
    {
        return Configuration::deleteByName('CHEQUE_NAME')
            && Configuration::deleteByName('CHEQUE_ADDRESS')
            && parent::uninstall()
        ;
    }

    private function _postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            if (!Tools::getValue('CHEQUE_NAME')) {
                $this->_postErrors[] = $this->trans('The "Payee" field is required.', [], 'Modules.Checkpayment.Admin');
            } elseif (!Tools::getValue('CHEQUE_ADDRESS')) {
                $this->_postErrors[] = $this->trans('The "Address" field is required.', [], 'Modules.Checkpayment.Admin');
            }
        }
    }

    private function _postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            Configuration::updateValue('CHEQUE_NAME', Tools::getValue('CHEQUE_NAME'));
            Configuration::updateValue('CHEQUE_ADDRESS', Tools::getValue('CHEQUE_ADDRESS'));
        }
        $this->_html .= $this->displayConfirmation($this->trans('Settings updated', [], 'Admin.Notifications.Success'));
    }

    private function _displayCheck()
    {
        return $this->display(__FILE__, './views/templates/hook/infos.tpl');
    }

    public function getContent()
    {
        $this->_html = '';

        if (Tools::isSubmit('btnSubmit')) {
            $this->_postValidation();
            if (!count($this->_postErrors)) {
                $this->_postProcess();
            } else {
                foreach ($this->_postErrors as $err) {
                    $this->_html .= $this->displayError($err);
                }
            }
        }

        $this->_html .= $this->_displayCheck();
        $this->_html .= $this->renderForm();

        return $this->_html;
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }
        if (!$this->checkCurrency($params['cart'])) {
            return;
        }

        $this->smarty->assign(
            $this->getTemplateVars()
        );

        $newOption = new PaymentOption();
        $newOption->setModuleName($this->name)
            ->setCallToActionText($this->trans('Pay by QR', [], 'Modules.Checkpayment.Admin'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($this->fetch('module:qrpayment/payment.tpl'));

        return [$newOption];
    }

    public function hookPayment($params)
    {
        if (!$this->active) {
            return;
        }

        // You can generate the QR code here and provide the image URL.
        $qrCodeImageUrl = $this->context->link->getModuleLink(
            $this->name,
            'display',
            array(),
            true
        );

        $this->smarty->assign('qrCodeImageUrl', $qrCodeImageUrl);

        return $this->display(__FILE__, 'payment.tpl');
    }

     
    }
}
