<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--[if IE 9]>
  <script src="js/polyfill.js"></script>
  <![endif]-->
  <!--[if gte IE 9]>
    <style type="text/css">
    .gradient {
      filter: none !important;
    }
    </style>
  <![endif]-->
  <!-- ****** favicons ****** -->
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
  <title>{{ config('blog.title') }}</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Damion">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.theme.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{ asset('css/lib.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <noscript>
    <div class="alert alert-danger">
      <span><strong>For full functionality of this site it is necessary to enable JavaScript. </strong> Here are the <a href="http://www.enable-javascript.com/" class="alert-link" target="_blank"> instructions how to enable JavaScript in your web browser</a>.</span>
    </div>
  </noscript>
  <header itemscope itemtype="https://schema.org/WPHeader">
    <div class="bg-header">
      @include('admin.partials.success')
      <div class="container">
        <div class="row">
          <div class="col-sm-2 col-md-2">
            <a id="logo" class="hidden-xs" href="{{ route('item.list') }}">
              <img class="img-responsive" src="{{ asset('images/logo-suntiang.png') }}" alt="">
            </a>
          </div>
          <div class="col-md-10 col-sm-10">
            @include('partials.navbar')
          </div>
        </div>
      </div>
    </div>
  </header>
  @yield('content')
  <footer itemscope itemtype="https://schema.org/WPFooter">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3 class="text-damion text-inline">Join Our Cooking Class</h3>
          <p>Be the next sushi chef!</p>
          <ul class="list-inline">
            <li><a target="_blank" href="#"><span class="fa fa-twitter"></span></a></li>
            <li><a target="_blank" href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <ul class="list-normal list-twocol clearfix">
            <li class=""><a href="{{ route('page.about') }}">About Us</a></li>
            <li class=""><a href="{{ route('page.how') }}">How to Order</a></li>
            <li class=""><a href="{{ route('page.faq') }}">FAQ</a></li>
            <li class=""><a href="{{ route('page.payment') }}">Payment Confirmation</a></li>
            <li class=""><a href="{{ route('page.promo') }}">Promo</a></li>
            <li class=""><a href="{{ route('contact') }}">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          {!! Form::open(array('class' => 'form-horizontal form-default', 'route' => 'page.subscriber','method'=>'POST')) !!}
            <div class="form-group">
              <label for="subscribe" class="control-label col-sm-12">Subscribe Our Newsletter</label>
              <div class="col-sm-12">
                <div class="input-group input-group-lg">
                  <input id="subscribe" type="text" class="form-control" name="email">
                  <span class="input-group-btn">
                    <button class="btn btn-default btn-flareshort" type="submit">SUBMIT</button>
                  </span>
                </div>
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <ul class="list-inline">
              <li><a href="{{ route('page.disclaimer') }}">Disclaimer</a></li>
              <li><a href="{{ route('page.privacy') }}">Privacy Policy</a></li>
              <li><a href="{{ route('page.tou') }}">Terms of Use</a></li>
            </ul>
          </div>
          <div class="col-sm-7 text-right">
            <p>&copy; 2017 Suntiang Kitchen All Rights Reserved. Developed by <a target="_blank" href="http://www.imajiku.com"><span class="icon logo-imajiku"></span></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
  <script src="{{ asset('js/lib.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
