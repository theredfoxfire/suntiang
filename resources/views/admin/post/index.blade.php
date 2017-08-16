@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>Posts <small>» Listing</small></h3>
      </div>
      <div class="col-md-6 text-right">
        <a href="{{ config('blog.prefix_url') }}admin/post/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New Post
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('admin.partials.errors')
        @include('admin.partials.success')

        <table id="posts-table" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th class="col-md-4">Title</th>
              <th class="col-md-6">Subtitle</th>
              <th class="col-md-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->subtitle }}</td>
                <td>
                  <a href="{{ config('blog.prefix_url') }}admin/post/{{ $post->id }}/edit"
                     class="btn btn-xs btn-info">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                  <a href="{{ config('blog.prefix_url') }}blog/{{ $post->slug }}"
                     class="btn btn-xs btn-warning">
                    <i class="fa fa-eye"></i> View
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@stop
