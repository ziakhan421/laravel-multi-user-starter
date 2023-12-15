@extends('layouts.contentNavbarLayout')

@section('title', 'Dashboard Alvina - Web')

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
            <div class="px-3 card-header d-flex align-items-center flex-column flex-md-row">
                <div class="head-label">
                    <h5 class="card-title mb-0">
                        Inspection Record</h5>
                </div>
                <div class="ms-md-3">Number of Defects: 5 Times</div>

            </div>
            <div class="card-datatable pb-0 table-responsive">
                <table class="table border-top table-striped table-hover dataTable"
                       style="width:100%  ;margin-bottom: 0!important;">
                    <thead>
                    <tr class="bg-gradient-to-r from-lightblue to-lightblue2">
                        <th class="py-2 px-3">Equipment name</th>
                        <th class="w-32">Stores</th>
                        <th class="w-48">Inspector's name</th>
                        <th class="w-32">Defect or Not</th>
                        <th class="w-36">Inspection time</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-blue-100 cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/098d2dca-eaba-4b17-aa0a-50a85d381023'">
                        <td class="py-2 px-3">Machine 2</td>
                        <td>test</td>
                        <td>FJT</td>
                        <td class="text-red-600">Defect</td>
                        <td>2023-10-16 15:42:42</td>
                    </tr>
                    <tr class="bg-white cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/0c6c860d-3e5f-48ea-806f-9b97659adb73'">
                        <td class="py-2 px-3">FJT MACHINE</td>
                        <td>FJT</td>
                        <td>FJT</td>
                        <td class="text-green-600">Good</td>
                        <td>2023-11-14 18:49:51</td>
                    </tr>
                    <tr class="bg-blue-100 cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/1e62d509-1a5c-4703-84da-4426441d94ff'">
                        <td class="py-2 px-3">Machine 2</td>
                        <td>test</td>
                        <td>FJT</td>
                        <td class="text-red-600">Defect</td>
                        <td>2023-10-20 09:07:45</td>
                    </tr>
                    <tr class="bg-white cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/5434d1fe-cb73-42bf-8d41-a09a0360622b'">
                        <td class="py-2 px-3">machine a</td>
                        <td>branch a</td>
                        <td>FJT</td>
                        <td class="text-green-600">Good</td>
                        <td>2023-10-18 11:41:05</td>
                    </tr>
                    <tr class="bg-blue-100 cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/54a4d2a8-2d75-47a2-b5b6-0822afa958ad'">
                        <td class="py-2 px-3">FJT MACHINE</td>
                        <td>FJT</td>
                        <td>FJT</td>
                        <td class="text-orange-400">Suspended</td>
                        <td>2023-10-16 15:23:31</td>
                    </tr>
                    <tr class="bg-white cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/54ff1e7a-0439-4f7e-93ea-8ad3bf74a890'">
                        <td class="py-2 px-3">Machine 2</td>
                        <td>test</td>
                        <td>FJT</td>
                        <td class="text-green-600">Good</td>
                        <td>2023-10-16 15:22:50</td>
                    </tr>
                    <tr class="bg-blue-100 cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/70e10675-31e2-415b-a56b-5c5ae368f386'">
                        <td class="py-2 px-3">FJT MACHINE</td>
                        <td>FJT</td>
                        <td>KENJI</td>
                        <td class="text-red-600">Defect</td>
                        <td>2023-12-14 14:41:42</td>
                    </tr>
                    <tr class="bg-white cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/8228840a-0869-452a-88e2-e7f91d4919c8'">
                        <td class="py-2 px-3">Machine 2</td>
                        <td>test</td>
                        <td>FJT</td>
                        <td class="text-red-600">Defect</td>
                        <td>2023-10-17 19:50:58</td>
                    </tr>
                    <tr class="bg-blue-100 cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/8d6192b2-de45-4cdb-90a1-70f3c364a1ba'">
                        <td class="py-2 px-3">テスト</td>
                        <td>test</td>
                        <td>FJT</td>
                        <td class="text-green-600">Good</td>
                        <td>2023-11-10 14:58:34</td>
                    </tr>
                    <tr class="bg-white cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/9beecf73-7f21-4c98-8117-2d79de9f05f3'">
                        <td class="py-2 px-3">FJT MACHINE</td>
                        <td>FJT</td>
                        <td>FJT</td>
                        <td class="text-green-600">Good</td>
                        <td>2023-11-08 18:29:06</td>
                    </tr>
                    <tr class="bg-blue-100 cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/adc5745f-d966-47b0-b96a-0f9950ec4dc7'">
                        <td class="py-2 px-3">FJT MACHINE</td>
                        <td>FJT</td>
                        <td>KENJI</td>
                        <td class="text-green-600">Good</td>
                        <td>2023-12-14 22:40:10</td>
                    </tr>
                    <tr class="bg-white cursor-pointer text-gray-800 hover:bg-blue-200"
                        onclick="window.location.href = '/inspection/result/dba529b3-d46b-4d66-bba4-23721d7577c8'">
                        <td class="py-2 px-3">FJT MACHINE</td>
                        <td>FJT</td>
                        <td>FJT</td>
                        <td class="text-red-600">Defect</td>
                        <td>2023-11-14 16:11:04</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="card mt-5">
            <div class="px-3 card-header border-bottom d-flex align-items-center flex-column flex-md-row">
                <div class="head-label">
                    <h5 class="card-title mb-0">Notice from operation</h5>
                </div>
            </div>
            <div class="card-datatable dataTable_select table-responsive">
                <table class="table border-top dataTable"
                       id="DataTables" aria-describedby="DataTables_info" style="width:100%;">
                </table>
            </div>

        </div>
    </div>

    @include('company.dashboard.models.view')
@endsection

@section('page-script')
    <script>
        let table;
        let category;
        let params = '';
        $(document).ready(function () {

            table = $('#DataTables').DataTable({
                processing: true,
                autoWidth: true,
                serverSide: false,
                ordering: false,
                select: {
                    style: 'multi',
                    selector: 'td:first-child',
                },
                searching: false,
                columnDefs: [{
                    targets: 0,
                    searchable: false,
                    render: function (data, type, row) {
                        return '<input type="checkbox" class="dt-checkboxes form-check-input"  data-id="' + row.id + '">'
                    },
                    checkboxes: {selectRow: !0, selectAllRender: '<input type="checkbox" class="form-check-input">'}
                }, {
                    orderable: false,
                    targets: [0, 1, 2, 3]
                }],
                lengthMenu: [[10, 20, 50, 100], [10, 20, 50, 100]],
                iDisplayLength: 10,
                ajax: {
                    url: "{{ route('notifications.index') }}",
                },
                columns: [
                    {
                        title: 'id',
                        data: 'id',
                    }, {
                        title: 'Title',
                        data: 'subject',
                    }, {
                        title: 'Message',
                        data: 'message',
                    }, {
                        title: 'Time',
                        data: 'created_at',
                    }, {
                        title: 'Action',
                        data: 'action',
                    }
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
                if (selectedIds.length > 0) {
                    selectedIds = selectedIds.join(',');
                    deleteRecord(selectedIds);
                }
            });
        });

        function deleteRecord(selectedIds) {
            let url = '{{route("notifications.destroy",":id")}}';
            url = url.replace(':id', selectedIds);
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
                        $('#deleteButton').hide();
                        table.ajax.reload(null, false);
                    })
                },
                error: function (jqXHR) {
                    showError(jqXHR.responseJSON);
                }
            });
        }

        function showRecord(data) {
            $('#subjectValue').text(data.subject);
            $('#messageValue').text(data.message);
            $('#dateValue').text(data.created_at);

            $('#viewNoti').modal('show');
        }
    </script>

@endsection

