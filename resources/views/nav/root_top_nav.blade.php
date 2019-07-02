<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
        <ul class="nav navbar-nav flex-nowrap ml-auto">
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow" role="presentation">
            <li class="nav-item dropdown no-arrow">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                    <span class="d-none d-lg-inline mr-2 text-gray-600 small">{{ Auth::user()->name }}</span>
                    <img class="border rounded-circle img-profile" src="{{\Illuminate\Support\Facades\Auth::user()->photoprofile ? asset('images/profile/'.\Illuminate\Support\Facades\Auth::user()->photoprofile) : 'http://placehold.it/400x400'}}"></a>
                <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                    <a class="dropdown-item" href="{{route('user.edit', \Illuminate\Support\Facades\Auth::id())}}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
            </li>
        </ul>
    </div>
</nav>