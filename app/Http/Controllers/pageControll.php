<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageControll extends Controller
{
    public function index(){
        return view('index/index');
    }

    public function product(){
        return view('product/index');
    }

    public function cms(){
        return view('cms/index');
    }

}
