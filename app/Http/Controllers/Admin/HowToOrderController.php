<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HowToOrderCreateRequest;
use App\Http\Requests\HowToOrderUpdateRequest;
use App\Model\HowToOrder;

class HowToOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $how_to_order = HowToOrder::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.how_to_order.index',compact('how_to_order'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.how_to_order.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  HowToOrderCreateRequest  $request
     * @return Response
     */
    public function store(HowToOrderCreateRequest $request)
    {
        HowToOrder::create($request->all());

        return redirect()->route('admin.how_to_order.index')
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
        $how_to_order = HowToOrder::find($id);
        return view('admin.how_to_order.show',compact('how_to_order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $how_to_order = HowToOrder::find($id);
        return view('admin.how_to_order.edit',compact('how_to_order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HowToOrderUpdateRequest $request, $id)
    {
        HowToOrder::find($id)->update($request->all());

        return redirect()->route('admin.how_to_order.index')
                        ->with('success','HowToOrder updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HowToOrder::find($id)->delete();
        return redirect()->route('admin.how_to_order.index')
                        ->with('success','HowToOrder deleted successfully');
    }
}
