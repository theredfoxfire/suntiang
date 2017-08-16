<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductImagesCreateRequest;
use App\Http\Requests\ProductImagesUpdateRequest;
use App\Model\ProductImages;

class ProductImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product_images = ProductImages::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.product_images.index',compact('product_images'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product_images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductImagesCreateRequest  $request
     * @return Response
     */
    public function store(ProductImagesCreateRequest $request)
    {
        ProductImages::create($request->all());

        return redirect()->route('admin.product_images.index')
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
        $product_images = ProductImages::find($id);
        return view('admin.product_images.show',compact('product_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product_images = ProductImages::find($id);
        return view('admin.product_images.edit',compact('product_images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductImagesUpdateRequest $request, $id)
    {
        ProductImages::find($id)->update($request->all());

        return redirect()->route('admin.product_images.index')
                        ->with('success','ProductImages updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductImages::find($id)->delete();
        return redirect()->route('admin.product_images.index')
                        ->with('success','ProductImages deleted successfully');
    }
}
