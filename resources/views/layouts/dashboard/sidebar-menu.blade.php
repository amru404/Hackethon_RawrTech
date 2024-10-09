  <!-- menu profile quick info -->
  <div class="profile clearfix">
      <div class="profile_pic">
          <img src="images/img.jpg" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
          <span>Welcome,</span>
          <h2> {{ Auth::user()->name }}</h2>
      </div>
  </div>
  <!-- /menu profile quick info -->

  @if (Auth::user()->role === 'admin')
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            

            <li><a href="{{route('admin.product')}}">
            <i class="fa-regular fa-user"></i> User</a>
            </li>

            <li><a href="{{route('admin.product')}}">
            <i class="fa-solid fa-tree"></i> Product</a>
            </li>

            <li><a href="{{route('admin.ticket')}}">
            <i class="fa-solid fa-ticket"></i> Ticket</a>
            </li>

            <li><a href="{{route('admin.order')}}">
            <i class="fa-solid fa-cart-shopping"></i> Order</a>
            </li>

            <li><a href="{{route('admin.transaksi')}}">
            <i class="fa-solid fa-money-bills"></i> Transaksi</a>
            </li>

          </ul>
      </div>

  </div>
  @endif

  <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
          <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
          <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
          <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
          <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
  </div>
