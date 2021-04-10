<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListSnacks;

class ListSnacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coldsnacks = ListSnacks::find([3,1]);
        $hotsnacks = ListSnacks::find([5,6]);
        $bruschettas = ListSnacks::find([2,4]);
        $mixs = ListSnacks::find([7,8,9]);
        return view('recipes.index',
            compact('coldsnacks',
                'hotsnacks',
                'bruschettas',
                'mixs')
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



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       $snack = ListSnacks::find($id);
        return view('recipes.snacks',compact('snack'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
