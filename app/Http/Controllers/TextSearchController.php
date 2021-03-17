<?php

namespace App\Http\Controllers;

use App\Models\TextSearch;
use Illuminate\Http\Request;

class TextSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('layouts.app');
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
     *
     * @param  \App\Models\TextSearch  $textSearch
     * @return \Illuminate\Http\Response
     */
    public function show(TextSearch $textSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TextSearch  $textSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(TextSearch $textSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TextSearch  $textSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TextSearch $textSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TextSearch  $textSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextSearch $textSearch)
    {
        //
    }
}
