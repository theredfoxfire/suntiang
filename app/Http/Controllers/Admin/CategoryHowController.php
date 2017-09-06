<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryHowCreateRequest;
use App\Http\Requests\CategoryHowUpdateRequest;
use App\Model\CategoryHow;

class CategoryHowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categoryhow = CategoryHow::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.categoryhow.index',compact('categoryhow'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoryhow.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryHowCreateRequest  $request
     * @return Response
     */
    public function store(CategoryHowCreateRequest $request)
    {
        CategoryHow::create($request->all());

        return redirect()->route('admin.categoryhow.index')
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
        $categoryhow = CategoryHow::find($id);
        return view('admin.categoryhow.show',compact('categoryhow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoryhow = CategoryHow::find($id);
        return view('admin.categoryhow.edit',compact('categoryhow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryHowUpdateRequest $request, $id)
    {
        CategoryHow::find($id)->update($request->all());

        return redirect()->route('admin.categoryhow.index')
                        ->with('success','CategoryHow updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        CategoryHow::find($id)->delete();
        return redirect()->route('admin.categoryhow.index')
                        ->with('success','CategoryHow deleted successfully');
    }
}
