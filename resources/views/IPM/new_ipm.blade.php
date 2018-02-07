@extends('layouts.master') @section('title', 'Create New IPM') @section('content')
<section class="mb-4">

    <div class="card">
        <div class="card-body d-flex justify-content-between">
            <h4 class="h3-responsive mt-3">IPM</h4>

            <div>
                <a href="#" class="btn btn-pink ">Cancel</a>
                <a href="#" class="btn btn-indigo">
                    <i class="fa fa-save"></i> Save</a>
            </div>
        </div>
    </div>

</section>
<!--Section: Heading-->
<!--Section: Inputs-->
<section class="section card mb-4">
    <div class="card-body">
        <!--Section heading-->

        <h5 class="pb-5">General Information</h5>
        <hr>
        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-4 mb-md-3" style="margin-top: 11px;">

                <div class="md-form form-sm floating">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1" class="">NIK</label>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-md-3" style="margin-top: 11px;">

                <div class="md-form form-sm floating">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1" class="">Department</label>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-md-3">

                <!--Name-->
                <select class="mdb-select colorful-select dropdown-primary" searchable="Search here..">
                    <option value="" disabled selected>Select Appraised By</option>
                    <option value="1">Samuel Febrianto</option>
                    <option value="2">Joseph Sanusi Tjong</option>
                    <option value="3">Harianto</option>
                </select>
                <label>Appraised By</label>

            </div>
            <!--Grid column-->


        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-4">

                <div class="md-form form-sm floating">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1" class="">Employee Name</label>
                </div>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4">
                <div class="md-form form-sm floating">
                    <input type="text" id="form1" class="form-control">
                    <label for="form1" class="">Position</label>
                </div>
            </div>
            <!--Grid column-->

            <div class="col-md-2">

                <div class="md-form form-sm floating">
                    <input type="text" id="form1" class="form-control datepicker">
                    <label for="form1" class="">Start Periode</label>
                </div>
            </div>
            <div class="col-md-2">

                <div class="md-form form-sm floating">
                    <input type="text" id="form1" class="form-control datepicker">
                    <label for="form1" class="">End Periode</label>
                </div>

            </div>

        </div>
        <!--Grid row-->
    </div>
</section>
<!--Section: Inputs-->

<!--Grid row-->
<div class="row mb-5">

    <!--Grid column-->
    <div class="col-md-12 mb-r">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified indigo">
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Routine Activity</a>
            </li>
            <li class="nav-item waves-effect waves-light">
                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Additional Activity</a>
            </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content card">
            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                <br/>
                <div class="text-left">
                    <a class="btn btn-pink btn-rounded" onclick="ClearFields();" data-toggle="modal" data-target="#RoutineActivity">
                        <i class="fa fa-plus mr-2"></i>Routine Activity</a>

                </div>
                <div class="table">
                    <table class="table table-sm table-hover">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>#</th>
                                <th>KPI</th>
                                <th>KPI Definiton</th>
                                <th>Weight</th>
                                <th>UOM</th>
                                <th>Achievement</th>
                                <th>Valuation</th>
                                <th>Weight Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="delete">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="edit">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="view">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                </td>
                                <td>1</td>
                                <td>Knowledgebase System</td>
                                <td>Request Analysis(Menyiapkan data spk & po untuk cluster Leora dan Ruko Ayodhya)</td>
                                <td>30</td>
                                <td>%</td>
                                <td>105</td>
                                <td>4</td>
                                <td>0.16</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="delete">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="edit">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="view">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                </td>
                                <td>2</td>
                                <td>Pengembangan & Implementasi Aplikasi Business Software</td>
                                <td>System Implementation(Pemindahan Server Fingerspot)</td>
                                <td>40</td>
                                <td>%</td>
                                <td>100</td>
                                <td>3</td>
                                <td>0.26</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="delete">
                                        <i class="material-icons">delete</i>
                                    </a>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="edit">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="view">
                                        <i class="material-icons">remove_red_eye</i>
                                    </a>
                                </td>
                                <td>3</td>
                                <td>Pelaksanaan Product Launching</td>
                                <td>System Implementation(Training PO/SPK User Paddington, Receive Item All BU/SBU)</td>
                                <td>30</td>
                                <td>%</td>
                                <td>100</td>
                                <td>3</td>
                                <td>0.2</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="2">Total Score Ruotine Activity</td>
                                <td>3.80</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td colspan="3">Weight Average Ruotine Activity</td>
                                <td>2.28</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

            <!--/.Panel 1-->
            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel">
                <div class="text-left">
                    <br/>
                    <a class="btn btn-pink btn-rounded" data-toggle="modal" data-target="#AdditionalActivity">
                        <i class="fa fa-plus mr-2"></i>Additional Activity</a>

                </div>
            </div>
            <!--/.Panel 2-->
        </div>
    </div>
</div>

<!--Modal: Login / Register Form Demo-->
<div class="modal fade" id="RoutineActivity" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#kpi" role="tab">
                            <i class="fa fa-user mr-1"></i> KPI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#valuation" role="tab">
                            <i class="fa fa-user-plus mr-1"></i> Valuation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#pica" role="tab">
                            <i class="fa fa-user-plus mr-1"></i> PICA</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 17-->
                    <div class="tab-pane fade in show active" id="kpi" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form form-sm">
                                        <select id="select-kpi" class="mdb-select colorful-select dropdown-primary" searchable="Search here..">
                                            <option value="" disabled selected>Select KPI</option>
                                            @foreach($templates as $template)
                                            <option value="1">{{ $template->KPI }}</option>
                                            @endforeach
                                        </select>
                                        <label>KPI</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form form-sm floating">
                                        <input type="text" id="kpi-definition" class="form-control">
                                        <label for="kpi-definition">KPI Definition</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form form-sm floating">
                                        <input type="text" id="weight" class="form-control">
                                        <label for="weight">Weight</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form form-sm">
                                        <select id="uom" class="mdb-select mdb-select colorful-select dropdown-primary">
                                            <option value="" disabled selected>Select UOM</option>
                                            <option value="1">%</option>
                                            <option value="2">Kali</option>
                                            <option value="3">Hari</option>
                                        </select>
                                        <label>UOM</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form form-sm floating">
                                        <input type="text" id="target" class="form-control">
                                        <label for="target">Target</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form form-sm floating">
                                        <input type="text" id="achievement" class="form-control">
                                        <label for="achievement">Achievement</label>
                                     </div>
                                </div>
                            </div>
                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                            <button class="btn btn-info">Save
                                <i class="fa fa-sign-in ml-1"></i>
                            </button>
                        </div>

                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 18-->
                    <div class="tab-pane fade" id="valuation" role="tabpanel">

                        <!--Body-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="md-form form-sm">
                                        <select class="mdb-select" searchable="Search here..">
                                            <option value="" disabled selected>0</option>
                                            <option value="1">
                                                < 50</option>
                                                    <option value="1">50 - 69</option>
                                                    <option value="1">80 - 99</option>
                                                    <option value="1">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form form-sm">
                                        <select class="mdb-select" searchable="Search here..">
                                            <option value="" disabled selected>1</option>
                                            <option value="1">
                                                < 50</option>
                                                    <option value="1">50 - 69</option>
                                                    <option value="1">80 - 99</option>
                                                    <option value="1">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form form-sm">
                                        <select class="mdb-select" searchable="Search here..">
                                            <option value="" disabled selected>2</option>
                                            <option value="1">
                                                < 50</option>
                                                    <option value="1">50 - 69</option>
                                                    <option value="1">80 - 99</option>
                                                    <option value="1">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form form-sm">
                                        <select class="mdb-select" searchable="Search here..">
                                            <option value="" disabled selected>3</option>
                                            <option value="1">
                                                < 50</option>
                                                    <option value="1">50 - 69</option>
                                                    <option value="1">80 - 99</option>
                                                    <option value="1">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="md-form form-sm">
                                        <select class="mdb-select" searchable="Search here..">
                                            <option value="" disabled selected>4</option>
                                            <option value="1">
                                                < 50</option>
                                                    <option value="1">50 - 69</option>
                                                    <option value="1">80 - 99</option>
                                                    <option value="1">100</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-r">
                                    <div class="md-form form-sm">
                                        <input type="text" id="achievement" class="form-control">
                                        <label for="achievement" class="">Achievement</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-right">
                                <p class="pt-1">Already have an account?
                                    <a href="#" class="blue-text">Log In</a>
                                </p>
                            </div>
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->

                    <!--Panel 18-->
                    <div class="tab-pane fade" id="pica" role="tabpanel">
                        <!--Body-->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form form-sm">
                                        <input type="text" id="form3" class="form-control">
                                        <label for="form3">PICA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-r">
                                    <div class="md-form form-sm">
                                        <input type="text" id="form3" class="form-control">
                                        <label for="form3">Comment By Reviewer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-r">
                                    <form>
                                        <div class="file-field">
                                            <div class="btn btn-primary btn-sm waves-effect waves-light">
                                                <span>Choose file</span>
                                                <input type="file">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" placeholder="Upload your Document Evidence">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!--Footer-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form Demo-->


@endsection

@section('script')