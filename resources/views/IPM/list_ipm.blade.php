@extends('layouts.master') 

@section('title', 'List IPM') 

@section('content')
<div class="container-fluid">

    <!--Section: Basic examples-->
    <section>

        <h4 class="font-bold mt-lg-5 mb-5 pb-4 text-center">IPM History</h4>

        <!--Top Table UI-->
        <div class="card p-2 mb-5">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-3 col-md-12">
                    <!--Name-->
                    <select class="mdb-select colorful-select dropdown-primary mx-2">
                        <option value="" disabled selected>Bulk actions</option>
                        <option value="1">Delate</option>
                        <option value="2">Export</option>
                        <option value="3">Change segment</option>
                    </select>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6">

                    <!--Blue select-->
                    <select class="mdb-select colorful-select dropdown-primary mx-2">
                        <option value="" disabled selected>Show only</option>
                        <option value="1">All
                            <span> (2000)</span>
                        </option>
                        <option value="2">Never opened
                            <span> (200)</span>
                        </option>
                        <option value="3">Opened but unanswered
                            <span> (1800)</span>
                        </option>
                        <option value="4">Answered
                            <span> (200)</span>
                        </option>
                        <option value="5">Unsunscribed
                            <span> (50)</span>
                        </option>
                    </select>
                    <!--/Blue select-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6">

                    <!--Blue select-->
                    <select class="mdb-select colorful-select dropdown-primary mx-2">
                        <option value="" disabled selected>Filter segments</option>
                        <option value="1">Contacts in no segments
                            <span> (100)</span>
                        </option>
                        <option value="1">Segment 1
                            <span> (2000)</span>
                        </option>
                        <option value="2">Segment 2
                            <span> (1000)</span>
                        </option>
                        <option value="3">Segment 3
                            <span> (4000)</span>
                        </option>
                    </select>
                    <!--/Blue select-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6">

                    <form class="form-inline mt-2 ml-2">
                        <input class="form-control my-0 py-0" type="text" placeholder="Search" style="max-width: 150px;">
                        <button class="btn btn-sm btn-primary ml-2 px-1">
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

                <a href="" class="white-text mx-3">List IPM</a>

                <div>
                    <a href="{{ url('ipm/create') }}">
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="top" title="Add IPM">
                            <i class="fa fa-plus mt-0"></i>
                        </button>
                    </a>
                    <a href="http://10.100.180.22/knowledge" target=_blank>
                        <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="tooltip" data-placement="bottom"
                            title="Information">
                            <i class="fa fa-info-circle mt-0"></i>
                        </button>
                    </a>
                </div>

            </div>
            <!--/Card image-->

            <div class="px-4">

                <div>
                    <!--Table-->
                    <table id="ipm-table" class="table table-hover table-sm mb-0" cellspacing="0" width="100%">

                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Start Periode</th>
                                <th>End Periode</th>
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

</div>
@endsection 

@section('script')
<script src="{{ asset('public/materialize/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/materialize/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#ipm-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.ipm') }}",
            columns: [{
                data: 'action',
                orderable: false,
                searchable: false
            },
                {data: 'CMD_IDX_T_IPMHeader'},
                {data: 'NIK'},
                {data: 'Name'},
                {data: 'Department'},
                {data: 'Position'},
                {data: 'StartPeriode'},
                {data: 'EndPeriode'}
         ]
        });

         // Material Select Initialization
          $(document).ready(function () {
            $('select[name="ipm-table_length"]').material_select();
        });
    });
</script>

@endsection