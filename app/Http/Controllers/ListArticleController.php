<?php

namespace App\Http\Controllers;

use App\Models\ListArticle;
use Illuminate\Http\Request;

class ListArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = ListArticle::all();
        return view('articles.index',compact('articles'));
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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = ListArticle::find($id);
        return view('articles.article',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListArticle  $listArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(ListArticle $listArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ListArticle  $listArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListArticle $listArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListArticle  $listArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListArticle $listArticle)
    {
        //
    }
}
