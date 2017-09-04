<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="196x196" href="{{ asset('images/favicon-192.png') }}">
    <link rel="icon" type="image/png" sizes="160x160" href="{{ asset('images/favicon-160.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon-96.png') }}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{ asset('images/favicon-64.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon-16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon-57.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/favicon-114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/favicon-72.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('images/favicon-144.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('images/favicon-60.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/favicon-120.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon-76.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/favicon-152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon-180.png') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{ asset('images/favicon-144.png') }}">
    <meta name="msapplication-config" content="{{ asset('images/browserconfig.xml') }}">

  <title>{{ config('blog.title') }} ADMIN</title>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <link rel="stylesheet" href="{{ asset('css/imajiku-customs.css') }}">
  <link href="{{ asset('css/selectize.default.css') }}" rel="stylesheet">
  <link href="{{ asset('css/selectize.bootstrap3.css') }}" rel="stylesheet">
  @yield('styles')

  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

{{-- Navigation Bar --}}
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#navbar-menu">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin.post.index') }}">{{ config('blog.title') }} ADMIN</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-menu">
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li><a href="{{ config('blog.prefix_url') }}login">Login</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                 aria-expanded="false">{{ Auth::user()->name }}
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ config('blog.prefix_url') }}logout">Logout</a></li>
              </ul>
            </li>
          @endif
      </ul>
    </div>
  </div>
</nav>
<div class="col-md-3 menu-bar">
    @include('admin.partials.navbar')
</div>
<div class="col-md-9">
    @yield('content')
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script src="{{ asset('js/selectize.js') }}"></script>
<script>
  $(function() {
    $( "#publish_date" ).datepicker();
    $( "#start_date" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#end_date" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $("#publish_time").timepicker({});
    $("#category").selectize({
      create: true
    });
    $("#area").selectize({
      create: true
    });
    $("#drink").selectize({
      create: true
    });
    $("#condiment").selectize({
      create: true
    });
  });
  $(document).on("click", ".delete-confirm", function () {
     var itemID = $(this).data("id");
     $(".modal-footer #deleteForm").attr("action", `${itemID}`);
  });
  $(document).on('click', '.mega-dropdown', function(e) {
    e.stopPropagation()
  });

  //@param integer var nmmber not null
  //@param string var elementID nullable
  function formattingNumber(number, elementID) {
      var newNumber = number.toString().split(".").join("");
      var formatted = new Intl.NumberFormat(['ban', 'id']).format(Number(newNumber));
      document.getElementById(elementID).value = formatted;
      return formatted;
  }
</script>
@yield('scripts')

</body>
</html>
