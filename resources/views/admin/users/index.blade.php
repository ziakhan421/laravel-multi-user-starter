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

    @include('admin.users.models.create')

    @include('admin.users.models.renew-plan')

    @include('admin.users.models.view')
@endsection

@section('page-script')
    <script>
        let table;
        let category;
        let params = '';
        $(document).ready(function () {
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
                showProgressBar($("#companyForm"),true);
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
                        showProgressBar($("#companyForm"),false);
                    },
                    complete: function () {
                        showProgressBar($("#companyForm"),false);
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
            showProgressBar($("#renewBody"),true);

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
                    showProgressBar($("#renewBody"),false);
                },
                complete: function () {
                    showProgressBar($("#renewBody"),false);
                }
            });
        }

        $("#newCompany").on('hidden.bs.modal', function () {
            $("#companyForm").trigger('reset');
            $('#recid').val(null);
            $('#error').html(null);
            $('#passwordLabel').text('Password');
            $('#planDiv').show();
            $('#submitBtn').text('Register');
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

