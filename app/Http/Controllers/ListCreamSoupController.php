<?php

namespace App\Http\Controllers;

use App\Models\ListCreamSoup;
use Illuminate\Http\Request;

class ListCreamSoupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $creamsoups = ListCreamSoup::find([1,2]);
        $fushsoups = ListCreamSoup::find([3,5]);
        $meatsoups = ListCreamSoup::find([4]);
        return view('cream_soups.index',compact('creamsoups','fushsoups','meatsoups'));
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
     * @param  \App\Models\ListCreamSoup  $listCreamSoup
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soup = ListCreamSoup::Find($id);
        return view('cream_soups.cream_soup',compact('soup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListCreamSoup  $listCreamSoup
     * @return \Illuminate\Http\Response
     */
    public function edit(ListCreamSoup $listCreamSoup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListCreamSoup  $listCreamSoup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListCreamSoup $listCreamSoup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListCreamSoup  $listCreamSoup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListCreamSoup $listCreamSoup)
    {
        //
    }
}
