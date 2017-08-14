<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MembersCreateRequest;
use App\Http\Requests\MembersUpdateRequest;
use App\Members;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $members = Members::orderBy('id','DESC')->paginate(15);
        return view('admin.members.index',compact('members'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MembersCreateRequest  $request
     * @return Response
     */
    public function store(MembersCreateRequest $request)
    {
        Members::create($request->all());

        return redirect()->route('admin.members.index')
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
        $members = Members::find($id);
        return view('admin.members.show',compact('members'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Members::find($id);
        return view('admin.members.edit',compact('members'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MembersUpdateRequest $request, $id)
    {
        Members::find($id)->update($request->all());

        return redirect()->route('admin.members.index')
                        ->with('success','Members updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Members::find($id)->delete();
        return redirect()->route('admin.members.index')
                        ->with('success','Members deleted successfully');
    }
}
