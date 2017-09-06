<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SelectedCategoryCreateRequest;
use App\Http\Requests\SelectedCategoryUpdateRequest;
use App\Model\SelectedCategory;
use App\Model\Categories;

class SelectedCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $selected_category = SelectedCategory::getSelectedCategory();
        return view('admin.selected_category.index',compact('selected_category'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allCategory = Categories::get();
        return view('admin.selected_category.create', compact('allCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SelectedCategoryCreateRequest  $request
     * @return Response
     */
    public function store(SelectedCategoryCreateRequest $request)
    {
        SelectedCategory::create($request->all());

        return redirect()->route('admin.selected_category.index')
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
        $selected_category = SelectedCategory::find($id);
        return view('admin.selected_category.show',compact('selected_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $allCategory = Categories::get();
        $selected_category = SelectedCategory::find($id);
        return view('admin.selected_category.edit',compact('selected_category', 'allCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SelectedCategoryUpdateRequest $request, $id)
    {
        SelectedCategory::find($id)->update($request->all());

        return redirect()->route('admin.selected_category.index')
                        ->with('success','SelectedCategory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SelectedCategory::find($id)->delete();
        return redirect()->route('admin.selected_category.index')
                        ->with('success','SelectedCategory deleted successfully');
    }
}
