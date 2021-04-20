<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Sec4Search extends Controller
{
    public function index()
    {
        $mount = (int)date('m');
        $year = (int)date('Y') + 543;

        $ob = DB::table('stratetegic')
            ->join('indicator_stratetegic', 'stratetegic.indicator_stratetegic_indicator_stratetegic_id', '=', 'indicator_stratetegic.indicator_stratetegic_id')

            ->where('stratetegic.mount', '=', $mount)
            ->get();
        return view('sec4.sec4search', compact('ob', 'mount'));
    }
    public function resultShowMount(Request $request)
    {
        $mount = $request->mount;
        $ob = DB::table('stratetegic')
            ->join('indicator_stratetegic', 'stratetegic.indicator_stratetegic_indicator_stratetegic_id', '=', 'indicator_stratetegic.indicator_result_id')

            ->where('stratetegic.mount', '=', $mount)
            ->get();

        return view('sec4.sec4search', compact('ob', 'mount'));
    }
}
