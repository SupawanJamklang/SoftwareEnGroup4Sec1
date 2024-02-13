<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class PromptPay extends PaymentModule
{
    public function __construct()
    {
        $this->name = 'promptpay';
        $this->tab = 'payments_gateways';
        $this->version = '1.0.0';
        $this->author = 'SE@G04';
        $this->need_instance = 0;
        $this->ps_versions_compliancy = ['min' => '1.7', 'max' => _PS_VERSION_,];
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('QRcode');
        $this->description = $this->l('Bank transfer payment by using QRcode from promptpay.');
    }

    public function install()
    {
        if (!parent::install() ||
            !$this->registerHook('paymentOptions') ||
            !$this->registerHook('paymentReturn')
        ) {
            return false;
        }
        return true;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        return true;
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return;
        }

        $cartId = $params['cart']->id;

         //Pass the cart ID to the payment form template
        $paymentForm = $this->context->smarty->fetch($this->local_path . 'views/templates/front/payment_form.tpl', array(
            'cart_id' => $cartId,
        ));
    
        $newOption = new PrestaShop\PrestaShop\Core\Payment\PaymentOption();
        $newOption->setCallToActionText($this->l('Promptpay'))
            ->setAction($this->context->link->getModuleLink($this->name, 'validation', [], true))
            ->setAdditionalInformation($paymentForm);
            
        return [$newOption];
    }

    public function hookPaymentReturn($params)
    {
        if (!$this->active) {
            return;
        }

        // Check if payment was successful
        if ($params['order']->getCurrentState() == Configuration::get('PS_OS_PAYMENT')) {
            // Update order status to "Payment accepted"
            $newOrderStatus = Configuration::get('PS_OS_PAYMENT');
            $params['order']->setCurrentState($newOrderStatus);

            // Display success message to the customer
            $message = $this->l('Your payment via PromptPay was successful.');

            // Get the confirmation page URL
            $orderConfirmationUrl = $this->context->link->getPageLink('order-confirmation', true);

            // Display a button/link to redirect back to the confirmation page
            $confirmationLink = '<a href="' . $orderConfirmationUrl . '" class="btn btn-primary">' . $this->l('Back to confirmation page') . '</a>';

            // Assign the message and confirmation link to the template
            $this->context->smarty->assign(array(
                'payment_message' => $message,
                'confirmation_link' => $confirmationLink,
            ));

            // Fetch the template
            return $this->fetch($this->local_path .'views/templates/front/payment_return.tpl');
        }
    }
}
