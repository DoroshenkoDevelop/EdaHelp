<?php

namespace App\Http\Controllers;

use App\Models\ListDesserts;
use Illuminate\Http\Request;

class ListDessertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desserts = ListDesserts::find([1]);
        $brounis = ListDesserts::find([2]);
        $сheesecakes = ListDesserts::find([3]);
        $strudelcherys = ListDesserts::find([4]);
        return view('desserts.index',compact(
            'desserts','brounis','сheesecakes','strudelcherys'
        ));
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
     * @param  \App\Models\ListDesserts  $listDesserts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dessert = ListDesserts::Find($id);
        return view('desserts.dessert',compact('dessert'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListDesserts  $listDesserts
     * @return \Illuminate\Http\Response
     */
    public function edit(ListDesserts $listDesserts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListDesserts  $listDesserts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListDesserts $listDesserts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListDesserts  $listDesserts
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListDesserts $listDesserts)
    {
        //
    }
}
