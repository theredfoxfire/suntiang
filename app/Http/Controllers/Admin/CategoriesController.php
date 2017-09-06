<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesCreateRequest;
use App\Http\Requests\CategoriesUpdateRequest;
use App\Model\Categories;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Categories::orderBy('id','DESC')->where('type', '!=', 'region')->paginate(config('blog.posts_per_page'));
        return view('admin.categories.index',compact('categories'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexRegion(Request $request)
    {
        $categories = Categories::orderBy('id','DESC')->where('type', '=', 'region')->paginate(config('blog.posts_per_page'));
        return view('admin.categories.indexRegion',compact('categories'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRegion()
    {
        return view('admin.categories.createRegion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoriesCreateRequest  $request
     * @return Response
     */
    public function store(CategoriesCreateRequest $request)
    {
        Categories::create(array_merge(['type' => '0'], $request->all()));

        return redirect()->route('admin.categories.index')
                        ->withSuccess("Input data  berhasil.");
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoriesCreateRequest  $request
     * @return Response
     */
    public function storeRegion(CategoriesCreateRequest $request)
    {
        Categories::create(array_merge(['type' => 'region'], $request->all()));

        return redirect()->route('admin.region.index')
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
        $categories = Categories::find($id);
        return view('admin.categories.show',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Categories::findOrFail($id);
        return view('admin.categories.edit',compact('categories'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editRegion($id)
    {
        $region = Categories::findOrFail($id);
        return view('admin.categories.editRegion',compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesUpdateRequest $request, $id)
    {
        Categories::find($id)->update($request->all());

        return redirect()->route('admin.categories.index')
                        ->with('success','Categories updated successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateRegion(CategoriesUpdateRequest $request, $id)
    {
        Categories::find($id)->update($request->all());

        return redirect()->route('admin.region.index')
                        ->with('success','Categories updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categories::find($id)->delete();
        return redirect()->route('admin.categories.index')
                        ->with('success','Categories deleted successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRegion($id)
    {
        Categories::find($id)->delete();
        return redirect()->route('admin.region.index')
                        ->with('success','Categories deleted successfully');
    }
}
