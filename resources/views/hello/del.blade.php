@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
   @parent
   削除ページ
@endsection

@section('content')
   <table>
   <form action="/hello/del" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{$form->id}}">
      <tr><th>name: </th><td>{{$form->name}}</td></tr>
      <tr><th></th><td><input type="submit" value="send"></td></tr>
   </form>
   </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection