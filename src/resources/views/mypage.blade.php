@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')





<h1>お子に入り店舗追加</h1>






<h2>day {{$day}}</h2>








<h2>TIME {{$time}}</h2>







<h2>Number {{$num}}</h2>


{{$shops->name}}


<h2>{{$shopId}}</h2>



@endsection