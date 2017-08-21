<ul class="nav nav-pills nav-stacked">
  @if (Auth::check())
  <li
    @if (Request::is('admin/post*') || Request::is('admin/tag*') ||
     Request::is('admin/upload*') ||
     Request::is('admin/item-images*') || Request::is('admin/products*') ||
     Request::is('admin/product_images*') || Request::is('admin/pages*') ||
     Request::is('admin/page_images*') || Request::is('admin/page_fields*') ||
     Request::is('admin/promotions*') || Request::is('admin/sliders*'))
    class="dropdown active"
    @else class="dropdown"
    @endif
  >
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"

    >CONTENTS <span class="caret pull-right"></span></a>
    <ul class="dropdown-menu col-sm-12">
      @permission('post-list')
      <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="{{ config('blog.prefix_url') }}admin/post">Posts</a>
      </li>
      @endpermission
      @permission('tag-list')
      <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="{{ config('blog.prefix_url') }}admin/tag">Tags</a>
      </li>
      @endpermission
      @permission('upload-list')
      <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="{{ config('blog.prefix_url') }}admin/upload">Uploads</a>
      </li>
      @endpermission
      @permission('item_images-list')
      <li @if (Request::is('admin/item-images*')) class="active" @endif>
      <a href="{{ route('admin.item_images.index') }}">Item Images</a>
      </li>
      @endpermission
      @permission('products-list')
      <li @if (Request::is('admin/products*')) class="active" @endif>
      <a href="{{ route('admin.products.index') }}">Products</a>
      </li>
      @endpermission
      @permission('product_images-list')
      <li @if (Request::is('admin/product_images*')) class="active" @endif>
      <a href="{{ route('admin.product_images.index') }}">Product Images</a>
      </li>
      @endpermission
      @permission('pages-list')
      <li @if (Request::is('admin/pages*')) class="active" @endif>
      <a href="{{ route('admin.pages.index') }}">Pages</a>
      </li>
      @endpermission
      @permission('page_images-list')
      <li @if (Request::is('admin/page_images*')) class="active" @endif>
      <a href="{{ route('admin.page_images.index') }}">Page Images</a>
      </li>
      @endpermission
      @permission('page_fields-list')
      <li @if (Request::is('admin/page_fields*')) class="active" @endif>
      <a href="{{ route('admin.page_fields.index') }}">Page Fields</a>
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
      @permission('categories-list')
      <li @if (Request::is('admin/categories*')) class="active" @endif>
      <a href="{{ route('admin.categories.index') }}">Data Kategori</a>
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
            <a href="{{ route('admin.payments.index') }}">Payments</a>
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
