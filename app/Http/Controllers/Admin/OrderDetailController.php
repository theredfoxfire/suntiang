<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderDetailCreateRequest;
use App\Http\Requests\OrderDetailUpdateRequest;
use App\Model\OrderDetail;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $order_details = OrderDetail::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.order_details.index',compact('order_details'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrderDetailCreateRequest  $request
     * @return Response
     */
    public function store(OrderDetailCreateRequest $request)
    {
        OrderDetail::create($request->all());

        return redirect()->route('admin.order_details.index')
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
        $order_details = OrderDetail::find($id);
        return view('admin.order_details.show',compact('order_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order_details = OrderDetail::find($id);
        return view('admin.order_details.edit',compact('order_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderDetailUpdateRequest $request, $id)
    {
        OrderDetail::find($id)->update($request->all());

        return redirect()->route('admin.order_details.index')
                        ->with('success','OrderDetail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderDetail::find($id)->delete();
        return redirect()->route('admin.order_details.index')
                        ->with('success','OrderDetail deleted successfully');
    }
}
