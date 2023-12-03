<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Store;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function nice(Request $request){
        $bookmarks = new Bookmark;
        $bookmarks->user_id = Auth::user()->id;
        $bookmarks->store_id = $request->store_id;
        $bookmarks->save();
        return redirect('shop_all')->with( [$request->store_id]);
    }

    public function unnice(Request $request, $id){
        $user_id = Auth::user()->id;
        $store_id = $request->store_id;
        $bookmark = Bookmark::where('store_id', $id)->where('user_id', $user_id)->first();
        $bookmark->delete();
        return redirect('shop_all')->with( [$request->store_id]);
    }
}
