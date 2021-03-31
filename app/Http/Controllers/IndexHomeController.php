<?php

namespace App\Http\Controllers;

use App\Models\IndexHome;
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
        // ПОПУЛЯРНЫЕ
        $populars1 = IndexHome::find([1]);
        $populars2 = IndexHome::find([2]);
        $populars3 = IndexHome::find([3]);
        $populars4 = IndexHome::find([4]);
       // ПОПУЛЯРНЫЕ

        // НОВЫЕ
        $new1 = IndexHome::find([5]);
        $new2 = IndexHome::find([6]);
        $new3 = IndexHome::find([7]);
        $new4 = IndexHome::find([8]);
        // НОВЫЕ

        return view('home.index',
            compact('populars1',
                'populars2',
                'populars3',
                'populars4',
                'new1','new2',
                'new3','new4'
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
