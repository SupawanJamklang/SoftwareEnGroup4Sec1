{**
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
 *}
{block name='cart_detailed_actions'}
  <div class="checkout cart-detailed-actions js-cart-detailed-actions card-block">
    {if $cart.minimalPurchaseRequired}
      <div class="alert alert-warning" role="alert">
        {$cart.minimalPurchaseRequired}
      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
      </div>
    {elseif empty($cart.products) }
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled>{l s='Proceed to checkout' d='Shop.Theme.Actions'}</button>
      </div>
    {else}
      <form id="paymentForm1" action="{$urls.pages.order}" method="post">
        <div class="text-sm-center">
          <button type="submit" class="btn btn-primary" name="customSubmitButton1" value="withInvoice">
            {l s='Process with invoice' d='Shop.Theme.Actions'}
          </button>
          {hook h='displayExpressCheckout'}
        </div>
      </form>
       <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">
          {l s='Process without invoice' d='Shop.Theme.Actions'}
        </button>
 
        {hook h='displayPopUp'}
        <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">{l s='Payment'}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              {block name='order_payment'}
    <form action="/process_payment.php">
        <p>Choose payment method:</p>
        <input type="radio" id="counter" name="payment_method" value="Counter" onclick="showPaymentDetails('counterDetails')" style="display: inline-block; margin-right: 5px;">
        <label for="counter" style="display: inline-block; margin-right: 15px;">Counter Service</label>
        <div id="counterDetails" style="display:none;">
        <img src="https://i.ibb.co/Xs30fgk/cs.png" alt="cs" border="0" /></a>
        <table>
            <tr>
                <td>Amount</td>
                <td>฿1,000.00 (tax incl.)</td>
            </tr>
            <tr>
                <td>Shop name</td>
                <td>CP-Shop</td>
            </tr>
            <tr>
                <td>Shop Address</td>
                <td>123 mittapap Rd.,Nai-Muang,, Amphoe Muang Khon Kaen, Thailand, Khon Kaen</td>
            </tr>
        </table>
    </div>


        <input type="radio" id="bank" name="payment_method" value="Bank" onclick="showPaymentDetails('bankDetails')" style="display: inline-block; margin-right: 5px;">
        <label for="bank" style="display: inline-block; margin-right: 15px;">Bank Transfer</label>
        <div id="bankDetails" style="display:none;">
            <p>Bank details: Krungthai Bank 6795119947 Kitsanapong Pornpun</p>
        </div>
        
        <input type="radio" id="promptpay" name="payment_method" value="PromptPay" onclick="showPaymentDetails('promptpayDetails')" style="display: inline-block; margin-right: 5px;">
        <label for="promptpay" style="display: inline-block; margin-right: 15px;">PromptPay</label>
        <div id="promptpayDetails" style="display:none;">
        <img src="https://i.ibb.co/nrMFFFG/pp.png" alt="pp" border="0" /></a>
            <p>Scan QR code for PromptPay payment</p>
        </div>
        
        <button type="submit" >Submit Payment</button>
    </form>
{/block}


                <script>
                  function showPaymentDetails(elementId) {
                  var element = document.getElementById(elementId);
                  if (element.style.display === "none") {
                    element.style.display = "block";
                  } else {
                    element.style.display = "none";
                  }
                }
              </script>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{l s='Close'}</button>
                <!-- Additional buttons or controls for the modal -->
            </div>
        </div>
    </div>
</div>
    {/if}
  </div>
{/block}

