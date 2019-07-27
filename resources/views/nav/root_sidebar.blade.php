<nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <div class="sidebar-heading">
            <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon"><img src="{{asset('images/donate.png')}}" class="img-fluid" height="80"></div>
            </a>
        </div>
        <ul class="nav navbar-nav text-light" id="accordionSidebar">
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='dash') active @endif" href="{{route('root')}}"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='trans') active @endif" href="{{ route('transactions.index') }}"><i class="fas fa-exchange-alt"></i><span>&nbsp;Transaction</span></a>
            </li>
            <li class="nav-item">
                <a class="btn btn-link nav-link @if($pages=='ulist' || $pages=='uadd') active @endif" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">
                    <i class="fas fa-users-cog"></i>&nbsp;<span>Manage User</span>
                </a>
                <div class="collapse @if($pages=='ulist' || $pages=='uadd') show @endif" id="collapse-1">
                    <div class="bg-white border rounded py-2 collapse-inner">
                        <a class="collapse-item @if($pages=='ulist') active @endif" href="{{ route('users.index') }}">User List</a>
                        <a class="collapse-item @if($pages=='uadd') active @endif" href="{{ route('users.create') }}">Add User</a>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <a class="btn btn-link nav-link @if($pages=='utdlist' || $pages=='utdadd') active @endif" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">
                    <i class="fas fa-hospital-alt"></i>&nbsp;<span>Manage UTD</span>
                </a>
                <div class="collapse @if($pages=='utdlist' || $pages=='utdadd') show @endif" id="collapse-2">
                    <div class="bg-white border rounded py-2 collapse-inner">
                        <a class="collapse-item @if($pages=='utdlist') active @endif" href="{{ route('utd.index') }}">UTD List</a>
                        <a class="collapse-item @if($pages=='utdadd') active @endif" href="{{ route('utd.create') }}">Add UTD</a>
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
                            <a class="collapse-item @if($pages=='mblist') active @endif" href="{{ route('mobileunits.index') }}">Event List</a>
                            <a class="collapse-item @if($pages=='mbadd') active @endif" href="{{ route('mobileunits.create') }}">Add New Schedule</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link @if($pages=='mitlist' || $pages=='mitadd') active @endif" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button">
                        <i class="fas fa-handshake"></i>&nbsp;<span>Manage Mitra</span>
                    </a>
                    <div class="collapse @if($pages=='mitlist' || $pages=='mitadd') show @endif" id="collapse-4">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item @if($pages=='mitlist') active @endif" href="{{ route('mitra.index') }}">Mitra List</a>
                            <a class="collapse-item @if($pages=='mitadd') active @endif" href="{{ route('mitra.create') }}">Add Mitra</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='vcr') active @endif" href="{{ route('voucher.index') }}"><i class="fas fa-ticket-alt"></i><span>&nbsp;Manage Voucher</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='cast') active @endif" href="{{ route('broadcast.index') }}"><i class="fas fa-bullhorn"></i><span>&nbsp;Broadcast Message</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link @if($pages=='blog') active @endif" href="{{ route('blog.index') }}"><i class="fas fa-rss"></i><span>&nbsp;Blog</span></a>
            </li>
            <hr class="sidebar-divider">
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>