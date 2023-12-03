@extends('app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop_detail.css') }}">
@endsection

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

@section('content')
<div class="detail">
    <div class="detail__area">
        <div class="detail__top">
            <div class="detail__back">
                <a href="/back" class="back"><</span></a>
            </div>
            <div class="detail__name">{{$store->name}}</div>
        </div>
    </div>
    <div class="detail__img">
        <img src="{{$store->image}}">
    </div>
    <div class="detail__category">
        <div class="detail__area">#{{$store->getArea()}}</div>
        <div class="detail__genre">#{{$store->getGenre()}}</div>
    </div>
    <div class="detail__overview">{{$store->overview}}</div>
</div>
<div class="reservation">
    <form action="/done" method="post">
        @csrf
        <div class="reservation__name">予約</div>
        <div class="reservation__date">
            <input type="date" name="date">
        </div>
        <div class="reservation__time">
            <select name="time" id="select01">
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
            </select>
        </div>
        <div class="reservation__member">
            <select name="member">
                <option value="1">1人</option>
                <option value="2">2人</option>
                <option value="3">3人</option>
                <option value="4">4人</option>
                <option value="5">5人</option>
                <option value="6">6人</option>
            </select>
        </div>
        <div class="reservation__confirmation">
            <div class="confirmation__area">
                <div class="area__left">Shop</div>
                <div class="area__right">{{$store->name}}</div>
            </div>
            <div class="confirmation__area">
                <div class="area__left">Date</div>
                <div class="area__right">
                    <p id="selected"></p>
                </div>
            </div>
            <div class="confirmation__area">
                <div class="area__left">Time</div>
                <div class="area__right"></div>
            </div>
            <div class="confirmation__area">
                <div class="area__left">Number</div>
                <div class="area__right"></div>
            </div>
        </div>
        <div class="reservation__bottom">
            <input type="hidden" name="store_id" value="{{$store->id}}">
            <input type="submit" class="reservation__form" value="予約する"/>
        </div>
    </form>
</div>
@endsection