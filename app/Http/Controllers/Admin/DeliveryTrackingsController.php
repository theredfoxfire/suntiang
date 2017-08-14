<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DeliveryTrackingsCreateRequest;
use App\Http\Requests\DeliveryTrackingsUpdateRequest;
use App\DeliveryTrackings;

class DeliveryTrackingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $delivery_trackings = DeliveryTrackings::orderBy('id','DESC')->paginate(15);
        return view('admin.delivery_trackings.index',compact('delivery_trackings'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.delivery_trackings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DeliveryTrackingsCreateRequest  $request
     * @return Response
     */
    public function store(DeliveryTrackingsCreateRequest $request)
    {
        DeliveryTrackings::create($request->all());

        return redirect()->route('admin.delivery_trackings.index')
                        ->withSuccess("Input data session ID berhasil.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $delivery_trackings = DeliveryTrackings::find($id);
        return view('admin.delivery_trackings.show',compact('delivery_trackings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery_trackings = DeliveryTrackings::find($id);
        return view('admin.delivery_trackings.edit',compact('delivery_trackings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DeliveryTrackingsUpdateRequest $request, $id)
    {
        DeliveryTrackings::find($id)->update($request->all());

        return redirect()->route('admin.delivery_trackings.index')
                        ->with('success','DeliveryTrackings updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DeliveryTrackings::find($id)->delete();
        return redirect()->route('admin.delivery_trackings.index')
                        ->with('success','DeliveryTrackings deleted successfully');
    }
}
