<ul class="nav nav-pills nav-stacked">
  @if (Auth::check())
  <li
    @if (
     Request::is('admin/upload*') ||
     Request::is('admin/promotions*') || Request::is('admin/sliders*')
     )
    class="dropdown active"
    @else class="dropdown"
    @endif
  >
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"

    >CONTENTS <span class="caret pull-right"></span></a>
    <ul class="dropdown-menu col-sm-12">
      @permission('upload-list')
      <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="{{ config('blog.prefix_url') }}admin/upload">Uploads</a>
      </li>
      @endpermission
      @permission('promotions-list')
      <li @if (Request::is('admin/promotions*')) class="active" @endif>
      <a href="{{ route('admin.promotions.index') }}">Promotions</a>
      </li>
      @endpermission
      @permission('sliders-list')
      <li @if (Request::is('admin/sliders*')) class="active" @endif>
      <a href="{{ route('admin.sliders.index') }}">Sliders</a>
      </li>
      @endpermission
    </ul>
  </li>
  <li
    @if (
     Request::is('admin/upload*') ||
     Request::is('admin/promotions*') || Request::is('admin/sliders*')
     )
    class="dropdown active"
    @else class="dropdown"
    @endif
  >
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"

    >HALAMAN <span class="caret pull-right"></span></a>
    <ul class="dropdown-menu col-sm-12">
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">About US</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">FAQ</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">Promo</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">How to order</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">Contact Us</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">Disclaimer</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">Privacy Policy</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">Term of Use</a>
      </li>
      @endpermission
    </ul>
  </li>
  <li
    @if (Request::is('admin/items*') ||
     Request::is('admin/categories*')) class="dropdown active"
    @else class="dropdown"
    @endif
  >
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"

    >PRODUCT <span class="caret pull-right"></span></a>
    <ul class="dropdown-menu col-sm-12">
      @permission('items-list')
      <li @if (Request::is('admin/items*')) class="active" @endif>
      <a href="{{ route('admin.items.index') }}">Data Item</a>
      </li>
      @endpermission
      @permission('package-list')
      <li @if (Request::is('admin/package*')) class="active" @endif>
      <a href="{{ route('admin.package.index') }}">Data Paket</a>
      </li>
      @endpermission
      @permission('package-list')
      <li @if (Request::is('admin/package*')) class="active" @endif>
      <a href="{{ route('admin.package.index') }}">Item/Paket Aprovment</a>
      </li>
      @endpermission
      @permission('categories-list')
      <li @if (Request::is('admin/categories*')) class="active" @endif>
      <a href="{{ route('admin.categories.index') }}">Kategori Jenis</a>
      </li>
      @endpermission
      @permission('categories-list')
      <li @if (Request::is('admin/categories*')) class="active" @endif>
      <a href="{{ route('admin.categories.index') }}">Kategori Area</a>
      </li>
      @endpermission
      @permission('categories-list')
      <li @if (Request::is('admin/categories*')) class="active" @endif>
      <a href="{{ route('admin.categories.index') }}">Kupon</a>
      </li>
      @endpermission
      @permission('categories-list')
      <li @if (Request::is('admin/categories*')) class="active" @endif>
      <a href="{{ route('admin.categories.index') }}">Set Kategori Homepage</a>
      </li>
      @endpermission
    </ul>
  </li>
  <li @if (
      Request::is('admin/carts*') || Request::is('admin/couriers*')
      || Request::is('admin/deliveries*') || Request::is('admin/delivery_trackings*')
      || Request::is('admin/payments*') || Request::is('admin/shipping_costs*')
      || Request::is('admin/orders*') || Request::is('admin/order_details*')
    ) class="dropdown active"
    @else class="dropdown"
    @endif
  >
    <a href="#" class="dropdown-toggle"
      data-toggle="dropdown">TRANSACTIONS <span class="caret pull-right"></span></a>
    <ul class="dropdown-menu col-sm-12">
          @permission('payments-list')
          <li @if (Request::is('admin/payments*')) class="active" @endif>
            <a href="{{ route('admin.payments.index') }}">Data Konfirmasi Pembayaran</a>
          </li>
          @endpermission
          @permission('couriers-list')
          <li @if (Request::is('admin/couriers*')) class="active" @endif>
          <a href="{{ route('admin.couriers.index') }}">Data Kurir</a>
          </li>
          @endpermission
          @permission('deliveries-list')
          <li @if (Request::is('admin/deliveries*')) class="active" @endif>
          <a href="{{ route('admin.deliveries.index') }}">Data Pengiriman</a>
          </li>
          @endpermission
          @permission('delivery_trackings-list')
          <li @if (Request::is('admin/delivery_trackings*')) class="active" @endif>
          <a href="{{ route('admin.delivery_trackings.index') }}">Data Tracking Pengiriman</a>
          </li>
          @endpermission
          @permission('shipping_costs-list')
          <li @if (Request::is('admin/shipping_costs*')) class="active" @endif>
          <a href="{{ route('admin.shipping_costs.index') }}">Shipping Costs</a>
          </li>
          @endpermission
          @permission('orders-list')
          <li @if (Request::is('admin/orders*')) class="active" @endif>
          <a href="{{ route('admin.orders.index') }}">Data Order</a>
          </li>
          @endpermission
          @permission('order_details-list')
          <li @if (Request::is('admin/order_details*')) class="active" @endif>
          <a href="{{ route('admin.order_details.index') }}">Data Order Detail</a>
          </li>
          @endpermission
      </ul>
  </li>
  <li @if (
    Request::is('admin/users*') || Request::is('admin/members*')
    || Request::is('admin/permissions*') || Request::is('admin/roles*')
    || Request::is('admin/sessions*')
  ) class="dropdown active"
  @else
    class="dropdown"
  @endif>
      <a href="#" data-toggle="dropdown" class="dropdown-toggle"
       data-toggle="dropdown">ACCOUNTS <span class="caret pull-right"></span></a>
      <ul class="dropdown-menu col-sm-12">
            @permission('users-list')
            <li @if (Request::is('admin/users*')) class="active" @endif>
            <a href="{{ route('admin.users.index') }}">Users</a>
            </li>
            @endpermission
            @permission('members-list')
            <li @if (Request::is('admin/members*')) class="active" @endif>
            <a href="{{ route('admin.members.index') }}">List Member</a>
            </li>
            @endpermission
            @permission('permissions-list')
            <li @if (Request::is('admin/permissions*')) class="active" @endif>
            <a href="{{ route('admin.permissions.index') }}">List Permissions</a>
            </li>
            @endpermission
            @permission('role-list')
            <li @if (Request::is('admin/roles*')) class="active" @endif>
            <a href="{{ route('admin.roles.index') }}">List Roles</a>
            </li>
            @endpermission
            @permission('sessions-list')
            <li @if (Request::is('admin/sessions*')) class="active" @endif>
            <a href="{{ route('admin.sessions.index') }}">List Sessions</a>
            </li>
            @endpermission
    </ul>
  </li>
  @endif
</ul>
