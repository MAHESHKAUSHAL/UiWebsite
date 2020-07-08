<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{
    //
    public function submit(Request $request)
    {

        $request->validate([

            "name"=>"required",
            "phone"=>"min:10",
            "password"=>"min:3 | max:5"

        ]);
    return $request->input();
    }
}
