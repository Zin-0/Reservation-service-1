@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
    <div class="login-form">
        <div class="login-form__header">
            <div>Login</div>
        </div>
        <div class="login-form__content">
            <form action="/login" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-input email">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-input password">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection