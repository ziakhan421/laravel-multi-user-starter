<!-- Modal -->
<div class="modal fade" id="newCompany" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="modelLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modelLabel">Add Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="companyForm">
                <div class="modal-body">

                    @csrf
                    <input type="text" hidden id="recid"/>
                    <div class="row">
                        <div class="col-md-6 col-12 form-group mt-2">
                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" type="email" required id="email" name="email"
                                   placeholder="john.doe@gmail.com">
                        </div>
                        <div class="col-md-6 col-12 form-group mt-2">
                            <div class="form-password-toggle">
                                <label id="passwordLabel" class="form-label" for="password">Password</label>
                                <div class="input-group input-group-merge has-validation">
                                    <input class="form-control" type="password" id="password" required
                                           name="password" placeholder="············" min="6"
                                           aria-describedby="multicol-password2">
                                    <span class="input-group-text cursor-pointer" id="multicol-password2"><i
                                            class="bx bx-hide"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 form-group mt-2">
                            <label class="form-label" for="company_name">Company Name</label>
                            <input type="text" id="company_name" class="form-control" placeholder="John Doe company"
                                   name="company_name" required>
                        </div>
                        <div id="planDiv" class="col-md-6 col-12 form-group mt-2">
                            <label class="form-label" for="plan">Planed</label>
                            <select class="form-select" name="plan" id="plan" required>
                                <option value="1">1 year</option>
                                <option value="2">2 Years</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12 form-group mt-2">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" class="form-control" required placeholder="John Doe"
                                   name="name">
                        </div>
                        <div class="col-md-6 col-12 form-group mt-2">
                            <label class="form-label" for="telephone">Telephone</label>
                            <input type="tel" id="telephone" class="form-control" placeholder="304 752 4631"
                                   name="telephone">
                        </div>
                        <div class="col-12 form-group mt-2">
                            <label class="form-label" for="note">Note</label>
                            <textarea class="form-control" id="note" name="note"
                                      rows="3"></textarea>
                        </div>

                        <div class="error" id="error"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="submitBtn" type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>

        </div>
    </div>
</div>
