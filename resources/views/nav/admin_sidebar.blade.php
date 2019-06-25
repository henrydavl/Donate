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
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button">
                        <i class="fas fa-cog"></i>&nbsp;<span>Components</span>
                    </a>
                    <div class="collapse" id="collapse-1">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">CUSTOM COMPONENTS:</h6>
                            <a class="collapse-item" href="buttons.html">Buttons</a>
                            <a class="collapse-item" href="cards.html">Cards</a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button">
                        <i class="fas fa-wrench"></i>&nbsp;<span>Utilities</span>
                    </a>
                    <div class="collapse" id="collapse-2">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">CUSTOM UTILITIES:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                <p class="mb-0">Addons</p>
            </div>
            <li class="nav-item" role="presentation">
                <div>
                    <a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-3" href="#collapse-3" role="button">
                        <i class="fas fa-folder"></i>&nbsp;<span>Pages</span>
                    </a>
                    <div class="collapse" id="collapse-3">
                        <div class="bg-white border rounded py-2 collapse-inner">
                            <h6 class="collapse-header">LOGIN SCREENS:</h6>
                            <a class="collapse-item" href="login.html">Login</a>
                            <a class="collapse-item" href="register.html">Register</a>
                            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                            <h6 class="collapse-header">OTHER PAGES:</h6>
                            <a class="collapse-item" href="404.html">404 Page</a>
                            <a class="collapse-item" href="blank.html">Blank Page</a>
                        </div>
                    </div>
                </div>
                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" aria-controls="collapsePages">
                    <div class="bg-white border rounded py-2 collapse-inner">
                        <h6 class="collapse-header">LOGIN SCREENS:</h6>
                        <a class="collapse-item" href="#">Login</a>
                        <a class="collapse-item" href="#">Register</a>
                        <a class="collapse-item" href="#">Forgot Password</a>
                        <h6 class="collapse-header">OTHER PAGES:</h6>
                        <a class="collapse-item" href="#">404 Page</a>
                        <a class="collapse-item" href="#">Blank Page</a>
                    </div>
                </div>
            </li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="charts.html"><i class="fas fa-chart-area"></i><span>&nbsp;Charts</span></a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="tables.html"><i class="fas fa-table"></i><span>&nbsp;Tables</span></a></li>
            <hr class="sidebar-divider">
        </ul>
        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
    </div>
</nav>