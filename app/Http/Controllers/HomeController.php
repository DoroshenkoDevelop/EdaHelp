<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {

       return view('home.home');

   }

   public function info()
   {
       return view('info.info');
   }

    public function map()
    {
        return view('map.map');
    }

    public function order()
    {
        return view('order.order');
    }

}
