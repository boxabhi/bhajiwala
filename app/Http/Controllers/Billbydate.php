<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restraunt;
use DB;

class Billbydate extends Controller
{
    public function index($id){
        $datas = DB::table('transactions')->where('res_id', $id)->get();
       
       
        return view('website.date', compact('datas'));   

    }

    public function final($date){
        dd('finale');
    }
}
