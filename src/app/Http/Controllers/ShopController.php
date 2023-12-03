<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Store;
use App\Models\Bookmark;
use App\Models\Reservation;

class ShopController extends Controller
{
    public function thanks()
    {
        return view('thanks');
    }

    public function shop_all()
    {
        $stores = Store::all();
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $bookmarks = Bookmark::where('user_id', $user_id)->get();
            return view('shop_all', compact('stores', 'bookmarks'));
        }else{
            return view('shop_all', compact('stores'));
        }
    }

    public function detail(Store $store)
    {
        return view('shop_detail', compact('store'));
    }

    public function back(){
        return back();
    }

    public function done(Request $request)
    {
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $reservation = new Reservation;
            $reservation->user_id = $user_id;
            $reservation->store_id = $request->store_id;
            $reservation->datetime = $request->time;
            $reservation->member = $request->member;
        }
        return view('done');
    }

    public function my_page()
    {
        $user = Auth::user();
        $bookmarks = Bookmark::where('user_id', $user->id)->get();
        $stores = array();
        foreach($bookmarks as $bookmark){
            $store = Store::where('id', $bookmark->store_id)->first();
            $stores = $stores + array($store);
        }
        return view('my_page', compact('user', 'stores', 'bookmarks'));
    }
}
