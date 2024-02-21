@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="background">
    <div class="register__content">
        <div class="register__shadow">

            <div class="register__shadow">
                <div class="container">
                    <div class="container__color2">
                        <h2>会員登録ありがとうございます</h2>
                        <form class="form" action="/login" method="post">
                            @csrf

                            <div class="form__button">
                                <button class="form__button-submit" type="submit">ログインする</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection