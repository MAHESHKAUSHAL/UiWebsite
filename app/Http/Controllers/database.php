<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class database extends Controller
{
    //
      public function dbcheck()
      {
     // return $database=DB::table('user')->get();
     // print_r($database);

     //$data=DB::table('user')->count();
     //$data=DB::table('user')->find(4);

/*
     $data=DB::table('user')
     ->insert([
         'name'=>'mahesh kaushal',
         'email'=>'mahesh000@gmail.com',
         'address'=>'raipur'
     ]);
      print_r($data);
     }

$data=DB::table('user')
      ->where('id', '1')
     ->update([
        'email'=>'abc@gmail.com',
     ]);
     print_r($data);
      }

$data=DB::table('user')
      ->where('id', '1')
     ->delete();
     print_r($data);


    */


$data=DB::table('user')
//->max('id');
//print_r($data);
//->sum('id');
->average('id');
print_r($data);

    }
}
