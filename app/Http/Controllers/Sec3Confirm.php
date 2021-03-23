<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Sec3Confirm extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_result')->get();
        return view('sec3.sec3confirm', compact('ob'));
    }
}