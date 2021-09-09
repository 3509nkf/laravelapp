@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
      @parent
      インデックスページ
@endsection

@section('content')
      <p>{{$msg}}</p>
      @if (count($errors) > 0)
      <div>
        <ul>
        	@foreach($errors->all() as $error)
                     <li> {{ $error }}</li>
                @endforreach
       </ul>
     </div>
     @endif
     <form action="/hello" method="post">
     <table>
     	@csrf
        <tr><th>name:
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
