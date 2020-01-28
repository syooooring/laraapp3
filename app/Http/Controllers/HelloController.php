<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\DB;
use Validator;

class HelloController extends Controller
{
  
    public function index(Request $request)
    {
      if (isset($request->id))
      {
          $param = ['id' => $request->id];
          $items = DB::select('select * from people where id = :id',
                $param);
      } else {
          $items = DB::select('select * from people');
      }
      return view('hello.index',['items' => $items]);
    }

    public function post(Request $request)
    {
        $items = DB::select('select * form people');
        return view('hello.index',['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('hello.add');
    }

    public function create(Request $request)
    {
        $param = [
            'name' => $request->name,
        ];
        DB::insert('insert into people (name) values  (:name)', $param);
        return redirect('/hello');
    }
}