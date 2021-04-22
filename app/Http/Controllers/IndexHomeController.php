<?php

namespace App\Http\Controllers;
use App\Models\Modal\ListChef;
use App\Models\ListArticle;
use App\Models\ListSnack;
use App\Models\IndexHome;
use App\Models\ListSushi;
use App\Models\ListMeat;
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
        //СТАТЬИ
        $articles1 = ListArticle::find([1]);
        $articles2 = ListArticle::find([2]);
        //СТАТЬИ

        //РЕКЛАМА
        $product1 = IndexHome::find([9]);
        $product2 = IndexHome::find([10]);
        $product3 = IndexHome::find([11]);
        //РЕКЛАМА

        // ПОПУЛЯРНЫЕ
        $populars1 = IndexHome::find([1]);
        $populars2 = IndexHome::find([2]);
        $populars3 = ListSushi::find([2]);
        $populars4 = ListMeat::find([9]);
       // ПОПУЛЯРНЫЕ

        // НОВЫЕ
        $new1 = ListMeat::find([2]);
        $new2 = IndexHome::find([6]);
        $new3 = IndexHome::find([7]);
        $new4 = IndexHome::find([8]);
        // НОВЫЕ

        //ШЕФ РЕЦЕПТЫ
        $chef1 = ListChef::find([1]);
        //ШЕФ РЕЦЕПТЫ


        return view('home.index',
            compact('populars1',
                'populars2',
                'populars3',
                'populars4',
                'new1','new2',
                'new3','new4','chef1','articles1','articles2','product1','product2','product3'
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
        return view('home.popular',compact('popular'));
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
