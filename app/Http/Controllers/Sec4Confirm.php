<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Sec4Confirm extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_result')->get();
        return view('sec4.sec4confirm', compact('ob'));
    }
}