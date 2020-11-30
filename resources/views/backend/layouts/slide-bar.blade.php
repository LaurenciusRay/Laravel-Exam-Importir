<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="#"><img src="{{ asset('assets/img/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ Route('halaman-admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Table</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ Route('halaman-event') }}">Event</a></li>
                    <li><i class="fa fa-table"></i><a href="{{Route ('halaman-events1')}}">Events1</a>
                        <li><i class="fa fa-table"></i><a href="{{ Route('halaman-participant') }}">Participant User</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>
