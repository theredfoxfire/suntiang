<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Carbon\Carbon;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::where('created_at', '<=', Carbon::now())
            ->orderBy('available_date', 'desc')
            ->paginate(config('blog.posts_per_page'));

        return view('item.index', compact('items'));
    }

    public function itemDetail($id)
    {
        $item = Item::whereId($id)->firstOrFail();

        return view('item.show')->withItem($item);
    }
}
