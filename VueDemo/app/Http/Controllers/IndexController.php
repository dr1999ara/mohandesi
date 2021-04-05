<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    // public function index()
    // {
    //     // return 'this is a controller';
    //     // return view('vue');
       
    // }
    
    public function __invoke()
    {
        return view('vue');
    }
}
