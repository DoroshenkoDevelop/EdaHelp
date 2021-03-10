<?php

namespace App\Http\Controllers;

use App\Models\ListFishes;
use Illuminate\Http\Request;

class ListFishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fishes = ListFishes::all();
        return view('fish.index',compact('fishes'));
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
     * @param  \App\Models\ListFishes  $listFishes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fish = ListFishes::Find($id);
        return view('fish.fish', compact('fish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListFishes  $listFishes
     * @return \Illuminate\Http\Response
     */
    public function edit(ListFishes $listFishes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListFishes  $listFishes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListFishes $listFishes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListFishes  $listFishes
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListFishes $listFishes)
    {
        //
    }
}
