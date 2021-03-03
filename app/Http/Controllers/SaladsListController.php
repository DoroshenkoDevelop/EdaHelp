<?php

namespace App\Http\Controllers;

use App\Models\SaladsList;
use Illuminate\Http\Request;

class SaladsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salads = SaladsList::all();
        return view('salads.index',compact('salads'));
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
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @param  \App\Models\SaladsList  $saladsList
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salad = SaladsList::find($id);
        return view('salads.salads',compact('salad'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaladsList  $saladsList
     * @return \Illuminate\Http\Response
     */
    public function edit(SaladsList $saladsList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaladsList  $saladsList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaladsList $saladsList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaladsList  $saladsList
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaladsList $saladsList)
    {
        //
    }
}
