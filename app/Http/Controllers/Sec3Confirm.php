<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class Sec3Confirm extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_result')->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->orderBy('indicator_result_id')
            ->get();
        $ob1 = DB::table('unit')->get();
        return view('sec3.sec3confirm', compact('ob', 'ob1'));
    }
}