<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class IPMController extends Controller
{
    
    public function index()
    {   

        return view('IPM/list_ipm');
    }

    public function create()
    {
        $data = DB::select('SELECT * FROM [CMDDB].[dbo].[CMD_M_KPI]');

        return view('IPM/new_ipm', ['templates' => $data]);
    }

   
    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function apiIPM()
    {
        $ipm = DB::select('EXEC [CMDDB].[dbo].[usp_CMD_T_IPM_List]');

        return DataTables::of($ipm)
        ->addColumn('action', function($ipm) {
            return '<a onclick="deleteData('. $ipm->IDX_CMD_T_IPMHeader .')" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="delete"><i class="material-icons">delete</i></a> ' .
                   '<a onclick="editForm('. $ipm->IDX_CMD_T_IPMHeader .')" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="edit"><i class="material-icons">mode_edit</i></a> ' .
                   '<a href="#" class="btn-floating btn-tw waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="right" title="view"><i class="material-icons">remove_red_eye</i></a>';
                
        })->make(true);
    }
}
