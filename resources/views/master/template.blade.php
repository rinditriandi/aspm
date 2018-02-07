@extends('layouts.master') 

@section('title', 'Master Template') 

@section('content')
<div class="container-fluid">

    <!--Section: Basic examples-->
    <section>
        <h4 class="font-bold mt-lg-5 mb-5 pb-4 text-center">Master Template</h4>

        <!--Top Table UI-->
        <div class="card p-2 mb-5">
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6">
                    <form class="form-inline mt-2 ml-2">
                        <input class="form-control my-0 py-0" type="text" placeholder="Search">
                        <button class="btn btn-sm btn-primary">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!--Top Table UI-->

        <div class="card card-cascade narrower z-depth-1">
            <!--Card image-->
            <div class="view gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                <div>
                    <a href="{{ url('dashboard') }}">
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="top" title="Go to Dashboard">
                            <i class="fa fa-th-large mt-0"></i>
                        </button>
                    </a>
                    <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                        <i class="fa fa-columns mt-0"></i>
                    </button>
                </div>

                <a href="" class="white-text mx-3">List Template</a>

                <div>

                    <button type="button" onclick="addKPI()" id="add-modal" class="btn btn-outline-white btn-rounded btn-sm px-2" data-tooltip="tooltip"
                        data-target="#newtemplate" data-placement="top" title="Add IPM">
                        <i class="fa fa-plus mt-0"></i>
                    </button>

                    <a href="http://10.100.180.22/knowledge" target=_blank>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-tooltip="tooltip" data-placement="top" title="Information">
                            <i class="fa fa-info-circle mt-0"></i>
                        </button>
                    </a>
                </div>
            </div>
            <!--/Card image-->

            <div class="px-4">

                <div>
                    <!--Table-->
                    <table id="template-table" class="table table-hover table-sm mb-0" cellspacing="0" width="100%">

                        <!--Table head-->
                        <thead>
                            <tr class="item">
                                <th>Action</th>
                                <th>#</th>
                                <th>KPI</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                    </table>
                    <!--Table-->
                </div>

                <hr class="my-0">

                <!--Bottom Table UI-->
                <div class="d-flex justify-content-between">

                </div>
                <!--Bottom Table UI-->

            </div>
        </div>

    </section>
    <!--Section: Basic examples-->

    <!--Modal: Add KPI-->
    <div class="modal fade" id="addKPI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
                <form method="post" data-toggle="validator">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <!--Header-->
                    <div class="modal-header light-blue darken-3 white-text">
                        <h4 class="modal-title">
                            <i class="fa fa-newspaper-o"></i>
                        </h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body mb-0">
                        <input type="hidden" id="id" name="id">
                        <div class="md-form form-sm floating">
                            <select id="department_add" name="department" class="mdb-select colorful-select dropdown-primary" searchable="Search here..">
                                <option disabled selected>Select Department</option>
                                @foreach($departments as $department)
                                <option 
                                    value="{{ $department->CMD_IDX_M_Department }}"> {{ $department->DepartmentName }}
                                </option>
                                @endforeach
                            
                            </select>
                            <label>Department</label>
                            <p class="errorDepartment alert-danger hidden"></p>
                        </div>
                        <div class="md-form form-sm floating">
                            <input type="text" id="KPI_add" name="KPI" class="form-control">
                            <label for="KPI">KPI</label>
                            <p class="errorKPI alert-danger hidden"></p>
                        </div>
                        <div class="md-form form-sm floating">
                            <fieldset class="form-group">
                                <input type="checkbox" id="general">
                                <label for="general">Is General</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center mt-1-half" id="modal-footer">
                            <button type="submit" class="btn btn-info mb-1 add">Save
                                <i class="fa fa-check ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Add KPI-->

    <!--Modal: Delete KPI-->
    <div class="modal fade" id="deleteKPI" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
                <form method="post" novalidate="novalidate">
                    {{ csrf_field() }} {{ method_field('POST') }}
                    <!--Header-->
                    <div class="modal-header light-blue darken-3 white-text">
                        <h4 class="modal-title">
                            <i class="fa fa-newspaper-o"></i>
                        </h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body mb-0">
                        <input type="hidden" id="id" name="id">
                        <div class="md-form form-sm floating">
                            
                            <select id="department_delete" name="department" class="mdb-select colorful-select dropdown-primary" searchable="Search here.."
                                disabled>
                                <option value="" disabled selected>Select Department</option>
                                @foreach($departments as $department)
                                <option value="{{ $department->CMD_IDX_M_Department }}">{{ $department->DepartmentName }}</option>
                                @endforeach
                            </select>
                            <label>Department</label>
                            <p class="errorDepartment alert-danger hidden"></p>
                        </div>
                        <div class="md-form form-sm floating">
                            <input type="text" id="kpi_delete" name="KPI" class="form-control" disabled>
                            <label for="KPI" data-error="wrong" data-success="right">KPI</label>
                            <p class="errorKPI alert-danger hidden"></p>
                        </div>
                        <div class="md-form form-sm floating">
                            <fieldset class="form-group">
                                <input type="checkbox" id="general">
                                <label for="general">Is General</label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="text-center mt-1-half" id="modal-footer">
                            <button type="submit" class="btn btn-info mb-1 add">Save
                                <i class="fa fa-check ml-1"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: Delete KPI-->

</div>
@endsection 

@section('script')
<script src="{{ asset('public/materialize/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/materialize/js/dataTables.bootstrap4.min.js') }}"></script>

<script>
    // Datatabel List
    $(document).ready(function () {
        $('#template-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.template') }}",
            columns: [
                {data: 'action', name: 'action', orderable: false, searchable: false},
                {data: 'CMD_IDX_M_KPI', name: 'CMD_IDX_M_KPI'},
                {data: 'KPI', name: 'KPI'},
                {data: 'Department', name: 'Department'}
            ]
        });

        // Material Select Initialization
        $(document).ready(function () {
            $('select[name="template-table_length"]').material_select();
        });

    });

        //Add KPI
        function addKPI() {
            save_method = 'add';
            $('input[name=_method').val('POST');
            $('#addKPI').modal('show');
            $('#addKPI form')[0].reset();
            $('.modal-title').text('ADD KPI');
            $.ajax({
                url: url,
                type: "POST",
                data: $('#addKPI form').serialize(),
                success: function ($data) {
                    $('#addKPI').modal('hide');

                },
                error: function () {
                    alert('Oops Something error!');
                }
            });
        }

        // Edit KPI
        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method').val('PATCH');
            $('#addKPI form')[0].reset();
            $.ajax({
                url: "{{ url('master/template') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function (data) {
                    $('#addKPI').modal('show');
                    $('.modal-title').text('Edit KPI');
                    $('#KPI_add').val(data.KPI);
                    console.log(data);
                },
                error: function () {
                    alert('Nothing Data');
                }
            });
        }

        // Delete KPI
        function deleteData(id) {
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, Delete it!' 
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: "{{ url('master/template') }}" + '/' + id,
                        type: "POST",
                        data: {'_method' : 'DELETE', '_token' : csrf_token},
                        success : function(data) {
                            $('#template-table').DataTable().ajax.reload();
                            swal({
                                title: 'Success!',
                                text: 'Data has been deleted!',
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function () {
                            swal({
                                title: 'Oops...',
                                text: 'Something went wrong!',
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    })
                }
              })
    }
            
</script>




<!-- Ajax Crud Operation -->
{{--
<script>
    // Add a new KPI
    $(document).on('click', '#add-modal', function () {
        $('.modal-title').text('Add KPI');
        $('#addKPI').modal('show');
    });

    $('#modal-footer').on('click', '.add', function () {
        $.ajax({
            type: 'POST',
            url: 'posts',
            data: {
                '_token': $('input[name=_token]').val(),
                'KPI': $('#KPI_add').val(),
                'CMD_IDX_M_Department': $('#department_add').val()
            },
            success: function (data) {
                $('.errorKPI').addClass('hidden');
                $('errorDepartment').addClass('hidden');

                if ((data.errors)) {
                    setTimeout(function () {
                        $('#addKPI').modal('show');
                        toastr["info"]('Validation error!', 'Error Alert', {
                            timeout: 5000
                        });
                    }, 500);

                    if (data.errors.KPI) {
                        $('.errorKPI').removeClass('hidden');
                        $('.errorKPI').text(data.errors.KPI);
                    }

                    if (data.errors.department) {
                        $('.errorKPI').removeClass('hidden');
                        $('.errorDepartment').text(data.errors.department);
                    }
                } else {
                    toastr.success('Successfully added KPI!', 'Success Alert', {
                        timeout: 5000
                    });
                    $('#template-table').prefend("tr")
                }
            }
        });
    });
</script> --}} 
@endsection