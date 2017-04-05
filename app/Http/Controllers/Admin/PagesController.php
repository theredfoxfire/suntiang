<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PagesCreateRequest;
use App\Http\Requests\PagesUpdateRequest;
use App\Pages;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pages = Pages::orderBy('id','DESC')->paginate(15);
        return view('admin.pages.index',compact('pages'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PagesCreateRequest  $request
     * @return Response
     */
    public function store(PagesCreateRequest $request)
    {
        Pages::create($request->all());

        return redirect()->route('admin.pages.index')
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
        $pages = Pages::find($id);
        return view('admin.pages.show',compact('pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pages = Pages::find($id);
        return view('admin.pages.edit',compact('pages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PagesUpdateRequest $request, $id)
    {
        Pages::find($id)->update($request->all());

        return redirect()->route('admin.pages.index')
                        ->with('success','Pages updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pages::find($id)->delete();
        return redirect()->route('admin.pages.index')
                        ->with('success','Pages deleted successfully');
    }
}
