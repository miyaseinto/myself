@extends('layouts.helloapp')

@section('title' ,'Show')

@section('menubar')
  @parent
  詳細ページ
@endsection

@section('content')
    <table>
    @if ($items != null)
      @foreach ($items as $item)
        <tr><th>id:</tr><td>{{$item->id}}</td></tr>
        <tr><th>name:</tr><td>{{$item->name}}</td></tr>
        <tr><th>age:</tr><td>{{$item->age}}</td></tr>
      @endforeach
    @endif
    </table>
@endsection

@section('footer')
  copyright 2020 tuyano.
@endsection
