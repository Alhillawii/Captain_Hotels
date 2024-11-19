<!-- Navbar Start -->
<nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
   <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
    <img src="{{ asset('/dash/img/logoromveback.png') }}" alt="Company Logo" style="width: 40px; height: 40px;">
</a>

    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars" style="color: #16325B;"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control border-0" type="text" name="search" placeholder="Search" aria-label="Search..." style="color: #16325B;">
    </form>
    <div class="navbar-nav align-items-center ms-auto">
        <div class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item" style="color: #16325B;">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0" style="color: #16325B;">Jhon send you a message</h6>
                            <small style="color: #16325B;">15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item" style="color: #16325B;">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0" style="color: #16325B;">Jhon send you a message</h6>
                            <small style="color: #16325B;">15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item" style="color: #16325B;">
                    <div class="d-flex align-items-center">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="ms-2">
                            <h6 class="fw-normal mb-0" style="color: #16325B;">Jhon send you a message</h6>
                            <small style="color: #16325B;">15 minutes ago</small>
                        </div>
                    </div>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-center" style="color: #16325B;">See all messages</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="#" class="dropdown-item" style="color: #16325B;">
                    <h6 class="fw-normal mb-0">Profile updated</h6>
                    <small style="color: #16325B;">15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item" style="color: #16325B;">
                    <h6 class="fw-normal mb-0">New user added</h6>
                    <small style="color: #16325B;">15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item" style="color: #16325B;">
                    <h6 class="fw-normal mb-0">Password changed</h6>
                    <small style="color: #16325B;">15 minutes ago</small>
                </a>
                <hr class="dropdown-divider">
                <a href="#" class="dropdown-item text-center" style="color: #16325B;">See all notifications</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color: #16325B;">
                <img class="rounded-circle me-lg-2" src="{{asset(Auth::user()->Image)}}" alt="" style="width: 40px; height: 40px;">
                <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                <a href="{{ route('profile.edit') }}" class="dropdown-item" style="color: #16325B;">My Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}" 
   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            @csrf
		        </form>
</a>


            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->
