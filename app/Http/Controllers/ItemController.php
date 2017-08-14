<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Carbon\Carbon;

class ItemController extends Controller
{
    public function index()
    {
        $datas = Item::itemIndex();

        return view('item.index', $datas);
    }

    public function itemDetail($id)
    {
        $item = Item::whereId($id)->firstOrFail();

        return view('item.show')->withItem($item);
    }
}
