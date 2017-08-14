<ul class="nav navbar-nav">
  @if (Auth::check())
  <li class="dropdown mega-dropdown">
    <a href="#" data-toggle="dropdown"
       @if (Request::is('admin/post*') || Request::is('admin/tag*') ||
        Request::is('admin/upload*') || Request::is('admin/items*') ||
        Request::is('admin/item-images*') || Request::is('admin/products*') ||
        Request::is('admin/product_images*') || Request::is('admin/pages*') ||
        Request::is('admin/page_images*') || Request::is('admin/page_fields*') ||
        Request::is('admin/promotions*') || Request::is('admin/sliders*') ||
        Request::is('admin/categories*')) class="dropdown-toggle active-dropdown"
       @else class="dropdown-toggle"
       @endif
    >CONTENTS <span class="caret"></span></a>
    <ul class="dropdown-menu mega-dropdown-menu row contents">
      <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">News & Media</li>
            @permission('post-list')
            <li @if (Request::is('admin/post*')) class="active-child" @endif>
              <a href="{{ config('blog.prefix_url') }}admin/post">Posts</a>
            </li>
            @endpermission
            @permission('tag-list')
            <li @if (Request::is('admin/tag*')) class="active-child" @endif>
              <a href="{{ config('blog.prefix_url') }}admin/tag">Tags</a>
            </li>
            @endpermission
            @permission('upload-list')
            <li @if (Request::is('admin/upload*')) class="active-child" @endif>
              <a href="{{ config('blog.prefix_url') }}admin/upload">Uploads</a>
            </li>
            @endpermission
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Products</li>
          @permission('items-list')
          <li @if (Request::is('admin/items*')) class="active-child" @endif>
              <a href="{{ route('admin.items.index') }}">Items</a>
          </li>
          @endpermission
          <li @if (Request::is('admin/categories*')) class="active-child" @endif>
            <a href="/admin/categories">Categories</a>
          </li>
          @permission('item_images-list')
          <li @if (Request::is('admin/item-images*')) class="active-child" @endif>
              <a href="{{ route('admin.item_images.index') }}">Item Images</a>
          </li>
          @endpermission
          @permission('products-list')
          <li @if (Request::is('admin/products*')) class="active-child" @endif>
              <a href="{{ route('admin.products.index') }}">Products</a>
          </li>
          @endpermission
          @permission('product_images-list')
          <li @if (Request::is('admin/product_images*')) class="active-child" @endif>
              <a href="{{ route('admin.product_images.index') }}">Product Images</a>
          </li>
          @endpermission
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Pages</li>
          @permission('pages-list')
          <li @if (Request::is('admin/pages*')) class="active-child" @endif>
              <a href="{{ route('admin.pages.index') }}">Pages</a>
          </li>
          @endpermission
          @permission('page_images-list')
          <li @if (Request::is('admin/page_images*')) class="active-child" @endif>
              <a href="{{ route('admin.page_images.index') }}">Page Images</a>
          </li>
          @endpermission
          @permission('page_fields-list')
          <li @if (Request::is('admin/page_fields*')) class="active-child" @endif>
              <a href="{{ route('admin.page_fields.index') }}">Page Fields</a>
          </li>
          @endpermission
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Static Pages</li>
          @permission('promotions-list')
          <li @if (Request::is('admin/promotions*')) class="active-child" @endif>
              <a href="{{ route('admin.promotions.index') }}">Promotions</a>
          </li>
          @endpermission
          @permission('sliders-list')
          <li @if (Request::is('admin/sliders*')) class="active-child" @endif>
              <a href="{{ route('admin.sliders.index') }}">Sliders</a>
          </li>
          @endpermission
        </ul>
      </li>
    </ul>
  </li>
  <li class="dropdown mega-dropdown">
    <a href="#"
      @if (
        Request::is('admin/carts*') || Request::is('admin/couriers*')
        || Request::is('admin/deliveries*') || Request::is('admin/delivery_trackings*')
        || Request::is('admin/payments*') || Request::is('admin/shipping_costs*')
        || Request::is('admin/orders*') || Request::is('admin/order_details*')
      ) class="dropdown-toggle active-dropdown"
      @else class="dropdown-toggle"
      @endif
      data-toggle="dropdown">TRANSACTIONS <span class="caret"></span></a>
    <ul class="dropdown-menu mega-dropdown-menu row transactions">
      <li class="col-sm-3">
        <ul>
            <li class="dropdown-header">Payments</li>
            @permission('payments-list')
            <li @if (Request::is('admin/payments*')) class="active-child" @endif>
                <a href="{{ route('admin.payments.index') }}">Payments</a>
            </li>
            @endpermission
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
          @permission('shipping_costs-list')
          <li @if (Request::is('admin/shipping_costs*')) class="active-child" @endif>
              <a href="{{ route('admin.shipping_costs.index') }}">Shipping Costs</a>
          </li>
          @endpermission
        </ul>
      </li>
      <li class="col-sm-3">
        <ul>
          <li class="dropdown-header">Orders</li>
          @permission('orders-list')
          <li @if (Request::is('admin/orders*')) class="active-child" @endif>
              <a href="{{ route('admin.orders.index') }}">Data Order</a>
          </li>
          @endpermission
          @permission('order_details-list')
          <li @if (Request::is('admin/order_details*')) class="active-child" @endif>
              <a href="{{ route('admin.order_details.index') }}">Data Order Detail</a>
          </li>
          @endpermission
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
      <a href="#"
        @if (
          Request::is('admin/users*') || Request::is('admin/members*')
          || Request::is('admin/permissions*') || Request::is('admin/roles*')
          || Request::is('admin/sessions*')
        ) class="dropdown-toggle active-dropdown"
        @else class="dropdown-toggle"
        @endif
       data-toggle="dropdown">ACCOUNTS <span class="caret"></span></a>
      <ul class="dropdown-menu mega-dropdown-menu row accounts">
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Accounts Manager</li>
            @permission('users-list')
            <li @if (Request::is('admin/users*')) class="active-child" @endif>
              <a href="{{ route('admin.users.index') }}">Users</a>
            </li>
            @endpermission
            @permission('members-list')
            <li @if (Request::is('admin/members*')) class="active-child" @endif>
                <a href="{{ route('admin.members.index') }}">List Member</a>
            </li>
            @endpermission
          </ul>
        </li>
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">Accounts Permissions</li>
            @permission('permissions-list')
            <li @if (Request::is('admin/permissions*')) class="active-child" @endif>
                <a href="{{ route('admin.permissions.index') }}">List Permissions</a>
            </li>
            @endpermission
            @permission('role-list')
            <li @if (Request::is('admin/roles*')) class="active-child" @endif>
                <a href="{{ route('admin.roles.index') }}">List Roles</a>
            </li>
            @endpermission
          </ul>
        </li>
        <li class="col-sm-3">
          <ul>
            <li class="dropdown-header">User Activities</li>
            @permission('sessions-list')
            <li @if (Request::is('admin/sessions*')) class="active-child" @endif>
                <a href="{{ route('admin.sessions.index') }}">List Sessions</a>
            </li>
            @endpermission
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
