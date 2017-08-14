@extends('layouts.front')

@section('content')
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
         
            <div class="item active">
                <img src="{{ asset('uploads/sliders/image-slider.jpg') }}" alt="Life is Jokes!" class="img-responsive" style="margin: 0 auto;">
                    <div class="carousel-caption">
                        <h3>Foody!</h3>
                        <p>Life is eat!</p>
                    </div>
            </div>

            <div class="item">
                <img src="{{ asset('uploads/sliders/image-slider.jpg') }}" alt="Life is Jokes!" class="img-responsive" style="margin: 0 auto;">
                    <div class="carousel-caption">
                        <h3>Foody!</h3>
                        <p>Life is eat!</p>
                    </div>
            </div>

            <div class="item">
                <img src="{{ asset('uploads/sliders/image-slider.jpg') }}" alt="Life is Jokes!" class="img-responsive" style="margin: 0 auto;">
                    <div class="carousel-caption">
                        <h3>Foody!</h3>
                        <p>Life is eat!</p>
                    </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
    <hr>
    <form class="form-inline">
      <div class="form-group">
        <label for="exampleInputName2">Sort By</label>
        <select class="form-control">
          <option>Price Low To Hight</option>
          <option>Price Hight To Low</option>
        </select>
      </div><div class="form-group">
        <label for="exampleInputName2">Category</label>
        <select class="form-control">
          <option>Karbohidrate</option>
          <option>Sayuran</option>
        </select>
      </div><div class="form-group">
        <label for="exampleInputName2">Negara</label>
        <select class="form-control">
          <option>Indonesia</option>
          <option>Italia</option>
          <option>Perancis</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">View All</button>
    </form>
    <hr>
    <h5>Page {{ $items->currentPage() }} of {{ $items->lastPage() }}</h5>
    <hr>
    <ul>
        @php
            $catID = 0;
        @endphp
        @foreach ($items as $item)
            @if ($catID != $item->catID)
                <hr><h3>{{ $item->catName }}</h3>
                @php
                    $catID = $item->catID;
                @endphp
            @endif
            <li>
                <a href="{{ config('blog.prefix_url') }}item/{{ $item->id }}">{{ $item->name }}</a>
                <p>
                <img src="{{ asset('uploads/items') }}/{{ $item->imgName }}" height="45" width="80">
                <br>
                {{ str_limit($item->description) }}
                </p>
            </li>
        @endforeach
    </ul>
    <hr>
{!! $items->render() !!}
</div>
@endsection
