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
                <a class="nav-link active" href="#"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Transaction</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">
                        <i class="fas fa-cog"></i>&nbsp;<span>Manage User</span>
                    </a>
                    <div class="collapse" id="collapse-1">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item" href="#">Add New User</a>
                            <a class="collapse-item" href="#">User List</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">
                        <i class="fas fa-wrench"></i>&nbsp;<span>Manage UTD</span>
                    </a>
                    <div class="collapse" id="collapse-2">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item" href="#">UTD List</a>
                            <a class="collapse-item" href="#">Add UTD</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">
                        <i class="fas fa-wrench"></i>&nbsp;<span>Mobile Unit</span>
                    </a>
                    <div class="collapse" id="collapse-3">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item" href="#">Your Event List</a>
                            <a class="collapse-item" href="#">Add New Schedule</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-4" href="#collapse-4" role="button">
                        <i class="fas fa-wrench"></i>&nbsp;<span>Manage Mitra</span>
                    </a>
                    <div class="collapse" id="collapse-4">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <a class="collapse-item" href="#">Mitra List</a>
                            <a class="collapse-item" href="#">Add Mitra</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Manage Voucher</span></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#"><i class="fas fa-chart-area"></i><span>&nbsp;Broadcast Message</span></a>
            </li>
            <hr class="sidebar-divider">
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>