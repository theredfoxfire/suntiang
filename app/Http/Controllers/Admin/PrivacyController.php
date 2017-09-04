<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DisclaimerCreateRequest as PrivacyCreateRequest;
use App\Http\Requests\DisclaimerUpdateRequest as PrivacyUpdateRequest;
use App\Model\Privacy;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $privacy = Privacy::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.privacy.index',compact('privacy'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.privacy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PrivacyCreateRequest  $request
     * @return Response
     */
    public function store(PrivacyCreateRequest $request)
    {
        Privacy::create($request->all());

        return redirect()->route('admin.privacy.index')
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
        $privacy = Privacy::find($id);
        return view('admin.privacy.show',compact('privacy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $privacy = Privacy::find($id);
        return view('admin.privacy.edit',compact('privacy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrivacyUpdateRequest $request, $id)
    {
        Privacy::find($id)->update($request->all());

        return redirect()->route('admin.privacy.index')
                        ->with('success','Privacy updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Privacy::find($id)->delete();
        return redirect()->route('admin.privacy.index')
                        ->with('success','Privacy deleted successfully');
    }
}
