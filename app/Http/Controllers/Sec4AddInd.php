<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Sec4AddInd extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_stratetegic')
            ->orderBy('indicator_stratetegic_id')
            ->get();
        return view('sec4.addind', compact('ob'));
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
                'indicator_stratetegic_name' => $request->newresult,
                'goal' => $request->newgoal
            ]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
