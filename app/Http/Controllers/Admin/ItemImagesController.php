<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemImagesCreateRequest;
use App\Http\Requests\ItemImagesUpdateRequest;
use App\Model\ItemImages;

class ItemImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $item_images = ItemImages::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.item_images.index',compact('item_images'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.item_images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ItemImagesCreateRequest  $request
     * @return Response
     */
    public function store(ItemImagesCreateRequest $request)
    {
        ItemImages::create($request->all());

        return redirect()->route('admin.item_images.index')
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
        $item_images = ItemImages::find($id);
        return view('admin.item_images.show',compact('item_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item_images = ItemImages::find($id);
        return view('admin.item_images.edit',compact('item_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemImagesUpdateRequest $request, $id)
    {
        ItemImages::find($id)->update($request->all());

        return redirect()->route('admin.item_images.index')
                        ->with('success','ItemImages updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ItemImages::find($id)->delete();
        return redirect()->route('admin.item_images.index')
                        ->with('success','ItemImages deleted successfully');
    }
}
