<?php

namespace App\Http\Controllers;

use App\Vegetable;
use Illuminate\Http\Request;

class VegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vegetables = vegetable::all();
        return view('website.products', compact('vegetables'));

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
        //
        $vegetable = new Vegetable();
        $vegetable->vegetable = request('vegetable');
        $vegetable->price = request('price');
        $vegetable->quatity = request('quantity');
       
        $vegetable->image = '-';
        $vegetable->save();      
        
        return redirect('/product')->with('success', 'Product saved!');
    }

    public function price($id){
        $price = vegetable::find($id);
       
        return $price->price;
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function show(vegetable $vegetable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function edit(vegetable $vegetable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vegetable $vegetable)
    {
        $id = request('id');
        $vegetable = Vegetable::find($id);
        $vegetable->price = request('oldprice');
       // dd($vegetable->price);
        $vegetable->save();
        return redirect('/product')->with('success', 'Product saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vegetable  $vegetable
     * @return \Illuminate\Http\Response
     */
    public function destroy(vegetable $vegetable)
    {
        //
    }
}
