<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CouponCreateRequest;
use App\Http\Requests\CouponCreateRequest as CouponUpdateRequest;
use App\Model\Coupon;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coupon = Coupon::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.coupon.index',compact('coupon'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CouponCreateRequest  $request
     * @return Response
     */
    public function store(CouponCreateRequest $request)
    {
        Coupon::create($request->all());

        return redirect()->route('admin.coupon.index')
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
        $coupon = Coupon::find($id);
        return view('admin.coupon.show',compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.coupon.edit',compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponUpdateRequest $request, $id)
    {
        Coupon::find($id)->update($request->all());

        return redirect()->route('admin.coupon.index')
                        ->with('success','Coupon updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Coupon::find($id)->delete();
        return redirect()->route('admin.coupon.index')
                        ->with('success','Coupon deleted successfully');
    }
}
