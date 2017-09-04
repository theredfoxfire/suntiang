<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisclaimerCreateRequest;
use App\Http\Requests\DisclaimerUpdateRequest;
use App\Model\Disclaimer;

class DisclaimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $disclaimer = Disclaimer::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.disclaimer.index',compact('disclaimer'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.disclaimer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  DisclaimerCreateRequest  $request
     * @return Response
     */
    public function store(DisclaimerCreateRequest $request)
    {
        Disclaimer::create($request->all());

        return redirect()->route('admin.disclaimer.index')
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
        $disclaimer = Disclaimer::find($id);
        return view('admin.disclaimer.show',compact('disclaimer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disclaimer = Disclaimer::find($id);
        return view('admin.disclaimer.edit',compact('disclaimer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DisclaimerUpdateRequest $request, $id)
    {
        Disclaimer::find($id)->update($request->all());

        return redirect()->route('admin.disclaimer.index')
                        ->with('success','Disclaimer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Disclaimer::find($id)->delete();
        return redirect()->route('admin.disclaimer.index')
                        ->with('success','Disclaimer deleted successfully');
    }
}
