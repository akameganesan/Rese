@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="background">
    <div class="register__content">
        <div class="register__shadow">
            <div class="container">
                <div class="register__shadow">
                    <div class="container__color">
                        <div class="hed_color">
                            <div class="login-form__heading">
                                <h2>Login</h2>
                            </div>
                        </div>
                    </div>
                    <div class="register__shadow">
                        <div class="container">
                            <div class="container__color2">
                                <form class="form" action="/login" method="post">
                                    @csrf
                                    <div class="icon__flex">
                                        <div class="icon__left">
                                            <div class="mail"></div>
                                        </div>
                                        <div class="text__left">
                                            <div class="form__group-content">
                                                <div class="form__input--text">
                                                    <input type="email" name="email" placeholder="Email"
                                                        value="{{ old('email') }}" />
                                                </div>
                                                <div class="form__error">
                                                    @error('email')
                                                    {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__group">
                                        <div class="icon__flex">
                                            <div class="icon__left">
                                                <img class="icon_1" src="{{ asset('img/カギアイコン.svg') }}" alt="">
                                            </div>
                                            <div class="text__left">
                                                <div class="form__group-content">
                                                    <div class="form__input--text">
                                                        <input type="password" placeholder="Password" name="password" />
                                                    </div>
                                                    <div class="form__error">
                                                        @error('password')
                                                        {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__button">
                                        <button class="form__button-submit" type="submit">ログイン</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection