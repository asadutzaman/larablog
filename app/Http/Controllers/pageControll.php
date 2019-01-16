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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'District' => 'required',
            'catagory' => 'required',
            'product' => 'required',
            'complain' => 'required',
            'other_issue' => 'required',
            'querys' => 'required',
            'other_info' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $District = $request->District;
        $catagory = $request->catagory;
        $product = $request->product;
        $complain = $request->complain;
        $other_issue = $request->other_issue;
        $querys = $request->querys;
        $other_info = $request->other_info;

        cms::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'District' => $District
        ]);

        Complain::create([
            'catagory' => $catagory,
            'product' => $product,
            'complain' => $complain,
            'other_issue' => $other_issue
        ]);

        Query::create([
            'catagory' => $catagory,
            'product' => $product,
            'querys' => $querys,
            'other_info' => $other_info
        ]);
  
        //Product::create($request->all());
   
        return redirect()->back();
    }

}
