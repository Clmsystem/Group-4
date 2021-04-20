<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec3Search extends Controller
{
    public function index()
    {
        $mount = (int)date('m');
        $year = (int)date('Y') + 543;

        $ob = DB::table('result')
            ->join('indicator_result', 'result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->where('result.mount', '=', $mount)
            ->get();
        return view('sec3.sec3search', compact('ob', 'mount'));
    }
    public function resultShowMount(Request $request)
    {
        $mount = $request->mount;
        $ob = DB::table('result')
            ->join('indicator_result', 'result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->where('result.mount', '=', $mount)
            ->get();

        return view('sec3.sec3search', compact('ob', 'mount'));
    }
}
