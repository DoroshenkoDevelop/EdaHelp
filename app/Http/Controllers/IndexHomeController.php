<?php

namespace App\Http\Controllers;

use App\Models\IndexHome;
use App\Models\Modal\ListChef;
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
        $populars = IndexHome::find([1]);
        $snas = IndexHome::find([2]);
        $zacs = IndexHome::find([3]);
        $sys = IndexHome::find([4]);
        $pas = IndexHome::find([5]);
        $shtr = IndexHome::find([6]);
        $chess = IndexHome::find([7]);


        return view('home.index',
            compact('populars',
                'snas',
                'zacs',
                'sys',
                'pas',
                'shtr','chess'
            )
        );
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
        $popular = IndexHome::find($id);
        return view('popular.popular',compact('popular'));
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
