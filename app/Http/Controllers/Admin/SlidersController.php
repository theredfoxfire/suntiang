<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SlidersCreateRequest;
use App\Http\Requests\SlidersUpdateRequest;
use App\Model\Sliders;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sliders = Sliders::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.sliders.index',compact('sliders'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SlidersCreateRequest  $request
     * @return Response
     */
    public function store(SlidersCreateRequest $request)
    {
        Sliders::create($request->all());

        return redirect()->route('admin.sliders.index')
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
        $sliders = Sliders::find($id);
        return view('admin.sliders.show',compact('sliders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = Sliders::find($id);
        return view('admin.sliders.edit',compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SlidersUpdateRequest $request, $id)
    {
        Sliders::find($id)->update($request->all());

        return redirect()->route('admin.sliders.index')
                        ->with('success','Sliders updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sliders::find($id)->delete();
        return redirect()->route('admin.sliders.index')
                        ->with('success','Sliders deleted successfully');
    }
}
