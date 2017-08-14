<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TagCreateRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Tag;

class TagController extends Controller
{
    protected $fields = [
        'tag' => '',
        'title' => '',
        'subtitle' => '',
        'meta_description' => '',
        'reverse_direction' => 0,
      ];
    /**
     * Display a listing of the tags.
     */
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tag.index')
                ->withTags($tags);
    }

    /**
     * Show form for creating new tag
     */
    public function create()
    {
        $data = [];
        foreach ($this->fields as $field => $default) {
        $data[$field] = old($field, $default);
        }

        return view('admin.tag.create', $data);
    }

    /**
     * Store the newly created tag in the database.
     *
     * @param TagCreateRequest $request
     * @return Response
     */
    public function store(TagCreateRequest $request)
    {
        Tag::create($request->all());
        $tag = $request->get('tag');

        return redirect('/admin/tag')
            ->withSuccess("Input data tag '$tag' berhasil.");
    }

    /**
     * Show the form for editing a tag
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        $data = ['id' => $id];
        foreach (array_keys($this->fields) as $field) {
            $data[$field] = old($field, $tag->$field);
        }

        return view('admin.tag.edit', $data);
    }

    /**
     * Update the tag in storage
     *
     * @param TagUpdateRequest $request
     * @param int  $id
     * @return Response
     */
    public function update(TagUpdateRequest $request, $id)
    {
        Tag::findOrFail($id)->update($request->all());

        return redirect("/admin/tag/$id/edit")
            ->withSuccess("Update data berhasil.");
    }

    /**
     * Delete the tag
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect('/admin/tag')
          ->withSuccess("Tag '$tag->tag' berhasil dihapus.");
    }
}
