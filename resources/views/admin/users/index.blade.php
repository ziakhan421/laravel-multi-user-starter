@extends('layouts.contentNavbarLayout')

@section('title', 'Console')

@section('vendor-style')
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-select-bs5/select.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
@endsection

@section('vendor-script')
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center flex-column flex-md-row">
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
            <div class="card-datatable dataTable_select table-responsive">
                <table class="table border-top dataTable"
                       id="DataTables" aria-describedby="DataTables_info" style="width:100%">
                </table>
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
                        <button id="progressBtn" class="btn btn-primary" type="button" disabled>
                            <span class="spinner-grow me-1" role="status" aria-hidden="true"></span>
                            Processing...
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="renewModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="modelLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
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
                    <button id="renewBtn" type="button" onclick="confirmRenewPlan()" class="btn btn-primary">Confirm
                    </button>
                    <button id="progressRenewBtn" class="btn btn-primary" type="button" disabled>
                        <span class="spinner-grow me-1" role="status" aria-hidden="true"></span>
                        Processing...
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="viewCompany" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
         aria-labelledby="modelLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelLabel">Company</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled p-0 m-0">
                        <li class="d-flex flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3">Email:</div>
                            <div id="emailValue" class="ms-3"></div>
                        </li>
                        <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3 font-medium">Company Name:</div>
                            <div id="companyNameValue" class="ms-3"></div>
                        </li>
                        <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3 font-medium">Planned:</div>
                            <div id="planValue" class="ms-3"></div>
                        </li>
                        <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3 font-medium">Expired:</div>
                            <div id="planExpiredValue" class="ms-3"></div>
                        </li>
                        <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3 font-medium">Name:</div>
                            <div id="nameValue" class="ms-3"></div>
                        </li>
                        <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3 font-medium">Telephone:</div>
                            <div id="telephoneValue" class="ms-3"></div>
                        </li>
                        <li class="d-flex border-top flex-md-row flex-column py-3 px-2">
                            <div class="fw-bold col-12 col-md-3 font-medium">Note:</div>
                            <div id="noteValue" class="ms-3"></div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('page-script')
    <script>
        let table;
        let category;
        let params = '';
        $(document).ready(function () {
            $("#progressBtn").hide()
            $("#progressRenewBtn").hide()
            $("#companyForm").on("submit", function (e) {
                e.preventDefault();
                $('#error').html('');

                let form = $(this)[0];
                let formData = new FormData(form);
                let url = "{{route('admin.users.store')}}";
                if ($('#recid').val() != '') {
                    url = '{{route("admin.users.update",":id")}}';
                    url = url.replace(':id', $('#recid').val());
                    formData.append('_method', 'PUT');
                    if ($('#password').val() != '') {
                        formData.append('newPassword', $('#password').val());
                    }
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
                        $('#newCompany').modal('hide');
                        table.ajax.reload(null, false);
                    },
                    error: function (jqXHR) {
                        showError(jqXHR.responseJSON);
                    },
                    complete: function () {
                        $("#progressBtn").hide()
                        $("#submitBtn").show()
                    }
                });
            });

            table = $('#DataTables').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: false,
                select: {
                    style: 'multi',
                    selector: 'td:first-child',
                },
                buttons: [
                    'copy', 'excel', 'pdf'
                ],
                searching: true,
                columnDefs: [{
                    targets: 0,
                    searchable: false,
                    render: function (data, type, row) {
                        return '<input type="checkbox" class="dt-checkboxes form-check-input"  data-id="' + row.id + '">'
                    },
                    checkboxes: {selectRow: !0, selectAllRender: '<input type="checkbox" class="form-check-input">'}
                }, {
                    orderable: false,
                    targets: [0, 2, 3, 4, 5, 6]
                }],
                aaSorting: [
                    [1, "desc"]
                ],
                lengthMenu: [[10, 20, 50, 100], [10, 20, 50, 100]],
                iDisplayLength: 10,
                ajax: {
                    url: "{{ route('admin.users.index') }}",
                },
                columns: [
                    {
                        title: 'id',
                        data: 'id',
                    }, {
                        title: 'Company Name',
                        data: 'company_name',
                    }, {
                        title: 'Email',
                        data: 'email',
                    }, {
                        title: 'Registered Date',
                        data: 'plan_date',
                    }, {
                        title: 'Plan',
                        data: 'plan',
                    }, {
                        title: 'Expire Date',
                        data: 'expire_date',
                    }, {
                        title: 'Actions',
                        data: 'action',
                    },
                ]
            });
            $('#DataTables_length').append('<button id="deleteButton" class="ms-2 btn btn-danger btn-sm" style="display: none"><i class="me-2 font-size-1 bx bxs-trash"></i>Delete Selected</button>');

            // Event listener for the DataTable select event
            table.on('select deselect', function () {
                // Check if any row is selected
                var anyRowSelected = table.rows({selected: true}).count() > 0;
                if (anyRowSelected) {
                    $('#deleteButton').show();
                } else {
                    $('#deleteButton').hide();
                }
            });

            $('#deleteButton').on('click', function () {
                let selectedIds = table.rows({selected: true}).data().pluck('id').toArray();
                console.log('Deleting IDs:', selectedIds);
            });
        });

        function confirmRenewPlan() {
            let recId = $('#recIdForRenew').val();
            let planId = $('#renewPlan').val();

            let url = '{{route("admin.users.update-plan",[":id",":plan"])}}';
            url = url.replace(':id', recId);
            url = url.replace(':plan', planId);

            $.ajax({
                type: "GET",
                url: url,
                success: function (result) {
                    Swal.fire(
                        'Success!',
                        result.message,
                        'success'
                    ).then((result) => {
                        table.ajax.reload(null, false);
                    })

                    $('#renewModel').modal('hide');
                },
                error: function (result) {
                    showError(result.responseJSON);
                }
            });
        }

        $("#newCompany").on('hidden.bs.modal', function () {
            $("#companyForm").trigger('reset');
            $('#recid').val(null);
            $('#error').html(null);
            $('#passwordLabel').text('Password');
            $('#planDiv').show();
        });

        function showEditViewModel(id) {
            $('#modelLabel').text('Update Company');
            $('#submitBtn').text('Update');
            let url = '{{route("admin.users.show",":id")}}';
            url = url.replace(':id', id);
            $.ajax({
                type: "GET",
                url: url,
                success: function (result) {
                    $('#recid').val(result.data.id);
                    $('#company_name').val(result.data.company_name);
                    $('#name').val(result.data.name);
                    $('#passwordLabel').text('Change Password');
                    $('#password').val('').attr('required', null);
                    $('#telephone').val(result.data.telephone);
                    $('#email').val(result.data.email);
                    $('#note').val(result.data.note);

                    $('#planDiv').hide();

                    $('#newCompany').modal('show');
                },
                error: function (result) {
                    showError(result.responseJSON);
                }
            });
        }

        function deleteRecord(id) {
            Swal.fire(confirmAlert(null, null, null, true, null))
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
                                    table.ajax.reload(null, false);
                                })
                            },
                            error: function (jqXHR) {
                                showError(jqXHR.responseJSON);
                            }
                        });
                    }
                });
        }

        function showRecord(id) {
            let url = '{{route("admin.users.show",":id")}}';
            url = url.replace(':id', id);
            $.ajax({
                type: "GET",
                url: url,
                success: function (result) {
                    $('#companyNameValue').text(result.data.company_name);
                    $('#nameValue').text(result.data.name);
                    $('#telephoneValue').text(result.data.telephone);
                    $('#emailValue').text(result.data.email);
                    $('#noteValue').text(result.data.note);
                    $('#planValue').text(result.data.plan + " years");
                    $('#planExpiredValue').text(result.data.expireDate);

                    $('#viewCompany').modal('show');
                },
                error: function (result) {
                    showError(result.responseJSON);
                }
            });
        }

        function showRenewModel(id) {
            $('#recIdForRenew').val(id);
            $('#renewModel').modal('show');
        }
    </script>

@endsection

