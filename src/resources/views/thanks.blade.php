@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__box">
    <div class="thanks__content">
        <div class="thanks__text">
            <p>会員登録ありがとうございます</p>
        </div>
        <div class="thanks__form">
            <form action="/login" method="get">
                @csrf
                <button class="thanks__button" type="submit">ログインする</button>
            </form>
        </div>
    </div>
</div>
@endsection