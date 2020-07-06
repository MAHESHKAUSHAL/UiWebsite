<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //
    public function index($id)
    {
        //echo $id;
//API MAKE
        return['id'=>$id,'name'=>"MAHESH KAUSHAL"];
    }
}
