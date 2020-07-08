<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladetemplateController extends Controller
{
    //
     public function index(){
         //data pass karne ke liye array banate h ok

         $d=['name'=>'anjali','email'=>'abc@gmail.com','address'=>'raipur'];
         return view('template',['data'=>$d]);

       // return 'hello form controller';
         /*
         $data=['name'=>'mahesh'],
         'email'=>'xyz@gmil.com',
         'head'=>'<h1>xyz@gmil.com</h1>'
         //return view('BladetempaleController');
         */

     }
}
