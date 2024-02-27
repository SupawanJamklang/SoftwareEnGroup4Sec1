{block name='cart_detailed_actions'}
  <style>
    .payment-options {
      display: flex;
      flex-direction: column;
    }

    .payment-option {
      margin-bottom: 10px;
    }
  </style>

  <div class="checkout cart-detailed-actions js-cart-detailed-actions card-block">
    {if $cart.minimalPurchaseRequired}
      <div class="alert alert-warning" role="alert">
        {$cart.minimalPurchaseRequired}
      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
      </div>
    {elseif empty($cart.products)}
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
      </div>
    {else}
      <div class="text-sm-center">
        <a href="{$urls.pages.order}" class="btn btn-primary">{l s='Proceed With Invoice' d='Shop.Theme.Actions'}</a>
        {hook h='displayExpressCheckout'}
      </div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">
        {l s='Proceed Without Invoice' d='Shop.Theme.Actions'}
      </button>

      {hook h='displayPaymentTop'}

      <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="paymentModalLabel">Payment Options</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="/action_page.php">
                <p>Choose Payment Method:</p>
                <div class="payment-options">
                  <div class="payment-option">
        <input type="radio" id="bank" name="fav_language" value="Bank" onclick="showPaymentDetails('bankDetails')" style="display: inline-block; margin-right: 5px;">
        <label for="bank" style="display: inline-block; margin-right: 15px;">Counter Service</label>
        <div id="bankDetails" style="display:none;">
          <p>Bank details: Kbank 0448447561 มหาวิทยาลัยขอนแก่น</p>
        </div>
      </div>

      <!-- ปุ่ม Wirebank -->
      <div class="payment-option">
        <input type="radio" id="wirebank" name="fav_language" value="Wirebank" onclick="showPaymentDetails('wirebankDetails')" style="display: inline-block; margin-right: 5px;">
        <label for="wirebank" style="display: inline-block; margin-right: 15px;">Wirebank</label>
        <div id="wirebankDetails" style="display:none;">
          <p>Wirebank details: XXXX-XXXX-XXXX</p>
        </div>
      </div>

      <!-- ปุ่ม Promptpay -->
      <div class="payment-option">
        <input type="radio" id="promptpay" name="fav_language" value="Promptpay" onclick="showPaymentDetails('promptpayDetails')" style="display: inline-block; margin-right: 5px;">
        <label for="promptpay" style="display: inline-block; margin-right: 15px;">Promptpay</label>
        <div id="promptpayDetails" style="display:none;">
          <p>Promptpay details: XXXX-XXXX-XXXX</p>
        </div>
      </div>
                </div>

                <script>
                  function showPaymentDetails(elementId) {
                    console.log('Function called');
                    var element = document.getElementById(elementId);
                    if (element.style.display === "none") {
                      element.style.display = "block";
                    } else {
                      element.style.display = "none";
                    }
                  }
                </script>
              </form>
            </div>
          </div>
        </div>
      </div>

    {/if}
  </div>
{/block}
