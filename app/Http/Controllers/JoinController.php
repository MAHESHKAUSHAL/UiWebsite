<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class JoinController extends Controller
{
    //
    public function dbcheck()
    {




return $data=DB::table('user')
        ->select('employee.ename','user.email')
        ->join('employee','user.id','employee.user_id')
        ->where('employee.ename','mahesh')
        ->get();
        print_r($data);
    }
}
