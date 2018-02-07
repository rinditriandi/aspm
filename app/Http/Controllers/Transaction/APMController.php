<?php

namespace App\Http\Controllers\Transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class APMController extends Controller
{
    public function index()
    {
        return view('APM/list_apm');
    }
}
