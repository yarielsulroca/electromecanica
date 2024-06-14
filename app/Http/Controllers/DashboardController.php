<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Workorder;

class DashboardController extends Controller
{
    public function index(){
       // $workorders = Workorder::with('client')->get();
       $workorders= Workorder::all();
        return view('dashboard',compact('workorders'));
}}
