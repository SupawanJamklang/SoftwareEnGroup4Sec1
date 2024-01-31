{extends file='checkout/_partials/steps/checkout-step.tpl'}

{block name='step_content'}
  {hook h='displayPersonalInformationTop' customer=$customer}

  {if !$customer.is_logged || $customer.is_guest}
    <div class="tab-content">
      <div class="tab-pane active" id="checkout-guest-form" role="tabpanel">
        {render file='checkout/_partials/customer-form.tpl' ui=$register_form guest_allowed=$guest_allowed}
      </div>
    </div>
    
    <div class="clearfix">
      <form method="GET" action="{$urls.pages.order}">
        <button
          class="continue btn btn-primary float-xs-right"
          name="controller"
          type="submit"
          value="order"
        >
          {l s='Continue' d='Shop.Theme.Actions'}
        </button>
      </form>
    </div>
  {/if}
{/block}
