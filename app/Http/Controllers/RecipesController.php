<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function index()
    {
        return view('list_recipes.index');
    }

    public function show()
    {
        return view('list_recipes.recipe_1');
    }
}

