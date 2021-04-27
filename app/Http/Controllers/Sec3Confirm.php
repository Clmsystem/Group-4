<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sec3Confirm extends Controller
{
    public function index()
    {
        $mount = (int) date('m');
        $ob = DB::table('employee')
            ->join('access_result', 'employee.id_employee', '=', 'access_result.Employee_id_employee')
            ->join('indicator_result', 'access_result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->join('result', 'indicator_result.indicator_result_ID', '=', 'result.indicator_result_indicator_result_ID')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->where('result.mount', '=', $mount)
            ->get();
        $ob1 = DB::table('unit')->get();
        return view('sec3.sec3confirm', compact('ob', 'mount'));
    }

    public function showmonth(Request $request)
    {
        $mount = $request->mount;
        $ob = DB::table('employee')
            ->join('access_result', 'employee.id_employee', '=', 'access_result.Employee_id_employee')
            ->join('indicator_result', 'access_result.indicator_result_indicator_result_ID', '=', 'indicator_result.indicator_result_ID')
            ->join('result', 'indicator_result.indicator_result_ID', '=', 'result.indicator_result_indicator_result_ID')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->where('result.mount', '=', $mount)
            ->get();

        return view('sec3.sec3confirm', compact('ob', 'mount'));
    }
    // public function updateData(Request $request)
    // {

    //     DB::table('result')
    //         ->where('result_ID', $request->id)
    //         ->update([
    //             'result' => $request->result,
    //             'performance_result' => $request->performance,
    //         ]);
    //     return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    // }
}