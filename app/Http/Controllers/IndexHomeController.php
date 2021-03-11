<?php

namespace App\Http\Controllers;

use App\Models\IndexHome;
use App\Models\ListSnacks;
use Illuminate\Http\Request;

class IndexHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $populars = ListSnacks::find([1]);
        return view('home.home',compact('populars'));
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
     * @param  \App\Models\IndexHome  $indexHome
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $snack = ListSnacks::find($id);
        return view('popular_recipes.popular',compact('snack'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IndexHome  $indexHome
     * @return \Illuminate\Http\Response
     */
    public function edit(IndexHome $indexHome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IndexHome  $indexHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IndexHome $indexHome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IndexHome  $indexHome
     * @return \Illuminate\Http\Response
     */
    public function destroy(IndexHome $indexHome)
    {
        //
    }
}
