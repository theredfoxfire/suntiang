@extends('layouts.front')

@section('content')
  <div class="container">
    <h1>{{ $item->name }}</h1>
    <hr>
    {!! nl2br(e($item->description)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
      « Back
    </button>
  </div>
@endsection
