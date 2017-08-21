<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagesCreateRequest;
use App\Http\Requests\PagesUpdateRequest;
use App\Model\Pages;
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAbout($id)
    {
        $pages = Pages::getAbout($id);
        return view('admin.pages.showAbout',compact('pages'));
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
