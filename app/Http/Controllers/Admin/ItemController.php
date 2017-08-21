<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequest;
use App\Http\Requests\ItemUpdateRequest;
use App\Model\Item;
use App\Jobs\ItemFormFields;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = Item::orderBy('id','DESC')->where('type', 'item')->paginate(config('blog.posts_per_page'));
        return view('admin.item.index',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPackage(Request $request)
    {
        $items = Item::orderBy('id','DESC')->where('type', 'package')->paginate(config('blog.posts_per_page'));
        return view('admin.item.indexPackage',compact('items'))
            ->with('i', ($request->input('page', 1) - 1) * config('blog.posts_per_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->dispatch(new ItemFormFields());

        return view('admin.item.create', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPackage()
    {
        $data = $this->dispatch(new ItemFormFields());

        return view('admin.item.createPackage', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemCreateRequest $request)
    {
        $item = Item::create($request->fillItem());
        $item->syncTags($request->get('tags', []));

        return redirect()->route('admin.items.index')
                        ->with('success','Item created successfully');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storePackage(ItemCreateRequest $request)
    {
        $item = Item::create($request->fillPackage());
        $item->syncTags($request->get('tags', []));

        return redirect()->route('admin.package.index')
                        ->with('success','Package created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        return view('admin.item.show',compact('item'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showPackage($id)
    {
        $item = Item::find($id);
        return view('admin.item.showPackage',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->dispatch(new ItemFormFields($id));
        $item = Item::find($id);

        return view('admin.item.edit', compact('item', 'data'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPackage($id)
    {
        $data = $this->dispatch(new ItemFormFields($id));
        $item = Item::find($id);

        return view('admin.item.editPackage', compact('item', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ItemUpdateRequest $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->fillData());
        $item->syncTags($request->get('tags', []));

        return redirect()->route('admin.items.index')
                        ->with('success','Item updated successfully');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePackage(ItemUpdateRequest $request, $id)
    {
        $item = Item::find($id);
        $item->update($request->fillData());
        $item->syncTags($request->get('tags', []));

        return redirect()->route('admin.package.index')
                        ->with('success','Package updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id)->delete();
        return redirect()->route('admin.items.index')
                        ->with('success','Item deleted successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyPackage($id)
    {
        Item::find($id)->delete();
        return redirect()->route('admin.package.index')
                        ->with('success','Package deleted successfully');
    }
}
