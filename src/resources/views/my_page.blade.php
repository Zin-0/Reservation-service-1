@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

<?php
if(Auth::check()){
    $marks = array();
    foreach($bookmarks as $bookmark){
        $marks[] = $bookmark->store_id;
    }
}
?>

@section('content')
<div class="status">
    <div class="status__message">予約状況</div>
    <div class="status__rev"></div>
</div>
<div class="information">
    <div class="name">{{$user->name}}</div>
    <div class="store">
        <div class="store__top">お気に入り店舗</div>
        <div class="shop-list">
            @foreach ($stores as $store)
            <div class="shop__card">
                <div class="shop__card-image"><img src="{{$store->image}}"></div>
                <div class="shop__card-content">
                    <div class="shop-name">{{$store->name}}</div>
                    <div class="shop-category">
                        <div class="shop-area">#{{$store->getArea()}}</div>
                        <div class="shop-genre">#{{$store->getGenre()}}</div>
                    </div>
                    <div class="card-bottom">
                        <div class="card-message">
                            <a href="/detail/{{$store->id}}">詳しくみる</a>
                        </div>
                        <div class="card-mark">
                            @if(Auth::check())
                                @if(in_array($store->id, (array)$marks))
                                <form action="{{route('unnice', $store->id)}}" method="get" class="card-mark-form">
                                    @csrf
                                    <input type="submit" class="heart-on" name="store_id" value="{{$store->id}}"/>
                                </form>
                                @else
                                <form action="{{route('nice', $store->id)}}" method="get" class="card-mark form">
                                    @csrf
                                    <input type="submit" class="heart-off" name="store_id" value="{{$store->id}}"/>
                                </form>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection