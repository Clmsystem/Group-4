<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec4SaveData extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_stratetegic')->get();
        return view('sec4.savedata', compact('ob'));
    }
}
