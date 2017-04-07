@extends('layouts.front')

@section('content')
  <div class="container">
    <h5>Page {{ $items->currentPage() }} of {{ $items->lastPage() }}</h5>
    <hr>
    <ul>
      @foreach ($items as $item)
        <li>
          <a href="{{ config('blog.prefix_url') }}item/{{ $item->id }}">{{ $item->name }}</a>
          <p>
            {{ str_limit($item->description) }}
          </p>
        </li>
      @endforeach
    </ul>
    <hr>
    {!! $items->render() !!}
  </div>
@endsection
