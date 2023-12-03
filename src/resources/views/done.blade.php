@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done">
    <div class="done__message">ご予約ありがとうございます</div>
    <div class="done__btn"><a href="/shop_all" class="done__back">戻る</a></div>
</div>
@endsection