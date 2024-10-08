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

 

  @if (Auth::user()->role === 'penjual')
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            

            <li><a href="{{route('penjual.product')}}">
                <i class="fa fa-laptop"></i>Products</a>
            </li>

            <li><a href="{{route('penjual.sales')}}">
                <i class="fa fa-laptop"></i>Orders</a>
            </li>

          </ul>
      </div>

  </div>
  @endif

  @if (Auth::user()->role === 'pembeli')
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
            

            <li><a href="{{route('pembeli.product')}}">
                <i class="fa fa-laptop"></i>Products</a>
            </li>

            <li><a href="{{route('pembeli.sales')}}">
                <i class="fa fa-laptop"></i>Orders</a>
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
