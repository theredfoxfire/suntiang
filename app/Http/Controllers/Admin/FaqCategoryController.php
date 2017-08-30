<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqCategoryCreateRequest;
use App\Http\Requests\FaqCategoryUpdateRequest;
use App\Model\FaqCategory;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $faq_category = FaqCategory::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.faq_category.index',compact('faq_category'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  FaqCategoryCreateRequest  $request
     * @return Response
     */
    public function store(FaqCategoryCreateRequest $request)
    {
        FaqCategory::create($request->all());

        return redirect()->route('admin.faq_category.index')
                        ->withSuccess("Input data  berhasil.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq_category = FaqCategory::find($id);
        return view('admin.faq_category.show',compact('faq_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq_category = FaqCategory::find($id);
        return view('admin.faq_category.edit',compact('faq_category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FaqCategoryUpdateRequest $request, $id)
    {
        FaqCategory::find($id)->update($request->all());

        return redirect()->route('admin.faq_category.index')
                        ->with('success','FaqCategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FaqCategory::find($id)->delete();
        return redirect()->route('admin.faq_category.index')
                        ->with('success','FaqCategory deleted successfully');
    }
}
