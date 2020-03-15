<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restraunt;

class BillController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restraunts = restraunt::all();
        return view('website.restraunt', compact('restraunts'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\restraunt  $restraunt
     * @return \Illuminate\Http\Response
     */
    public function show(restraunt $restraunt)
    {
        //
    }

}
