<?php

namespace App\Http\Controllers;

use App\Models\ListPaste;
use Illuminate\Http\Request;

class ListPasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penes = ListPaste::find([1]);
        $vermicelli = ListPaste::find([2]);
        $spaghettis = ListPaste::find([3]);
        $linguinis = ListPaste::find([4]);
        return view('paste.index',compact('penes','vermicelli','spaghettis','linguinis'));
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
     * @param  \App\Models\ListPaste  $listPaste
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paste = ListPaste::Find($id);
        return view('paste.paste',compact('paste'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListPaste  $listPaste
     * @return \Illuminate\Http\Response
     */
    public function edit(ListPaste $listPaste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListPaste  $listPaste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListPaste $listPaste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListPaste  $listPaste
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListPaste $listPaste)
    {
        //
    }
}
