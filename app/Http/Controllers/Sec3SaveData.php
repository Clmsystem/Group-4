<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec3SaveData extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_result')->get();
        return view('sec3.savedata', compact('ob'));
    }
}
