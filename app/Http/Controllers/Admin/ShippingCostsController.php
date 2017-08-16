<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ShippingCostCreateRequest;
use App\Http\Requests\ShippingCostUpdateRequest;
use App\Model\ShippingCosts;

class ShippingCostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shipping_costs = ShippingCosts::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.shipping_costs.index',compact('shipping_costs'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shipping_costs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ShippingCostsCreateRequest  $request
     * @return Response
     */
    public function store(ShippingCostCreateRequest $request)
    {
        ShippingCosts::create($request->all());

        return redirect()->route('admin.shipping_costs.index')
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
        $shipping_costs = ShippingCosts::find($id);
        return view('admin.shipping_costs.show',compact('shipping_costs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shipping_costs = ShippingCosts::find($id);
        return view('admin.shipping_costs.edit',compact('shipping_costs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingCostUpdateRequest $request, $id)
    {
        ShippingCosts::find($id)->update($request->all());

        return redirect()->route('admin.shipping_costs.index')
                        ->with('success','ShippingCosts updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ShippingCosts::find($id)->delete();
        return redirect()->route('admin.shipping_costs.index')
                        ->with('success','ShippingCosts deleted successfully');
    }
}
