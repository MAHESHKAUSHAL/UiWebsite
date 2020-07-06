<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Pagination_Contro extends Controller
{
    //
    public function list()
    {
        $data =DB::table('user')->paginate(3);
        //echo "hello paging";
        return view('company',['data'=>$data]);

    }
}
