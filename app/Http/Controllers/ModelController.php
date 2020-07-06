<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelUser;
class ModelController extends Controller
{
    //
    public function index()
    {
     return ModelUser:: all();
    }
}
