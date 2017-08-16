<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveriesCreateRequest;
use App\Http\Requests\DeliveriesUpdateRequest;
use App\Model\Deliveries;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $deliveries = Deliveries::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.deliveries.index',compact('deliveries'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DeliveriesCreateRequest  $request
     * @return Response
     */
    public function store(DeliveriesCreateRequest $request)
    {
        Deliveries::create($request->all());

        return redirect()->route('admin.deliveries.index')
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
        $deliveries = Deliveries::find($id);
        return view('admin.deliveries.show',compact('deliveries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $deliveries = Deliveries::find($id);
        return view('admin.deliveries.edit',compact('deliveries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeliveriesUpdateRequest $request, $id)
    {
        Deliveries::find($id)->update($request->all());

        return redirect()->route('admin.deliveries.index')
                        ->with('success','Deliveries updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deliveries::find($id)->delete();
        return redirect()->route('admin.deliveries.index')
                        ->with('success','Deliveries deleted successfully');
    }
}
