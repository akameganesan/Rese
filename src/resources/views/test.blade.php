@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/test.css') }}">
@endsection

@section('content')

<form action="/test" type="text" name="tex" method="post">
    @csrf

            <input type="text" name="tex" value="" size="10">
</form>

@if(empty($tex))
@else
{{$tex}}
@endif



<form action="/test" type="date" name="day" method="post">
    @csrf
        <input type="date" name="day">

        <button class="button__none" type="submit"></button>

</form>



@if(empty($day))
@else
{{$day}}
@endif

<form action="/test" type="time" name="time" method="post">
    @csrf

                    <input type="time" name="time">

                <button class="button__none" type="submit"></button>
</form>


@if(empty($time))
@else
{{$time}}
@endif





<form action="/test" type="text" name="num" method="post">
    @csrf


                    <select name='num'>
                        <option value='1'>１人</option>
                        <option value='2'>２人</option>
                        <option value='3'>３人</option>
                        <option value='4'>４人</option>
                        <option value='5'>５人</option>
                        <option value='6'>６人</option>
                        <option value='7'>７人</option>
                        <option value='8'>８人</option>
                        <option value='9'>９人</option>
                        <option value='10'>１０人</option>
                    </select>


                <button class="button__none" type="submit"></button>
</form>

<input type="text" name="num" value="{{ old('day') }}">
@if(empty($num))
@else
{{$num}}
@endif



@endsection