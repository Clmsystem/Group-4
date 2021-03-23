<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Sec3AddInd extends Controller
{
    public function index()
    {
        $ob = DB::table('indicator_result')->get();
        return view('sec3.addind', compact('ob'));
    }
    public function addObject(Request $request)
    {
        $id = DB::table('object')->max('idobject');

        $data = array();
        $data["nameObject"] = $request->keyobject;
        $data["status"] = 1;
        $data["year_year_id"] = 2564;
        $data["idobject"] = $id + 1;

        DB::table('object')->insert($data);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
