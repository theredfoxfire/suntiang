<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pages;
use Carbon\Carbon;

class PageController extends Controller
{
    public function pageDetail($id)
    {
        $page = Pages::whereId($id)->firstOrFail();

        return view('page.show')->withPage($page);
    }
}
