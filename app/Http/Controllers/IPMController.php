<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPMController extends Controller
{
    public function show()
    {
        return view('IPM/new_ipm');
    }

    public function listIPM()
    {
        return view('IPM/list_ipm');
    }
}
