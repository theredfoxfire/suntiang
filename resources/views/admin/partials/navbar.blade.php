<ul class="nav navbar-nav">
  <li><a href="/" target="_blank">Blog Home</a></li>
  @if (Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="/admin/post">Posts</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="/admin/tag">Tags</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="/admin/upload">Uploads</a>
    </li>
    <li @if (Request::is('admin/users*')) class="active" @endif>
      <a href="{{ route('admin.users.index') }}">Users</a>
    </li>
    <li @if (Request::is('admin/roles*')) class="active" @endif>
        <a href="{{ route('admin.roles.index') }}">Roles</a>
    </li>
    <li @if (Request::is('admin/itemCRUD2*')) class="active" @endif>
        <a href="{{ route('admin.itemCRUD2.index') }}">Items</a>
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
