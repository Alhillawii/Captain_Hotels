<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <img src="{{ asset('img/logoromveback.png') }}" alt="Logo" style="width: 40px; height: 40px;">
            <h3 class="text d-inline-block ms-2" style="color: #16325B;">Captain's</h3>
        </a>

        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <!-- Optional content -->
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}" style="color: #16325B;">
                <i class="fa fa-tachometer-alt me-2" style="color: #16325B;"></i>Dashboard
            </a>
            <a href="{{ route('users.index') }}" class="nav-item nav-link {{ Request::is('users') ? 'active' : '' }}" style="color: #16325B;">
                <i class="fa fa-th me-2" style="color: #16325B;"></i>Users
            </a>
            <a href="{{ route('employees.index') }}" class="nav-item nav-link {{ Request::is('employees') ? 'active' : '' }}" style="color: #16325B;">
    <i class="fa fa-keyboard me-2" style="color: #16325B;"></i>Employee
</a>

            <a href="/table.html" class="nav-item nav-link {{ Request::is('table') ? 'active' : '' }}" style="color: #16325B;">
                <i class="fa fa-table me-2" style="color: #16325B;"></i>Tables
            </a>
            <a href="/chart.html" class="nav-item nav-link {{ Request::is('chart') ? 'active' : '' }}" style="color: #16325B;">
                <i class="fa fa-chart-bar me-2" style="color: #16325B;"></i>Charts
            </a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
