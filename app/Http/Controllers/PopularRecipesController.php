<?php

namespace App\Http\Controllers;

use App\Models\ListSnacks;
use App\Models\PopularRecipes;
use Illuminate\Http\Request;

class PopularRecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $populars = ListSnacks::find([1]);
        return view('popular_recipes.index',compact('populars'));
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
     * @param int $id
     * @param  \App\Models\PopularRecipes  $popularRecipes
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
     * @param  \App\Models\PopularRecipes  $popularRecipes
     * @return \Illuminate\Http\Response
     */
    public function edit(PopularRecipes $popularRecipes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopularRecipes  $popularRecipes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PopularRecipes $popularRecipes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopularRecipes  $popularRecipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(PopularRecipes $popularRecipes)
    {
        //
    }
}
