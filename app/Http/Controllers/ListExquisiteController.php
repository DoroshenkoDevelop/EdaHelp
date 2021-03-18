<?php

namespace App\Http\Controllers;

use App\Models\ListExquisite;
use Illuminate\Http\Request;

class ListExquisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seafoods = ListExquisite::find([1,2]);
        $pokes = ListExquisite::find([3]);
        $meats = ListExquisite::find([5]);
        $fishes = ListExquisite::find([4]);
        return view('exquisite.index',compact('seafoods','pokes','meats','fishes'));
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
     * @param  \App\Models\ListExquisite  $listExquisite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exq = ListExquisite::Find($id);
        return view('exquisite.exquisite',compact('exq'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListExquisite  $listExquisite
     * @return \Illuminate\Http\Response
     */
    public function edit(ListExquisite $listExquisite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListExquisite  $listExquisite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListExquisite $listExquisite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListExquisite  $listExquisite
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListExquisite $listExquisite)
    {
        //
    }
}
