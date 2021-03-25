<?php

namespace App\Http\Controllers;

use App\Models\ListSushi;
use Illuminate\Http\Request;

class ListSushiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salmons = ListSushi::find([1]);
        $tunas = ListSushi::find([2]);
        $seafoods = ListSushi::find([3]);
        $mixs = ListSushi::find([4]);
        return view('sushi.index',compact('salmons','tunas','seafoods','mixs'));
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
     * @param  \App\Models\ListSushi  $listSushi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sushi = ListSushi::Find($id);
        return view('sushi.sushi',compact('sushi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListSushi  $listSushi
     * @return \Illuminate\Http\Response
     */
    public function edit(ListSushi $listSushi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListSushi  $listSushi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListSushi $listSushi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListSushi  $listSushi
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListSushi $listSushi)
    {
        //
    }
}
