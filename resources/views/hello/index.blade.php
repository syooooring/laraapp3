@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
 <table>
 <tr><th>Name</th></tr>
 @foreach ($items as $item)
      <tr>
          <td>{{$item->name}}</td>
      </tr>
 @endforeach
 </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection