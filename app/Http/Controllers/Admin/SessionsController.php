<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SessionsCreateRequest;
use App\Http\Requests\SessionsUpdateRequest;
use App\Model\Sessions;

class SessionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sessions = Sessions::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.sessions.index',compact('sessions'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SessionsCreateRequest  $request
     * @return Response
     */
    public function store(SessionsCreateRequest $request)
    {
        Sessions::create($request->all());

        return redirect()->route('admin.sessions.index')
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
        $sessions = Sessions::find($id);
        return view('admin.sessions.show',compact('sessions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sessions = Sessions::find($id);
        return view('admin.sessions.edit',compact('sessions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SessionsUpdateRequest $request, $id)
    {
        Sessions::find($id)->update($request->all());

        return redirect()->route('admin.sessions.index')
                        ->with('success','Sessions updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sessions::find($id)->delete();
        return redirect()->route('admin.sessions.index')
                        ->with('success','Sessions deleted successfully');
    }
}
