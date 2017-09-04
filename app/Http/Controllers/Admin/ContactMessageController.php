<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactMessageCreateRequest;
use App\Http\Requests\ContactMessageUpdateRequest;
use App\Model\ContactMessage;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contact_message = ContactMessage::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.contact_message.index',compact('contact_message'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact_message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ContactMessageCreateRequest  $request
     * @return Response
     */
    public function store(ContactMessageCreateRequest $request)
    {
        $data = array_merge(['is_blocked' => false], $request->all());
        ContactMessage::create($data);

        return redirect()->route('admin.contact_message.index')
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
        $contact_message = ContactMessage::find($id);
        return view('admin.contact_message.show',compact('contact_message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact_message = ContactMessage::find($id);
        return view('admin.contact_message.edit',compact('contact_message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactMessageUpdateRequest $request, $id)
    {
        ContactMessage::find($id)->update($request->all());

        return redirect()->route('admin.contact_message.index')
                        ->with('success','ContactMessage updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ContactMessage::find($id)->delete();
        return redirect()->route('admin.contact_message.index')
                        ->with('success','ContactMessage deleted successfully');
    }
}
