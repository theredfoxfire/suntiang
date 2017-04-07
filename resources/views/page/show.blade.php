@extends('layouts.front')

@section('content')
  <div class="container">
    <h1>{{ $page->name }}</h1>
    <button class="btn btn-primary" onclick="history.go(-1)">
      « Back
    </button>
  </div>
@endsection
