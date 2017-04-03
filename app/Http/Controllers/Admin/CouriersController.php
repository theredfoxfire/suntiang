<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CouriersCreateRequest;
use App\Http\Requests\CouriersUpdateRequest;
use App\Couriers;

class CouriersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $couriers = Couriers::orderBy('id','DESC')->paginate(15);
        return view('admin.couriers.index', compact('couriers'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.couriers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CouriersCreateRequest  $request
     * @return Response
     */
    public function store(CouriersCreateRequest $request)
    {
        Couriers::create($request->all());

        return redirect()->route('admin.couriers.index')
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
        $couriers = Couriers::find($id);
        return view('admin.couriers.show', compact('couriers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $couriers = Couriers::find($id);
        return view('admin.couriers.edit', compact('couriers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouriersUpdateRequest $request, $id)
    {
        Couriers::find($id)->update($request->all());

        return redirect()->route('admin.couriers.index')
                        ->with('success','Couriers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Couriers::find($id)->delete();
        return redirect()->route('admin.couriers.index')
                        ->with('success','Couriers deleted successfully');
    }
}
