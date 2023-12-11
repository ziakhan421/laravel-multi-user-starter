<!-- Modal -->
<div class="modal fade" id="renewModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="modelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div id="renewBody" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelLabel">Contract Renew!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" hidden id="recIdForRenew"/>
                <div class="row">
                    <div id="planDiv" class="col-12 form-group">
                        <label class="form-label" for="plan">Select Plan (Contract Period)</label>
                        <select class="form-select" id="renewPlan" required>
                            <option value="1">1 year</option>
                            <option value="2">2 Years</option>
                            <option value="3">3 Years</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button id="renewBtn" type="button" onclick="confirmRenewPlan()" class="btn btn-primary">Confirm</button>
            </div>
        </div>
    </div>
</div>
