<html>
<head>
  <title>{{ config('blog.title') }}</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
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
        <a class="navbar-brand" href="/">{{ config('blog.title') }}</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-menu">
        @include('partials.navbar')
      </div>
    </div>
  </nav>
  @yield('content')
    <footer>
        <div class="container">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/1" class="text-muted">About Us</a>
                </li>
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/2"  class="text-muted">FAQ</a>   
                </li>
                <li>
                    <a class="text-muted">Promo</a>   
                </li>
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/3" class="text-muted">How To Order</a>   
                </li>
                <li>
                    <a class="text-muted">Payment Confirmation</a>   
                </li>
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/4" href="/contact" class="text-muted">Contact US</a>   
                </li>
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/5" class="text-muted">Disclaimer</a>   
                </li>
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/6" class="text-muted">Privacy</a>   
                </li>
                <li>
                    <a href="{{ config('blog.prefix_url') }}page/7" class="text-muted">Term Of Use</a>   
                </li>
            </ul>
        </div>
    </footer>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
