<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec3SaveData extends Controller
{
    public function index()
    {
        $mount = (int)date('m');
        $ob = DB::table('result')
            ->join('indicator_result', 'result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->where('result.mount', '=', $mount)
            ->get();
        return view('sec3.savedata', compact('ob', 'mount'));
    }
    public function resultShowMount(Request $request)
    {
        $mount = $request->mount;
        $ob = DB::table('result')
            ->join('indicator_result', 'result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->where('result.mount', '=', $mount)
            ->get();

        return view('sec3.savedata', compact('ob', 'mount'));
    }

    public function updateData(Request $request)
    {

        DB::table('result')
            ->where('result_ID', $request->id)
            ->update([
                'result' => $request->result,
                'performance_result' => $request->performance,
            ]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
