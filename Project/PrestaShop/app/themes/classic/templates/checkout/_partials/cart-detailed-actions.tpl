{block name='cart_detailed_actions'}
  <style>
    .payment-options {
      display: flex;
      flex-direction: column;
    }

    .payment-option {
      margin-bottom: 10px;
    }
    
    .btn-primary {
      margin-bottom: 5px;
  }
    table {
    width: 100%;
    border-collapse: collapse;
    background-color: #f0f0f0; /* สีเทาสำหรับพื้นหลัง */
  }

  th, td {
    border: 4px solid #fff; /* สีขอบสีขาว */
    padding: 8px; /* ระยะห่างของข้อมูลในเซลล์ */
  }

  th {
    background-color: #d9d9d9; /* สีเทาสำหรับหัวตาราง */
  }

  td:last-child {
    border-right: 1px solid #fff; /* เส้นขอบขวาสุดของเซลล์ */
  }

  .KrungThaiBank-image {
    width: 50px; /* กำหนดความกว้างของรูปภาพ */
    height: auto; /* ให้ความสูงปรับไปตามสัดส่วนเดียวกับความกว้าง */
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
        <a href="{$urls.pages.order}" class="btn btn-primary">
        {l s='Checkout With Invoice' d='Shop.Theme.Actions'}</a>
        {hook h='displayExpressCheckout'}
      </div>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">
        {l s='Checkout Without Invoice' d='Shop.Theme.Actions'}
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
<!-- ปุ่ม Counter Service -->
<div class="payment-option">
  <input type="radio" id="bank" name="fav_language" value="Bank" onclick="showPaymentDetails('bankDetails', this)" style="display: inline-block; margin-right: 5px;">
  <label for="bank" style="display: inline-block; margin-right: 15px;">Counter Service</label>
  <div id="bankDetails" class="payment-details" style="display:none;">
  <img src="https://i.ibb.co/mFRN4Ms/barcode.png" alt="barcode" border="0" />
   <table>
  <tr>
    <th>Amount</th>
    <td>{$cart.totals.total_including_tax.value} (tax incl.)</td>
  </tr>
  <tr>
    <th>Payee</th>
    <td>___________</td>
  </tr>
  <tr>
    <th>Send your check to this address</th>
    <td>College of Computing Khon Kaen University. 123 Vidhayavibaj Building, Mitraparp road Muang District, Khon Kaen 40002</td>
  </tr>
</table>

  </div>
</div>

<!-- ปุ่ม Wire transfer -->
<div class="payment-option">
  <input type="radio" id="wiretransfer" name="fav_language" value="Wiretransfer" onclick="showPaymentDetails('wiretransferDetails', this)" style="display: inline-block; margin-right: 5px;">
  <label for="wiretransfer" style="display: inline-block; margin-right: 15px;">Wire Transfer</label>
  <div id="wiretransferDetails" class="payment-details" style="display:none;">
    <p>Wire Transfer Details: 
    <img src="https://i.ibb.co/8rg9vWj/Krung-Thai-Bank-logo.png" alt="KrungThaiBank-image" border="0" />
    Krungthai Bank 679-5-11994-7 นายกฤษณะพงศ์ พรพันธุ์</p>
  </div>
</div>

<!-- ปุ่ม Promptpay -->
<div class="payment-option">
  <input type="radio" id="promptpay" name="fav_language" value="Promptpay" onclick="showPaymentDetails('promptpayDetails', this)" style="display: inline-block; margin-right: 5px;">
  <label for="promptpay" style="display: inline-block; margin-right: 15px;">Promptpay</label>
  <div id="promptpayDetails" class="payment-details" style="display:none;">
    <p>Promptpay details: XXXX-XXXX-XXXX</p>
  </div>
</div>
      
        <a href="http://localhost:8080/en/order-confirmation?id_cart=2&id_module=48&id_order=2&key=dc80a4ef582345e7c8695c65e5f5f425" class="btn btn-primary">
        {l s='Place Order' d='Shop.Theme.Actions'}
        </a>
        {hook h='displayExpressCheckout'}

        
                </div>
<script>
  function showPaymentDetails(elementId, radio) {
    console.log('Function called');
    var element = document.getElementById(elementId);

    // ปิดทุก element ที่ไม่ใช่ตัวปัจจุบัน
    var allDetails = document.querySelectorAll('.payment-details');
    allDetails.forEach(function(detail) {
      if (detail.id !== elementId) {
        detail.style.display = "none";
      }
    });

    // เปิด/ปิด element ตามที่คุณต้องการ
    if (radio.checked) {
      if (element.style.display === "none") {
        element.style.display = "block";
      } else {
        element.style.display = "none";
      }
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
