@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
    <div class="register-form">
        <div class="register-form__header">
            <div>Registration</div>
        </div>
        <div class="register-form__content">
            <form action="/register" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-input name">
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Username" />
                    </div>
                    <div class="form__error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-input email">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email" />
                    </div>
                    <div class="form__error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-input password">
                        <input type="password" name="password" value="{{ old('password') }}" placeholder="Password" />
                    </div>
                    <div class="form__error">
                        @error('password')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection