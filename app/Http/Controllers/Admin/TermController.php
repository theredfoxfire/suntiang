<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisclaimerCreateRequest as TermCreateRequest;
use App\Http\Requests\DisclaimerUpdateRequest as TermUpdateRequest;
use App\Model\Term;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $term = Term::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.term.index',compact('term'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.term.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  TermCreateRequest  $request
     * @return Response
     */
    public function store(TermCreateRequest $request)
    {
        Term::create($request->all());

        return redirect()->route('admin.term.index')
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
        $term = Term::find($id);
        return view('admin.term.show',compact('term'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $term = Term::find($id);
        return view('admin.term.edit',compact('term'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TermUpdateRequest $request, $id)
    {
        Term::find($id)->update($request->all());

        return redirect()->route('admin.term.index')
                        ->with('success','Term updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Term::find($id)->delete();
        return redirect()->route('admin.term.index')
                        ->with('success','Term deleted successfully');
    }
}
