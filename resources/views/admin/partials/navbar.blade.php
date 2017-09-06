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
      @permission('subscriber-list')
      <li @if (Request::is('admin/subscriber*')) class="active" @endif>
      <a href="{{ route('admin.subscriber.index') }}">Subscriber</a>
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
     Request::is('admin/about*') || Request::is('admin/faq*') ||
     Request::is('admin/promo*') || Request::is('admin/how_to_order*') ||
     Request::is('admin/contact_info*') || Request::is('admin/contact_message*') ||
     Request::is('admin/privacy*') || Request::is('admin/term*') ||
     Request::is('admin/categoryfaq*') || Request::is('admin/categoryhow*') ||
     Request::is('admin/disclaimer*')
     )
    class="dropdown active"
    @else class="dropdown"
    @endif
  >
    <a href="#" data-toggle="dropdown" class="dropdown-toggle"

    >HALAMAN <span class="caret pull-right"></span></a>
    <ul class="dropdown-menu col-sm-12">
      @permission('about-list')
      <li @if (Request::is('admin/about*')) class="active" @endif>
      <a href="{{ route('admin.about.index') }}">About US</a>
      </li>
      @endpermission
      @permission('faq_category-list')
      <li @if (Request::is('admin/categoryfaq*')) class="active" @endif>
      <a href="{{ route('admin.faq_category.index') }}">FAQ Kategori</a>
      </li>
      @endpermission
      @permission('faq-list')
      <li @if (Request::is('admin/faq*')) class="active" @endif>
      <a href="{{ route('admin.faq.index') }}">FAQ</a>
      </li>
      @endpermission
      @permission('promo-list')
      <li @if (Request::is('admin/promo*')) class="active" @endif>
      <a href="{{ route('admin.promo.index') }}">Promo</a>
      </li>
      @endpermission
      @permission('categoryhow-list')
      <li @if (Request::is('admin/categoryhow*')) class="active" @endif>
      <a href="{{ route('admin.categoryhow.index') }}">How to order Kategori</a>
      </li>
      @endpermission
      @permission('how_to_order-list')
      <li @if (Request::is('admin/how_to_order*')) class="active" @endif>
      <a href="{{ route('admin.how_to_order.index') }}">How to order</a>
      </li>
      @endpermission
      @permission('contact_info-list')
      <li @if (Request::is('admin/contact_info*')) class="active" @endif>
      <a href="{{ route('admin.contact_info.index') }}">Contact Info</a>
      </li>
      @endpermission
      @permission('contact_message-list')
      <li @if (Request::is('admin/contact_message*')) class="active" @endif>
      <a href="{{ route('admin.contact_message.index') }}">Contact Message</a>
      </li>
      @endpermission
      @permission('disclaimer-list')
      <li @if (Request::is('admin/disclaimer*')) class="active" @endif>
      <a href="{{ route('admin.disclaimer.index') }}">Disclaimer</a>
      </li>
      @endpermission
      @permission('privacy-list')
      <li @if (Request::is('admin/privacy*')) class="active" @endif>
      <a href="{{ route('admin.privacy.index') }}">Privacy Policy</a>
      </li>
      @endpermission
      @permission('term-list')
      <li @if (Request::is('admin/term*')) class="active" @endif>
      <a href="{{ route('admin.term.index') }}">Term of Use</a>
      </li>
      @endpermission
    </ul>
  </li>
  <li
    @if (Request::is('admin/items*') || Request::is('admin/coupon*') ||
        Request::is('admin/package*') || Request::is('admin/approve*') ||
        Request::is('admin/region*') || Request::is('admin/selected_category*') ||
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
      @permission('approve-list')
      <li @if (Request::is('admin/approve*')) class="active" @endif>
      <a href="{{ route('admin.approve.list') }}">Item/Paket Aprovement</a>
      </li>
      @endpermission
      @permission('categories-list')
      <li @if (Request::is('admin/categories*')) class="active" @endif>
      <a href="{{ route('admin.categories.index') }}">Kategori Jenis</a>
      </li>
      @endpermission
      @permission('region-list')
      <li @if (Request::is('admin/region*')) class="active" @endif>
      <a href="{{ route('admin.region.index') }}">Kategori Area</a>
      </li>
      @endpermission
      @permission('coupon-list')
      <li @if (Request::is('admin/coupon*')) class="active" @endif>
      <a href="{{ route('admin.coupon.index') }}">Kupon</a>
      </li>
      @endpermission
      @permission('categories-list')
      <li @if (Request::is('admin/selected_category*')) class="active" @endif>
      <a href="{{ route('admin.selected_category.index') }}">Pilih Kategori Homepage</a>
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
