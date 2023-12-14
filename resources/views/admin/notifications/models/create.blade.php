<!-- Modal -->
<div class="email-compose modal" id="emailCompose" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
     aria-modal="true" role="dialog">
    <div class="modal-dialog m-0 me-md-4 mb-4">
        <div class="modal-content p-0">
            <div class="modal-header py-2 bg-body">
                <h5 class="modal-title fs-5">Company notification</h5>
                <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body flex-grow-1 pb-sm-0 p-2">
                <form id="email-compose-form">
                    <div class="px-1 py-1 d-flex justify-content-between align-items-center">
                        @php
                            $companies = \App\Helper::getCompaniesList();
                        @endphp
                        <select class="select2 text-black form-select border-0 shadow-none select2-hidden-accessible flex-grow-1"
                                id="emailTo" name="emailContacts">
                            <option value="" disabled selected>Select Destination</option>
                            @foreach($companies as $company)
                                <option value="{{$company->id}}">{{$company->company_name??"--"}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr class="my-0">
                    <div class="d-flex align-items-center my-1">
                        <label for="email-subject"></label>
                        <input type="text" placeholder="Subject"
                               class="form-control border-0 shadow-none"
                               id="email-subject">
                    </div>

                    <hr class="my-0">
                    <div class="flex-column align-items-center my-1">
                        <textarea name="email-message" rows="10" placeholder="Write Message"
                                  class="form-control border-0 shadow-none"
                                  id="email-message"></textarea>
                    </div>

                    <hr class="mt-0 mb-4">

                    <div class="d-flex justify-content-end mb-4">
                        <button type="submit" class="btn btn-primary" id="emailSendBtn">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
