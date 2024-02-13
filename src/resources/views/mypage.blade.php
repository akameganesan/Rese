@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')





<h1>お子に入り店舗追加</h1>




@if(empty($day))
入っていません
@else
<h2>day {{$day}}</h2>
@endif





@if(empty($time))
入っていません
@else
<h2>TIME {{$time}}</h2>
@endif





@if(empty($num))
入っていません
@else
<h2>Number {{$num}}</h2>
@endif


@endsection