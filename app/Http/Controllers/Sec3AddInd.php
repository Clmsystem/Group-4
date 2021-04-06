<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sec3AddInd extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_result')
        // ->join('unit', 'indicator_result.unit', 'unit.id_unit')
            ->join('unit', 'indicator_result.unit', '=', 'unit.id_unit')
            ->orderBy('indicator_result_id')
            ->get();
        $ob1 = DB::table('unit')->get();
        return view('sec3.addind', compact('ob', 'ob1'));
    }
    // public function addObject(Request $request)
    // {
    //     $id = DB::table('object')->max('idobject');

    //     $data = array();
    //     $data["nameObject"] = $request->keyobject;
    //     $data["status"] = 1;
    //     $data["year_year_id"] = 2564;
    //     $data["idobject"] = $id + 1;

    //     DB::table('object')->insert($data);
    //     return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    // }

    public function addInd(Request $request)
    {
        // insert kr id คือ ob id
        // $id = Session::get('id');

        $data = array();
        $data["indicator_result_name"] = $request->resultname;
        $data["plan"] = $request->plan;
        $data["unit"] = $request->unit;
        $data["year_year_id"] = date("Y") + 543;
        // $y = date("Y");
        // dd($y);
        DB::table('indicator_result')->insert($data);

        // ค่า kr ตัวล่าสุด
        $max = DB::table('indicator_result')->max('indicator_result_ID');

        // insert kr detail 12 เดือน
        for ($i = 1; $i <= 12; $i++) {
            $data2 = array();
            $data2["mount"] = $i;
            $data2["year_year_id"] = date("Y") + 543;
            $data2["indicator_result_indicator_result_ID"] = $max;
            $data2["status"] = 0;
            DB::table('result')->insert($data2);
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
        DB::table('indicator_result')
            ->where('indicator_result_ID', $request->id)
            ->update([
                'indicator_result_name' => $request->newresult,
                'plan' => $request->newplan,
                'unit' => $request->newunit,
            ]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function unit()
    {
        $ob1 = DB::table('unit')->get();
        return view('sec3.addind', compact('ob1'));
    }
}
