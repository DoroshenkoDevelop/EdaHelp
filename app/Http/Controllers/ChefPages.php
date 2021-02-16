<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefPages extends Controller
{
    public function index()
    {
    return view('chef.chef_list');
    }

    public function show()
    {
        return view('chef.gordon');
    }

}
