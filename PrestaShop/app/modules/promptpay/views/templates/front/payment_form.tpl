{if isset($errors) && $errors}
    <div class="alert alert-danger">
        <ul>
            {foreach from=$errors item=error}
                <li>{$error}</li>
            {/foreach}
        </ul>
    </div>
{/if}

<p>
    <img src="https://img5.pic.in.th/file/secure-sv1/1707826955636.png" alt="QR Code" style="width: 300px; height: auto;">
</p>
<p>Please upload your transfer receipt</p>
<form id="promptPayForm" action="{$link->getModuleLink('promptpay', 'validation', [], true)}" method="post" enctype="multipart/form-data">
    <input type="file" id="payment_slip" class="btn btn-default" name="payment_slip" accept="image/*" required">
    <button type="submit" name="submitPaymentSlip" class="btn btn-danger">Check</button>
</form>
