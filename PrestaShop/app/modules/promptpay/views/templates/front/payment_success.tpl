{block name='page_content'}
    <div class="alert alert-success" role="alert">
        {l s='Payment Successful!' d='Modules.PromptPay'}
    </div>
    <div>
        {l s='Thank you for your payment.' d='Modules.PromptPay'}
    </div>
    <div>
        {l s='Order Reference: ' d='Modules.PromptPay'}{$paymentDetails.order_reference}
    </div>
    <div>
        {l s='Amount Paid: ' d='Modules.PromptPay'}{$paymentDetails.amount_paid} {l s='USD' d='Modules.PromptPay'}
    </div>
    <div>
        {l s='Payment Date: ' d='Modules.PromptPay'}{$paymentDetails.payment_date}
    </div>
    <div>
        {l s='Uploaded Payment Slip: ' d='Modules.PromptPay'}{$paymentSlip}
    </div>
    {*
    Additional details or instructions can be added here
    *}
{/block}
