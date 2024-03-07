<!-- Modal -->
    <div class="modal fade" id="cityModal" data-bs-backdrop="static" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div id="addCityForm" class="modal-content">
                <form id="sample_form" method="post" class="form-horizontal">
                    <div class="modal-header">
                        <h5 class="modal-title" id="backDropModalTitle">Create Country</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <label for="name" class="form-label">City Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter city name">
                            </div>
                            <div class="col-md-12">
                                <label for="state_id" class="form-label">State Name</label>
                                <select name="state_id" class="select2 form-select" id="state_id">
                                    <option selected disabled>Select Country</option>
                                    @foreach ($states as $state)
                                        <option id="state_id" name="state_id"  value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" name="action" id="action" value="Add"/>
                            <input type="hidden" name="hidden_id" id="hidden_id"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="action_button" id="action_button" class="btn btn-primary saveBtn">Save</button>
                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>