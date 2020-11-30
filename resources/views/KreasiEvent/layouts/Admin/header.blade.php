<header class="main-header">
    <a href="index2.html" class="logo">
      <span class="logo-mini"><b>EO</b></span>
      <span class="logo-lg"><b>Admin</b>EO</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('assets/img/avatar5.png')}}" class="user-image" alt="User Image">
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{asset('assets/img/avatar5.png')}}" class="img-circle" alt="User Image">
                <p>Alexander Pierce - Admin</p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Sign Out
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
</header>