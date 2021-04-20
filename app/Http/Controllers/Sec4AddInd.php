<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Sec4AddInd extends Controller
{
    public function index()
    {
        // $ob = DB::table('indicator_stratetegic')
        //     ->orderBy('indicator_stratetegic_id')
        //     ->get();
        // return view('sec4.addind', compact('ob'));

        $ob = DB::table('employee')
            ->join('access_stratetegic', 'employee.id_employee', '=', 'access_stratetegic.Employee_id_employee')
            ->join('indicator_stratetegic', 'access_stratetegic.indicator_stratetegic_indicator_stratetegic_id', '=', 'indicator_stratetegic.indicator_stratetegic_ID')
            // ->leftJoin('result', 'indicator_result.indicator_result_ID', '=', 'result.indicator_result_indicator_result_ID')
            // ->join('unit', 'indicator_stratetegic.unit', '=', 'unit.id_unit')
            // ->select('indicator_result_ID', 'indicator_result_name', 'plan', 'unit', 'unit_name', 'name_employee')
            ->get();
        // $ob1 = DB::table('unit')->get();
        $ob1 = DB::table('employee')->get();
        return view('sec4.addind', compact('ob', 'ob1'));
    }

    public function addInd(Request $request)
    {

        $data = array();
        $data["indicator_stratetegic_name"] = $request->resultname;
        $data["goal"] = $request->resultgoal;
        $data["year_year_id"] = date("Y") + 543;

        DB::table('indicator_stratetegic')->insert($data);

        // ค่า kr ตัวล่าสุด
        $max = DB::table('indicator_stratetegic')->max('indicator_stratetegic_id');

        $access = array();
        // $data["assign_id"] = ;
        $access["indicator_stratetegic_indicator_stratetegic_ID"] = $max;
        $access["Employee_id_employee"] = $request->employee;
        // $access["user_employee_all_idemployee_all"] = 0;
        $access["Employee_id_position"] = 0;
        $access["Employee_id_department"] = 0;
        $access["indicator_stratetegic_year_year_id"] = date("Y") + 543;
        DB::table('access_stratetegic')->insert($access);

        // insert kr detail 12 เดือน
        for ($i = 1; $i <= 12; $i++) {
            $data2 = array();
            $data2["mount"] = $i;
            $data2["indicator_stratetegic_year_year_id"] = date("Y") + 543;
            $data2["year_year_id"] = date("Y") + 543;
            $data2["indicator_stratetegic_indicator_stratetegic_id"] = $max;
            $data2["status"] = 0;
            DB::table('stratetegic')->insert($data2);
        }

        // insert สิทธ์ ซึ่งจะว่างไว้ก่อน
        // $data3 = array();
        // $data3["KR_idKR"] = $max;
        // $data3["Employee_id_employee"] = 0;
        // $data3["Employee_id_position"] = 0;
        // $data3["Employee_id_department"] = 0;
        // DB::table('autrority')->insert($data3);

        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function updateInd(Request $request)
    {
        DB::table('indicator_stratetegic')
            ->where('indicator_stratetegic_id', $request->id)
            ->update([
                'indicator_stratetegic_name' => $request->newstratetegic,
                'goal' => $request->newgoal
            ]);

        DB::table('access_stratetegic')
            ->where('indicator_stratetegic_indicator_stratetegic_ID', $request->id)
            ->update(['Employee_id_employee' => $request->newemployee]);

        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
