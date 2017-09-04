<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagesCreateRequest;
use App\Http\Requests\PagesUpdateRequest;
use App\Http\Requests\AboutUpdateRequest;
use App\Http\Requests\FaqCreateRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Model\Pages;
use App\Model\FaqCategory;
use App\Services\PageManager;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pages = Pages::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.pages.index',compact('pages'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAbout(Request $request)
    {
        $pages = Pages::indexAbout();
        return view('admin.pages.indexAbout',compact('pages'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editAbout($id)
    {
        $pages = Pages::getAbout($id);
        return view('admin.pages.editAbout',compact('pages'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateAbout(AboutUpdateRequest $request, $id)
    {
        Pages::updateAbout($id, $request->all());

        return redirect()->route('admin.about.index')
                        ->with('success','Pages updated successfully');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexFaq(Request $request)
    {
        $pages = Pages::indexFaq();
        return view('admin.pages.indexFaq',compact('pages'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editFaq($id)
    {
        $pages = Pages::getFaq($id);
        $faqCategory = FaqCategory::orderBy('name','DESC')->get();
        return view('admin.pages.editFaq',compact('pages', 'faqCategory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateFaq(FaqUpdateRequest $request, $id)
    {
        Pages::updateFaq($id, $request->all());

        return redirect()->route('admin.faq.index')
                        ->with('success','Faq updated successfully');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFaq()
    {
        $faqCategory = FaqCategory::orderBy('name','DESC')->get();
        return view('admin.pages.createFaq',compact('faqCategory'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function storeFaq(FaqCreateRequest $request)
    {
        Pages::insertFaq($request->all());

        return redirect()->route('admin.faq.index')
                        ->with('success','Faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteFaq($id)
    {
        Pages::deleteFaq($id);
        return redirect()->route('admin.faq.index')
                        ->with('success','Faq deleted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = Pages::find($id);
        return view('admin.pages.show',compact('pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = Pages::getAbout($id);
        return view('admin.pages.editAbout',compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesUpdateRequest $request, $id)
    {
        Pages::find($id)->update($request->all());

        return redirect()->route('admin.pages.index')
                        ->with('success','Pages updated successfully');
    }
}
