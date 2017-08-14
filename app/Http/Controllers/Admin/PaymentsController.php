<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentsCreateRequest;
use App\Http\Requests\PaymentsUpdateRequest;
use App\Payments;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payments = Payments::orderBy('id','DESC')->paginate(15);
        return view('admin.payments.index',compact('payments'))
            ->with('i', ($request->input('page', 1) - 1) * 15);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  PaymentsCreateRequest  $request
     * @return Response
     */
    public function store(PaymentsCreateRequest $request)
    {
        Payments::create($request->all());

        return redirect()->route('admin.payments.index')
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
        $payments = Payments::find($id);
        return view('admin.payments.show',compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payments = Payments::find($id);
        return view('admin.payments.edit',compact('payments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PaymentsUpdateRequest $request, $id)
    {
        Payments::find($id)->update($request->all());

        return redirect()->route('admin.payments.index')
                        ->with('success','Payments updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Payments::find($id)->delete();
        return redirect()->route('admin.payments.index')
                        ->with('success','Payments deleted successfully');
    }
}
