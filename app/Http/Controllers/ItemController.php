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

    public function dailyMeal()
    {
        $datas = Item::itemIndex();

        return view('item.dailyMeal', $datas);
    }

    public function dailyMealDetail($id)
    {
        // $item = Item::whereId($id)->firstOrFail();

        return view('item.dailyMealShow');
    }

    public function catering()
    {
        $datas = Item::itemIndex();

        return view('item.catering', $datas);
    }

    public function snackbox()
    {
        $datas = Item::itemIndex();

        return view('item.snackbox', $datas);
    }

    public function search()
    {
        $datas = Item::itemIndex();

        return view('item.search', $datas);
    }

    public function custom()
    {
        $datas = Item::itemIndex();

        return view('item.custom', $datas);
    }

    public function itemDetail($id)
    {
        $item = Item::whereId($id)->firstOrFail();

        return view('item.show')->withItem($item);
    }
}
