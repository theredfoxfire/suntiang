<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubscriberCreateRequest;
use App\Http\Requests\SubscriberUpdateRequest;
use App\Model\Subscriber;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $subscriber = Subscriber::orderBy('id','DESC')->paginate(config('blog.posts_per_page'));
        return view('admin.subscriber.index',compact('subscriber'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscriber.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  SubscriberCreateRequest  $request
     * @return Response
     */
    public function store(SubscriberCreateRequest $request)
    {
        Subscriber::create($request->all());

        return redirect()->route('admin.subscriber.index')
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
        $subscriber = Subscriber::find($id);
        return view('admin.subscriber.show',compact('subscriber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscriber = Subscriber::find($id);
        return view('admin.subscriber.edit',compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriberUpdateRequest $request, $id)
    {
        Subscriber::find($id)->update($request->all());

        return redirect()->route('admin.subscriber.index')
                        ->with('success','Subscriber updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subscriber::find($id)->delete();
        return redirect()->route('admin.subscriber.index')
                        ->with('success','Subscriber deleted successfully');
    }
}
