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
        <p>ขั้นตอนการจ่ายเงิน</p>
        <form action="/action_page.php">
          <p>เลือกช่องทางการชำระเงิน:</p>
          <input type="radio" id="bank" name="fav_language" value="Bank" onclick="showPaymentDetails('bankDetails')" style="display: inline-block; margin-right: 5px;">
          <label for="bank" style="display: inline-block; margin-right: 15px;">ธนาคาร</label>

          <div id="bankDetails" style="display:none;">
            <p>Bank details: Kbank 0448447561 มหาวิทยาลัยขอนแก่น</p>
          </div>

          </div>
        </form>
      </div>
    </div>
  </div>
</div>