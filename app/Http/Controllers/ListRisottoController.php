<?php

namespace App\Http\Controllers;

use App\Models\ListRisotto;
use Illuminate\Http\Request;

class ListRisottoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $risottomeats = ListRisotto::find([4]);
        $risottochikens = ListRisotto::find([3]);
        $risottosseafoods = ListRisotto::find([1]);
        $risottovegetables = ListRisotto::find([2]);
        return view('risotto.index',compact('risottomeats','risottochikens','risottosseafoods','risottovegetables'));
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
     * @param  \App\Models\ListRisotto  $listRisotto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $risotto = ListRisotto::Find($id);
        return view('risotto.risotto',compact('risotto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListRisotto  $listRisotto
     * @return \Illuminate\Http\Response
     */
    public function edit(ListRisotto $listRisotto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListRisotto  $listRisotto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListRisotto $listRisotto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListRisotto  $listRisotto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListRisotto $listRisotto)
    {
        //
    }
}
