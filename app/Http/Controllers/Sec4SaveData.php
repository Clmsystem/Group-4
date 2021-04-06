<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec4SaveData extends Controller
{
    public function index()
    {
        $mount = (int)date('m');
        $ob = DB::table('stratetegic')
            ->join('indicator_stratetegic', 'stratetegic.indicator_stratetegic_indicator_stratetegic_id', '=', 'indicator_stratetegic.indicator_stratetegic_id')
            ->join('unit', 'indicator_stratetegic.unit', '=', 'unit.id_unit')
            ->where('stratetegic.mount', '=', $mount)
            ->get();
        return view('sec4.savedata', compact('ob', 'mount'));
    }
    public function resultShowMount(Request $request)
    {
        $mount = $request->mount;
        $ob = DB::table('stratetegic')
            ->join('indicator_stratetegic', 'stratetegic.indicator_stratetegic_indicator_stratetegic_id', '=', 'indicator_stratetegic.indicator_result_id')
            ->join('unit', 'indicator_stratetegic.unit', '=', 'unit.id_unit')
            ->where('stratetegic.mount', '=', $mount)
            ->get();

        return view('sec4.savedata', compact('ob', 'mount'));
    }

    public function updateData(Request $request)
    {

        DB::table('stratetegic')
            ->where('stratetegic_ID', $request->id)
            ->update([
                'stratetegic' => $request->result,
                'performance_stratetegic' => $request->performance,
            ]);
        return redirect()->back()->with('sucess', 'บันทึกข้อมูลเรียบร้อย');
    }
}
