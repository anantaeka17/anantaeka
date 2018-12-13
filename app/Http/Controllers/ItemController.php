<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Item;

class ItemController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $item = Item::all();
      return view('item');
    }

    public function saveitem(Request $request){
      $item = new Item;
      $item->item_name = $request->item_name;
      $item->save();

      dd('sukses');
    }
}
