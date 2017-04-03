<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartsCreateRequest;
use App\Http\Requests\CartsUpdateRequest;
use App\Carts;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $carts = Carts::orderBy('id','DESC')->paginate(15);
        return view('admin.carts.index',compact('carts'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CartsCreateRequest  $request
     * @return Response
     */
    public function store(CartsCreateRequest $request)
    {
        Carts::create($request->all());

        return redirect()->route('admin.carts.index')
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
        $carts = Carts::find($id);
        return view('admin.carts.show',compact('carts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carts = Carts::find($id);
        return view('admin.carts.edit',compact('carts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CartsUpdateRequest $request, $id)
    {
        Carts::find($id)->update($request->all());

        return redirect()->route('admin.carts.index')
                        ->with('success','Carts updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Carts::find($id)->delete();
        return redirect()->route('admin.carts.index')
                        ->with('success','Carts deleted successfully');
    }
}
