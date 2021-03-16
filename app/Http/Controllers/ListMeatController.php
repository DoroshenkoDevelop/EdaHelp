<?php

namespace App\Http\Controllers;

use App\Models\ListMeat;
use Illuminate\Http\Request;

class ListMeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beefs = ListMeat::find([10]);
        $porks = ListMeat::find([1,4,9]);
        $birds = ListMeat::find([3,5,8]);
        $mixs = ListMeat::find([7,2]);

        return view('meat.index',compact(
            'beefs','porks','birds','mixs')
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
     * @param  \App\Models\ListMeat  $listMeat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $meat = ListMeat::find($id);
        return view('meat.meat',compact('meat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListMeat  $listMeat
     * @return \Illuminate\Http\Response
     */
    public function edit(ListMeat $listMeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListMeat  $listMeat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListMeat $listMeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListMeat  $listMeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListMeat $listMeat)
    {
        //
    }
}
