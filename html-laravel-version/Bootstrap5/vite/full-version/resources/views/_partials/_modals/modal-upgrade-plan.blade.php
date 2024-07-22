<!-- Add New Credit Card Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="text-center mb-6">
          <h4 class="mb-2">Upgrade Plan</h4>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row g-4" onsubmit="return false">
          <div class="col-sm-8">
            <label class="form-label" for="choosePlan">Choose Plan</label>
            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
              <option selected>Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Upgrade</button>
          </div>
        </form>
      </div>
      <hr class="mx-4 my-2">
      <div class="modal-body">
        <p class="mb-0">User current plan is standard plan</p>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-2 mt-3">
            <sup class="h5 pricing-currency pt-1 mt-2 mb-0 me-1 text-primary">$</sup>
            <h1 class="display-3 mb-0 text-primary">99</h1>
            <sub class="h6 pricing-duration mt-auto mb-2 pb-1 text-body">/month</sub>
          </div>
          <button class="btn btn-label-danger cancel-subscription mt-4">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Add New Credit Card Modal -->
