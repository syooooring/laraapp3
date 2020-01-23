<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
  
   public function index()
{
    $date = ['msg'=>'これはコントローラから渡されたメッセージです',
             'id'=>$request->id
    ];
    return view('hello.index', $date);
}
}