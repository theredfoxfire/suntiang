<ul class="nav navbar-nav">
  @if (Auth::check())
  <li class="dropdown mega-dropdown">
    <a href="#" data-toggle="dropdown"
       @if (Request::is('admin/post*') || Request::is('admin/tag*') ||
        Request::is('admin/upload*') || Request::is('admin/item*') ||
        Request::is('admin/categories*')) class="dropdown-toggle active-dropdown"
       @else class="dropdown-toggle"
       @endif
    >CONTENTS <span class="caret"></span></a>
    <ul class="dropdown-menu mega-dropdown-menu row contents">
      <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">News & Media</li>
            <li @if (Request::is('admin/post*')) class="active-child" @endif>
              <a href="/admin/post">Posts</a>
            </li>
            <li @if (Request::is('admin/tag*')) class="active-child" @endif>
              <a href="/admin/tag">Tags</a>
            </li>
            <li @if (Request::is('admin/upload*')) class="active-child" @endif>
              <a href="/admin/upload">Uploads</a>
            </li>
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Products</li>
          @if(Auth::user()->hasRole(['user-level-1', 'super-user']))
          <li @if (Request::is('admin/items*')) class="active-child" @endif>
              <a href="{{ route('admin.items.index') }}">Items</a>
          </li>
          @endif
          <li @if (Request::is('admin/categories*')) class="active-child" @endif>
            <a href="/admin/categories">Categories</a>
          </li>
          @permission('item_images-list')
          <li @if (Request::is('admin/item-images*')) class="active-child" @endif>
              <a href="{{ route('admin.item_images.index') }}">Item Images</a>
          </li>
          @endpermission
          <li class="divider"></li>
          <li class="dropdown-header">Tops</li>
          <li><a href="#">Good Typography</a></li>
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Jackets</li>
          <li><a href="#">Pull Right Elements</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Pants</li>
          <li><a href="#">Calls to action</a></li>
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Accessories</li>
          <li><a href="#">Responsive Dropdown </a></li>
        </ul>
      </li>
    </ul>
  </li>
  <li class="dropdown mega-dropdown">
    <a href="#"
      @if (
        Request::is('admin/carts*') || Request::is('admin/couriers*')
        || Request::is('admin/deliveries*') || Request::is('admin/delivery_trackings*')
      ) class="dropdown-toggle active-dropdown"
      @else class="dropdown-toggle"
      @endif
      data-toggle="dropdown">TRANSACTIONS <span class="caret"></span></a>
    <ul class="dropdown-menu mega-dropdown-menu row transactions">
      <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">Transactions</li>
            <li @if (Request::is('admin/carts*')) class="active-child" @endif>
              <a href="/admin/carts">Carts</a>
            </li>
            <li @if (Request::is('admin/tag*')) class="active" @endif>
              <a href="/admin/tag">Tags</a>
            </li>
            <li @if (Request::is('admin/upload*')) class="active" @endif>
              <a href="/admin/upload">Uploads</a>
            </li>
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Deliveries</li>
          @permission('couriers-list')
          <li @if (Request::is('admin/couriers*')) class="active-child" @endif>
              <a href="{{ route('admin.couriers.index') }}">Data Kurir</a>
          </li>
          @endpermission
          @permission('deliveries-list')
          <li @if (Request::is('admin/deliveries*')) class="active-child" @endif>
              <a href="{{ route('admin.deliveries.index') }}">Data Pengiriman</a>
          </li>
          @endpermission
          @permission('delivery_trackings-list')
          <li @if (Request::is('admin/delivery_trackings*')) class="active-child" @endif>
              <a href="{{ route('admin.delivery_trackings.index') }}">Data Tracking Pengiriman</a>
          </li>
          @endpermission
          <li class="divider"></li>
          <li class="dropdown-header">Tops</li>
          <li><a href="#">Good Typography</a></li>
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Jackets</li>
          <li><a href="#">Pull Right Elements</a></li>
          <li class="divider"></li>
          <li class="dropdown-header">Pants</li>
          <li><a href="#">Calls to action</a></li>
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Accessories</li>
          <li><a href="#">Responsive Dropdown </a></li>
        </ul>
      </li>
    </ul>
  </li>
    <!-- <li><a href="/" target="_blank">Blog Home</a></li> -->
  <li class="dropdown mega-dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNTS <span class="caret"></span></a>
      <ul class="dropdown-menu mega-dropdown-menu row accounts">
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">New in Stores</li>
            <li @if (Request::is('admin/users*')) class="active" @endif>
              <a href="{{ route('admin.users.index') }}">Users</a>
            </li>
            <li @if (Request::is('admin/roles*')) class="active" @endif>
                <a href="{{ route('admin.roles.index') }}">Roles</a>
            </li>
          </ul>
        </li>
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Dresses</li>
            <li><a href="#">Four columns</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Tops</li>
            <li><a href="#">Good Typography</a></li>
          </ul>
        </li>
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Jackets</li>
            <li><a href="#">Pull Right Elements</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Pants</li>
            <li><a href="#">Calls to action</a></li>
          </ul>
        </li>
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Accessories</li>
            <li><a href="#">Responsive Dropdown </a></li>
          </ul>
        </li>
    </ul>
  </li>
  @endif
</ul>
<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/login">Login</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false">{{ Auth::user()->name }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="/logout">Logout</a></li>
      </ul>
    </li>
  @endif
</ul>
