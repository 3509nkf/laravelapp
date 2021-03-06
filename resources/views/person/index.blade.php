@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
	@parent
	インデックスページ
@endsection

@section('content')
	<table>
	<tr><th>Message</th><th>Name</th></tr>
        @foreach ($items as $item)
		<tr>
                    <td>{{$item->message}}</td>
                    <td>{{$item->name}}</td>
                </tr>
        @endforeach
        </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection