<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PromotionsCreateRequest;
use App\Http\Requests\PromotionsUpdateRequest;
use App\Model\Promotions;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promotions = Promotions::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.promotions.index',compact('promotions'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PromotionsCreateRequest  $request
     * @return Response
     */
    public function store(PromotionsCreateRequest $request)
    {
        Promotions::create($request->all());

        return redirect()->route('admin.promotions.index')
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
        $promotions = Promotions::find($id);
        return view('admin.promotions.show',compact('promotions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promotions = Promotions::find($id);
        return view('admin.promotions.edit',compact('promotions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PromotionsUpdateRequest $request, $id)
    {
        Promotions::find($id)->update($request->all());

        return redirect()->route('admin.promotions.index')
                        ->with('success','Promotions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promotions::find($id)->delete();
        return redirect()->route('admin.promotions.index')
                        ->with('success','Promotions deleted successfully');
    }
}
