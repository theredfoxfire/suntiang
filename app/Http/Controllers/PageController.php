<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberCreateRequest;
use Illuminate\Http\Request;
use App\Model\Pages;
use App\Model\Subscriber;
use App\Model\FaqCategory;
use App\Model\Promo;
use App\Model\Term;
use App\Model\Privacy;
use App\Model\Disclaimer;
use App\Model\HowToOrder;
use App\Model\CategoryHow;
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
        $about = Pages::indexAbout()[0];
        return view('page.about', compact('about'));
    }

    public function faq()
    {
        $category = FaqCategory::all();
        $category_id = Pages::getFaqCategory()[0]->id;
        $faq = Pages::getFaqByCategory($category_id);
        return view('page.faq', compact('faq', 'category', 'category_id'));
    }

    public function faqByCategory($category_id)
    {
        $category = FaqCategory::all();
        $faq = Pages::getFaqByCategory($category_id);
        return view('page.faq', compact('faq', 'category', 'category_id'));
    }

    public function promo()
    {
        $promo = Promo::all();
        return view('page.promo', compact('promo'));
    }

    public function subscriber(SubscriberCreateRequest $request)
    {
        $data = array_merge(['is_active' => true], $request->all());
        Subscriber::create($data);
        return back()
            ->withSuccess("Terima kasih email Anda berhasil tersimpan.");
    }

    public function how()
    {
        $category = CategoryHow::all();
        $category_id = Pages::getFaqCategory()[0]->id;
        $how = HowToOrder::getHowByCategory($category_id);
        return view('page.how', compact('how', 'category_id', 'category'));
    }

    public function howByCategory($category_id)
    {
        $category = CategoryHow::all();
        $how = HowToOrder::getHowByCategory($category_id);
        return view('page.how', compact('how', 'category_id', 'category'));
    }

    public function payment()
    {

        return view('page.payment');
    }

    public function disclaimer()
    {
        $disclaimer = Disclaimer::orderBy('sort', 'asc')->get();
        return view('page.disclaimer', compact('disclaimer'));
    }

    public function privacy()
    {
        $privacy = Privacy::orderBy('sort', 'asc')->get();
        return view('page.privacy', compact('privacy'));
    }

    public function tou()
    {
        $term = Term::orderBy('sort', 'asc')->get();
        return view('page.tou', compact('term'));
    }
}
