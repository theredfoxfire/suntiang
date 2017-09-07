<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\Item;
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

    public function dailyMealDetail(Request $request, $id)
    {
        $item = Item::whereId($id)->firstOrFail();
        $response = Response(view('item.dailyMealShow', compact('item')));
        if (empty($request->cookie('sessionID'))) {
            $response->withCookie(cookie('sessionID', md5(uniqid()), 36000));
        }

        return $response;
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

    public function customDaily()
    {
        $datas = Item::getAllCategoriesWithItem();

        return view('item.customDaily', compact('datas'));
    }
    public function customCatering()
    {
        $datas = Item::getAllCategoriesWithItem();

        return view('item.customCatering', compact('datas'));
    }

    public function itemDetail($id)
    {
        $item = Item::whereId($id)->firstOrFail();

        return view('item.show')->withItem($item);
    }
}
