<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersCreateRequest;
use App\Http\Requests\OrdersUpdateRequest;
use App\Model\Orders;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $orders = Orders::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.orders.index',compact('orders'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  OrdersCreateRequest  $request
     * @return Response
     */
    public function store(OrdersCreateRequest $request)
    {
        Orders::create($request->all());

        return redirect()->route('admin.orders.index')
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
        $orders = Orders::find($id);
        return view('admin.orders.show',compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Orders::find($id);
        return view('admin.orders.edit',compact('orders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrdersUpdateRequest $request, $id)
    {
        Orders::find($id)->update($request->all());

        return redirect()->route('admin.orders.index')
                        ->with('success','Orders updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orders::find($id)->delete();
        return redirect()->route('admin.orders.index')
                        ->with('success','Orders deleted successfully');
    }
}
