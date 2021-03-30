<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec3SaveData extends Controller
{
    public function index()
    {
        $ob = DB::table('result')
            ->join('indicator_result', 'result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->where('result.mount', '=', (int)date('m'))
            ->get();
        return view('sec3.savedata', compact('ob'));
    }
    public function resultShowMount(Request $request)
    {
        $ob = DB::table('result')
            ->join('indicator_result', 'result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->where('result', '=', $request->mount)
            ->get();
        return view('sec3.savedata', compact('ob'));
    }
}
