<!-- Modal -->
<div class="modal fade" id="addCountryModal" data-bs-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="post" id="sample_form" class="form-horizontal">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalTitle">Create Country</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 mb-2">
              <label for="name" class="form-label">Country Name</label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Enter country name">
            </div>
            <div class="col-md-12 mb-2">
              <label for="short_code" class="form-label">Country ISO code</label>
              <input type="text" id="short_code" name="short_code" class="form-control" placeholder="ISO country code, uppercase. Ex: US.">
              <span class="fs-tiny ps-1">Find country ISO code from here: https://en.wikipedia.org/wiki/List_of_ISO_3166_country_codes</span>
            </div>
            <div class="col-md-12 mb-1">
              <label for="phone_code" class="form-label">Country phone code</label>
              <input type="text" id="phone_code" name="phone_code" class="form-control" placeholder="Enter country phone number code">
              <span class="fs-tiny ps-1">Find country phone number code from here: https://en.wikipedia.org/wiki/List_of_country_calling_codes</span>
            </div>
          </div>
          <input type="hidden" name="action" id="action" value="Add"/>
          <input type="hidden" name="hidden_id" id="hidden_id"/>
        </div>
        <div class="modal-footer">
          <button type="submit" name="action_button" id="action_button" class="btn btn-primary">Add</button>
          <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
      
    </div>
  </div>
</div>