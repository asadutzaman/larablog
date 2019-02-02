<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cms;
use App\Complain;
use App\Query;

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
