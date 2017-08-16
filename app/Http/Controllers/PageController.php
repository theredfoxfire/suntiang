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

    public function about()
    {

        return view('page.about');
    }

    public function faq()
    {

        return view('page.faq');
    }

    public function promo()
    {

        return view('page.promo');
    }

    public function how()
    {

        return view('page.how');
    }

    public function payment()
    {

        return view('page.payment');
    }

    public function disclaimer()
    {

        return view('page.disclaimer');
    }

    public function privacy()
    {

        return view('page.privacy');
    }

    public function tou()
    {

        return view('page.tou');
    }
}
