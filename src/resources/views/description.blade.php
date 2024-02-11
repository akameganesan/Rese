@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/description.css') }}">
@endsection

@section('content')
<!--詳細ページ建設予定地-->

{{$keyword}}

<a href="/" class="contact__btn2">X</a>
<h1>{{$shops->name}}</h1>


@endsection