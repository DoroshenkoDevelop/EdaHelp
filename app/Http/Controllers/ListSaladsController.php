<?php

namespace App\Http\Controllers;

use App\Models\ListSalads;
use Illuminate\Http\Request;

class ListSaladsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listSalads = ListSalads::all();
        return view('list_salads.index', compact('listSalads'));
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
     * @param  \App\Models\ListSalads  $listSalads
     * @return \Illuminate\Http\Response
     */
    public function show(ListSalads $listSalads)
    {

        return view('list_salads.salads');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListSalads  $listSalads
     * @return \Illuminate\Http\Response
     */
    public function edit(ListSalads $listSalads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListSalads  $listSalads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListSalads $listSalads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListSalads  $listSalads
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListSalads $listSalads)
    {
        //
    }
}
