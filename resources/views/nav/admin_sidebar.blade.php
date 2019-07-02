<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <div class="sidebar-heading">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon"><img src="{{asset('assets/img/logo.png')}}" class="img-fluid" width="60"></div>
                <div class="sidebar-brand-text"><span>donate</span></div>
            </a>
        </div>
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='dash') active @endif" href="{{route('admin')}}"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='trans') active @endif" href="{{ route('transaction.index') }}"><i class="fas fa-exchange-alt"></i><span>&nbsp;Transaction</span></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-link nav-link @if($pages=='ulist' || $pages=='uadd') active @endif" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">
                    <i class="fas fa-users-cog"></i>&nbsp;<span>Manage User</span>
                </a>
                <div class="collapse @if($pages=='ulist' || $pages=='uadd') show @endif" id="collapse-1">
                    <div class="bg-white border rounded py-2 collapse-inner">
                        <a class="collapse-item @if($pages=='ulist') active @endif" href="{{ route('user.index') }}">User List</a>
                        <a class="collapse-item @if($pages=='uadd') active @endif" href="{{ route('user.create') }}">Add User</a>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link @if($pages=='mblist' || $pages=='mbadd') active @endif" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">
                        <i class="fas fa-car"></i>&nbsp;<span>Mobile Unit</span>
                    </a>
                    <div class="collapse @if($pages=='mblist' || $pages=='mbadd') show @endif" id="collapse-3">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item @if($pages=='mblist') active @endif" href="{{ route('mobileunit.index') }}">Your Event List</a>
                            <a class="collapse-item @if($pages=='mbadd') active @endif" href="{{ route('mobileunit.create') }}">Add New Schedule</a>
                        </div>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>