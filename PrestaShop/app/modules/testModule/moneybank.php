<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class QrCodePayment extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'qrcodepayment';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'Your Name';

        parent::__construct();

        $this->displayName = $this->l('QR Code Payment');
        $this->description = $this->l('Displays an image of a QR code for payment.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('payment');
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
