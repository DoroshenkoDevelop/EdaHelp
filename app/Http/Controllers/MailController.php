<?php

namespace App\Http\Controllers;

use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller

{
    public function send(Request $request)
    {
        $email = $request->email;
        $name = $request->name;
        $category = $request->category;
        $recipe = $request->recipe;
        $image = $request->image;

        Mail::to('printcodestudio@gmail.com')->send(new OrderShipped($email,$name,$category,$recipe,$image));
        return view('my_recipe.my_recipe');

    }
}
