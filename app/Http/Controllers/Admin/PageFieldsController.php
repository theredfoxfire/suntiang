<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PageFieldsCreateRequest;
use App\Http\Requests\PageFieldsUpdateRequest;
use App\Model\PageFields;

class PageFieldsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $page_fields = PageFields::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.page_fields.index',compact('page_fields'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page_fields.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PageFieldsCreateRequest  $request
     * @return Response
     */
    public function store(PageFieldsCreateRequest $request)
    {
        PageFields::create($request->all());

        return redirect()->route('admin.page_fields.index')
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
        $page_fields = PageFields::find($id);
        return view('admin.page_fields.show',compact('page_fields'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_fields = PageFields::find($id);
        return view('admin.page_fields.edit',compact('page_fields'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PageFieldsUpdateRequest $request, $id)
    {
        PageFields::find($id)->update($request->all());

        return redirect()->route('admin.page_fields.index')
                        ->with('success','PageFields updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PageFields::find($id)->delete();
        return redirect()->route('admin.page_fields.index')
                        ->with('success','PageFields deleted successfully');
    }
}
