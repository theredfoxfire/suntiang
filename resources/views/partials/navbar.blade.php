<nav class="navbar navbar-default navbar-right" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <div class="navbar-header">
        <button id="btn-menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs-inline-block" href="home.html">
            <img class="img-responsive" src="{{ asset('images/logo-suntiang.png') }}" alt="">
        </a>
        <ul class="list-inline nav-mobile text-right visible-xs-inline-block">
            <li class=""><a href="login.html"><span class="fa fa-sign-in"></span></a></li>
            <li class="dropdown nav-search">
                <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="fa fa-search"></span>
                </a>
                <div class="dropdown-menu sub-menu">
                    <div class="dropdown-content">
                        <form id="form-searchnav" class="form-horizontal form-default form-search" action="search.html">
                              <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" name="search" placeholder="Search for..." aria-label="search">
                                    <span class="input-group-btn">
                                          <button class="btn btn-default" type="submit"><span class="btn-yellow"><span class="fa fa-search"></span></span></button>
                                    </span>
                              </div>
                              <div class="text-help"><span>part of </span>suntiang.com</div>
                        </form>
                    </div>
                </div>
            </li>
            <li class="cart">
                <a href="cart.html">
                    <span class="img-wbubble">
                    <span class="icon icon-shopbag"></span>
                    <span class="bubble">9+</span>
                    </span>
                    <span class="hidden">Rp 1.950.000,-</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="main-menu">
        <ul class="nav navbar-nav">
            <li class="main-li "><a href="dm-prodlist.html">DAILY MEAL</a></li>
            <li class="main-li "><a href="catering.html">CATERING</a></li>
            <li class="main-li "><a href="snackbox.html">SNACK BOX</a></li>
            <li class=" hidden-xs"><a href="login.html">Login</a></li>
            <li class=""><a href="register.html">Register</a></li>
            <li class="cart hidden-xs">
                <a href="cart.html">
                <span class="img-wbubble">
                <span class="icon icon-shopbag"></span>
                <span class="bubble">9+</span>
                </span>
                <span>Rp 1.950.000,-</span>
                </a>
            </li>
            <li class="nav-search hidden-xs">
                <form id="form-searchnav" class="form-horizontal form-default form-search" action="search.html">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" name="search" placeholder="Search for..." aria-label="search">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit"><span class="btn-yellow"><span class="fa fa-search"></span></span></button>
                        </span>
                    </div>
                    <div class="text-help"><span>part of </span>suntiang.com</div>
                </form>
            </li>
            <li class="dropdown nav-search">
                <a class="dropdown-toggle hidden-xs" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <span class="fa fa-search"></span>
                </a>
                <div class="dropdown-menu sub-menu">
                    <div class="dropdown-content">
                        <form id="form-searchnav" class="form-horizontal form-default form-search" action="search.html">
                              <div class="input-group input-group-lg">
                                    <input type="text" class="form-control" name="search" placeholder="Search for..." aria-label="search">
                                    <span class="input-group-btn">
                                          <button class="btn btn-default" type="submit"><span class="btn-yellow"><span class="fa fa-search"></span></span></button>
                                    </span>
                              </div>
                              <div class="text-help"><span>part of </span>suntiang.com</div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
