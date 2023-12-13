@extends('layouts.contentNavbarLayout')

@section('title', 'Console')

@section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/libs/datatables-fixedcolumns-bs5/fixedcolumns.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-select-bs5/select.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
@endsection

@section('vendor-script')
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-datatable table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header flex-column flex-md-row">
                        <div class="head-label text-center">
                            <h5 class="card-title mb-0">List of Company</h5>
                        </div>
                        <div class="dt-action-buttons text-end pt-3 pt-md-0">
                            <div class="dt-buttons">
                                <button class="dt-button create-new btn btn-primary" tabindex="0"
                                        aria-controls="DataTables_Table_0" type="button"
                                        data-bs-toggle="modal" data-bs-target="#newCompany">
                                    <span><i class="bx bx-plus me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Add New Company</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-basic table border-top dataTable no-footer dtr-column"
                           id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                           style="width: 1390px;">
                        <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                style="width: 0px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1"
                                colspan="1" style="width: 18px;" data-col="1" aria-label="">
                                <input type="checkbox" class="form-check-input">
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1"
                                style="width: 316px;" aria-label="Name: activate to sort column ascending">Name
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1"
                                style="width: 305px;" aria-label="Email: activate to sort column ascending">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1"
                                style="width: 108px;" aria-label="Date: activate to sort column ascending">Date
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1"
                                style="width: 106px;" aria-label="Salary: activate to sort column ascending">Salary
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                colspan="1"
                                style="width: 144px;" aria-label="Status: activate to sort column ascending">Status
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 87px;"
                                aria-label="Actions">Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-success">GG</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column"><span
                                            class="emp_name text-truncate">Glyn Giacoppo</span><small
                                            class="emp_post text-truncate text-muted">Software Test Engineer</small>
                                    </div>
                                </div>
                            </td>
                            <td>ggiacoppo2r@apache.org</td>
                            <td>04/15/2021</td>
                            <td>$24973.48</td>
                            <td><span class="badge  bg-label-success">Professional</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img
                                                src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><span class="emp_name text-truncate">Evangelina Carnock</span><small
                                            class="emp_post text-truncate text-muted">Cost Accountant</small></div>
                                </div>
                            </td>
                            <td>ecarnock2q@washington.edu</td>
                            <td>01/26/2021</td>
                            <td>$23704.82</td>
                            <td><span class="badge  bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img
                                                src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><span
                                            class="emp_name text-truncate">Olivette Gudgin</span><small
                                            class="emp_post text-truncate text-muted">Paralegal</small></div>
                                </div>
                            </td>
                            <td>ogudgin2p@gizmodo.com</td>
                            <td>04/09/2021</td>
                            <td>$15211.60</td>
                            <td><span class="badge  bg-label-success">Professional</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-success">RP</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column"><span
                                            class="emp_name text-truncate">Reina Peckett</span><small
                                            class="emp_post text-truncate text-muted">Quality Control
                                            Specialist</small>
                                    </div>
                                </div>
                            </td>
                            <td>rpeckett2o@timesonline.co.uk</td>
                            <td>05/20/2021</td>
                            <td>$16619.40</td>
                            <td><span class="badge  bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-dark">AB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><span
                                            class="emp_name text-truncate">Alaric Beslier</span><small
                                            class="emp_post text-truncate text-muted">Tax Accountant</small></div>
                                </div>
                            </td>
                            <td>abeslier2n@zimbio.com</td>
                            <td>04/16/2021</td>
                            <td>$19366.53</td>
                            <td><span class="badge  bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="even">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img
                                                src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><span
                                            class="emp_name text-truncate">Edwina Ebsworth</span><small
                                            class="emp_post text-truncate text-muted">Human Resources
                                            Assistant</small>
                                    </div>
                                </div>
                            </td>
                            <td>eebsworth2m@sbwire.com</td>
                            <td>09/27/2021</td>
                            <td>$19586.23</td>
                            <td><span class="badge bg-label-primary">Current</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        <tr class="odd">
                            <td class="  control" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox"
                                                                    class="dt-checkboxes form-check-input"></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span
                                                class="avatar-initial rounded-circle bg-label-danger">RH</span>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column"><span
                                            class="emp_name text-truncate">Ronica Hasted</span><small
                                            class="emp_post text-truncate text-muted">Software Consultant</small>
                                    </div>
                                </div>
                            </td>
                            <td>rhasted2l@hexun.com</td>
                            <td>07/04/2021</td>
                            <td>$24866.66</td>
                            <td><span class="badge  bg-label-warning">Resigned</span></td>
                            <td>
                                <div class="d-inline-block"><a href="javascript:;"
                                                               class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                                                               data-bs-toggle="dropdown"><i
                                            class="bx bx-dots-vertical-rounded"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end m-0">
                                        <li><a href="javascript:;" class="dropdown-item">Details</a></li>
                                        <li><a href="javascript:;" class="dropdown-item">Archive</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="javascript:;" class="dropdown-item text-danger delete-record">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i
                                        class="bx bxs-edit"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                 aria-live="polite">
                                Showing 1 to 7 of 100 entries
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                                                            aria-disabled="true" role="link"
                                                                            data-dt-idx="previous" tabindex="0"
                                                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                                                                    aria-controls="DataTables_Table_0"
                                                                                    role="link" aria-current="page"
                                                                                    data-dt-idx="0" tabindex="0"
                                                                                    class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                                                              aria-controls="DataTables_Table_0"
                                                                              role="link" data-dt-idx="1"
                                                                              tabindex="0"
                                                                              class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                                                              aria-controls="DataTables_Table_0"
                                                                              role="link" data-dt-idx="2"
                                                                              tabindex="0"
                                                                              class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                                                              aria-controls="DataTables_Table_0"
                                                                              role="link" data-dt-idx="3"
                                                                              tabindex="0"
                                                                              class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                                                              aria-controls="DataTables_Table_0"
                                                                              role="link" data-dt-idx="4"
                                                                              tabindex="0"
                                                                              class="page-link">5</a></li>
                                    <li class="paginate_button page-item disabled" id="DataTables_Table_0_ellipsis">
                                        <a
                                            aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                            data-dt-idx="ellipsis" tabindex="0" class="page-link">…</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                                                              aria-controls="DataTables_Table_0"
                                                                              role="link" data-dt-idx="14"
                                                                              tabindex="0"
                                                                              class="page-link">15</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                            href="#"
                                            aria-controls="DataTables_Table_0"
                                            role="link"
                                            data-dt-idx="next"
                                            tabindex="0"
                                            class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <input type="text" hidden name="recid"/>
                        <div class="row">
                            <div class="col-md-6 col-12 form-group mt-2">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" required id="email" name="email"
                                       placeholder="john.doe@gmail.com">
                            </div>
                            <div class="col-md-6 col-12 form-group mt-2">
                                <div class="form-password-toggle">
                                    <label class="form-label" for="password">Password</label>
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
                            <div class="col-md-6 col-12 form-group mt-2">
                                <label class="form-label" for="plan">Planed</label>
                                <select class="form-select" name="plan" id="plan" required>
                                    <option value="1">1 year</option>
                                    <option value="2">2 Years</option>
                                </select>
                                <div
                                    class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 col-12 form-group mt-2">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" id="name" class="form-control" placeholder="John Doe"
                                       name="name">
                                <div
                                    class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-6 col-12 form-group mt-2">
                                <label class="form-label" for="telephone">Telephone</label>
                                <input type="tel" id="telephone" class="form-control" placeholder="John Doe"
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
                        <button id="progressBtn" class="btn btn-primary" type="button" disabled>
                            <span class="spinner-grow me-1" role="status" aria-hidden="true"></span>
                            Processing...
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script src="{{asset('assets/js/tables-datatables-advanced.js')}}"></script>
    <script src="{{asset('assets/js/tables-datatables-extensions.js')}}"></script>
    <script>
        let table;
        let category;
        let params = '';

        $(document).ready(function () {
            $("#progressBtn").hide()
            $("#companyForm").on("submit", function (e) {
                e.preventDefault();

                let form = $(this)[0];
                let formData = new FormData(form);
                let url = "{{route('admin.users.store')}}";
                if ($('#id').val() != '') {
                    url = "{{route('admin.users.store')}}";
                }
                $("#progressBtn").show()
                $("#submitBtn").hide()

                $.ajax({
                    type: "POST",
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        showToast(data.message);
                    },
                    error: function (jqXHR) {
                        let response = jqXHR.responseJSON;
                        let errorMessage;
                        if (response?.errors) {
                            errorMessage = Object.values(jqXHR.responseJSON.errors)
                                .map(messages => messages.join('<br>'))
                                .join('<br>');
                        } else {
                            errorMessage = response.message;
                        }
                        $('#error').html(errorMessage);
                        showToast(errorMessage, 'error');
                    },
                    complete: function () {
                        $("#progressBtn").hide()
                        $("#submitBtn").show()
                    }
                });
            });

            table = $('#inlineEditDataTable').DataTable({
                processing: true,
                autoWidth: false,
                serverSide: true,
                searching: true,
                lengthMenu: [[10, 20, 50, 100], [10, 20, 50, 100]],
                iDisplayLength: 20,
                order: [],
                ajax: {
                    url: "{{ route('admin.users.index') }}",
                },
                aaSorting: [
                    [5, "desc"]
                ],
                columns: [
                    {
                        title: 'id',
                        data: 'id',
                    }, {
                        title: 'Category Name',
                        data: 'category_name',
                    }, {
                        title: 'Category Description',
                        data: 'category_description',
                    }, {
                        title: 'Total Issued',
                        data: 'total_issue',
                    }, {
                        title: 'Total Purchase',
                        data: 'total_purchase',
                    }, {
                        title: 'Total Remaining',
                        data: 'total_remaining',
                    }, {
                        title: 'Actions',
                        data: 'action',
                    },
                ]
            });
        });

        $("#item_category").on('hidden.bs.modal', function () {
            $('#id').val(null);
            $('#add_category').trigger("reset");
        });

        function showEditViewModel(id) {
            $('#item_categorycode').text('Update Category');
            let url = '{{route("admin.users.show",":id")}}';
            url = url.replace(':id', id);
            $.ajax({
                type: "GET",
                url: url,
                {{--data: {--}}
                    {{--  "_token": "{{ csrf_token() }}",--}}
                    {{--},--}}
                success: function (result) {
                    $('#id').val(result.data.id);
                    $('#category_name').val(result.data.category_name);
                    $('#category_description').val(result.data.category_description);
                    $('#item_category').modal('show');
                    // $('#editModelBody').html(result);
                },
                error: function (result) {
                }
            });
        }

        function deleteRecord(id) {
            Swal.fire(confirmAlert(null, null, null, true, null, null, null))
                .then((result) => {
                    if (result.isConfirmed) {
                        let url = '{{route("admin.users.destroy",":id")}}';
                        url = url.replace(':id', id);
                        let token = '{{csrf_token()}}';
                        $.ajax({
                            url: url,
                            type: 'POST',
                            data: {
                                '_method': 'DELETE',
                                '_token': token
                            },
                            success: function (data) {
                                Swal.fire(
                                    'Deleted!',
                                    data.message,
                                    'success'
                                ).then((result) => {
                                    window.location.reload();
                                })
                            },
                            error: function (jqXHR) {
                                $('#error').text(jqXHR.responseJSON.message);
                            }
                        });
                    }
                });
        }


    </script>

@endsection

