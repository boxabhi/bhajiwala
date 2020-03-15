<?php

namespace App\Http\Controllers;

use App\restraunt;
use App\vegetable;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $restraunts = restraunt::all();
        $vegetables= vegetable::all();
        return view('website.serve', compact(['restraunts','vegetables']));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // $links = implode(' ', $links);
       $data = json_encode($request->data);
       
       $transaction = new Transaction([
           'res_id' => $request->res_id,
           'description' => $data,
       ]);

       $transaction->save();

       return redirect('/serve')->with('success', 'Product saved!');

      
        
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\restraunt  $restraunt
     * @return \Illuminate\Http\Response
     */
    public function edit(restraunt $restraunt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\restraunt  $restraunt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, restraunt $restraunt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\restraunt  $restraunt
     * @return \Illuminate\Http\Response
     */
    public function destroy(restraunt $restraunt)
    {
        //
    }
}
