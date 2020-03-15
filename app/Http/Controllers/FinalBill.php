<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FinalBill extends Controller
{
    public function index($date){
        $data = DB::table('transactions')->where('created_at', $date)->first();
        
        return view('website.final', compact('data'));   
       
    }
}
