<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactInfoCreateRequest;
use App\Http\Requests\ContactInfoUpdateRequest;
use App\Model\ContactInfo;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contact_info = ContactInfo::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.contact_info.index',compact('contact_info'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact_info.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactInfoCreateRequest  $request
     * @return Response
     */
    public function store(ContactInfoCreateRequest $request)
    {
        ContactInfo::create($request->all());

        return redirect()->route('admin.contact_info.index')
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
        $contact_info = ContactInfo::find($id);
        return view('admin.contact_info.show',compact('contact_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_info = ContactInfo::find($id);
        return view('admin.contact_info.edit',compact('contact_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactInfoUpdateRequest $request, $id)
    {
        ContactInfo::find($id)->update($request->all());

        return redirect()->route('admin.contact_info.index')
                        ->with('success','ContactInfo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactInfo::find($id)->delete();
        return redirect()->route('admin.contact_info.index')
                        ->with('success','ContactInfo deleted successfully');
    }
}
