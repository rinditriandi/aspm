<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use App\KPI;
use View;

class KPIController extends Controller
{
    protected $rules = 
    [
        'KPI' => 'required',
        'department' => 'required'
    ];

    public function index()
    {
        //$data = DB::table('CMD_M_Template')->paginate(15);
        $department = DB::select('SELECT * FROM CMD_M_Department');
       
        return view('master/template',['departments' => $department]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $kpi = new KPI();
            $kpi->KPI = $request->KPI;
            $kpi->CMD_IDX_M_Department = $request->department;
            $kpi->save();

            return redirect()->to('/master/template');
        }
        // $data = [
        //     'KPI' => $request['KPI'],
        //     'CMD_IDX_M_Department' => $request['department']
        // ];

        // return KPI::create($data);
    }

    public function show($id)
    {
        $kpi = KPI::find($id);
        
        return view::make('master/template')
            ->with('kpi', $kpi);
    }

    public function edit($id)
    {   
        $department = DB::select('SELECT * FROM CMD_M_Department');
        $kpi = KPI::find($id);

       
        return response()->json(['kpi' => $kpi, 'department' => $department]);
    }

    public function update(Request $request, $id)
    {
        $kpi = KPI::find($id);
        $kpi->KPI = $request['KPI'];
        $kpi->CMD_IDX_M_Department = $request['department'];

        $kpi->update();

        return $kpi;
    }

    public function destroy($id)
    {
        $kpi = KPI::destroy($id);
       
    }

    public function apiTemplate()
    {
        $kpi = DB::select('SELECT KPI.CMD_IDX_M_KPI, KPI.KPI, MDEP.DepartmentName AS Department
	                                FROM [CMDDB].[dbo].[CMD_M_KPI] KPI
                                    LEFT JOIN CMDDB.DBO.CMD_M_Department MDEP ON KPI.CMD_IDX_M_Department = MDEP.CMD_IDX_M_Department
                                    ORDER BY KPI.CMD_IDX_M_KPI DESC'    
                                );
                                    
       // $template = DB::select('EXEC [dbo].[usp_CMD_M_Template_List]?,?,?,?,?,?,?', array(1,5,'RowNumber','ASC','R','Data','1'));

        return DataTables::of($kpi)
            ->addColumn('action', function($kpi) {
                return '<a onclick="deleteData('. $template->IDX_CMD_M_KPI .')" class="btn-floating btn-tw waves-effect waves-light btn-sm delete-kpi" data-toggle="tooltip" data-placement="right" title="delete"><i class="material-icons">delete</i></a> ' .
                       '<a onclick="editForm('. $template->IDX_CMD_M_KPI .')" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="edit"><i class="material-icons">mode_edit</i></a> ' .
                       '<a href="#newtemplate" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="modal" data-tooltip="tooltip" data-placement="top" title="view"><i class="fa fa-info" aria-hidden="true"></i></a>';
                    
            })->make(true);
    }
}
