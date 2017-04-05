<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageImagesCreateRequest;
use App\Http\Requests\PageImagesUpdateRequest;
use App\PageImages;

class PageImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_images = PageImages::orderBy('id','DESC')->paginate(15);
        return view('admin.page_images.index',compact('page_images'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page_images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PageImagesCreateRequest  $request
     * @return Response
     */
    public function store(PageImagesCreateRequest $request)
    {
        PageImages::create($request->all());

        return redirect()->route('admin.page_images.index')
                        ->withSuccess("Input data session ID berhasil.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_images = PageImages::find($id);
        return view('admin.page_images.show',compact('page_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_images = PageImages::find($id);
        return view('admin.page_images.edit',compact('page_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageImagesUpdateRequest $request, $id)
    {
        PageImages::find($id)->update($request->all());

        return redirect()->route('admin.page_images.index')
                        ->with('success','PageImages updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PageImages::find($id)->delete();
        return redirect()->route('admin.page_images.index')
                        ->with('success','PageImages deleted successfully');
    }
}
