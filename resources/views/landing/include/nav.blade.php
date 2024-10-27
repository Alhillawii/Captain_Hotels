<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<img src="{{ asset('dash/img/logoromveback.png') }}" alt="Logo" style="width: 40px; height: 40px;">
		<h3 class="text d-inline-block ms-2" style="color: #16325B;">Captain's</h3>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	    </button>

	    <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item active"><a href="{{ url('landpage') }}" class="nav-link">Home</a></li>
	            <li class="nav-item"><a href="{{ url('viewroom') }}" class="nav-link">Rooms</a></li>
	            <li class="nav-item"><a href="{{ url('rest') }}" class="nav-link">Restaurant</a></li>
	            <li class="nav-item"><a href="{{ url('camping') }}" class="nav-link">camping</a></li>
	            <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
	        </ul>
	    </div>

	    @if (Route::has('login'))
		    @auth
		        @if(Auth::user()->Role === "Manager")
		            <a href="{{ url('/') }}" class="btn btn-outline-light rounded-pill me-3 py-2 px-4 m-4">Dashboard</a>
		        @endif

		        <!-- Profile Button -->
		        <a href="{{ route('profile.edit') }}" 
		           class="btn rounded-pill me-3 py-2 px-4 m-4" 
		           style="background-color: #16325B; color: white;">
		            Profile
		        </a>

		        <!-- Logout Button -->
		        <a href="{{ route('logout') }}" 
		           class="btn btn-danger rounded-pill me-3 py-2 px-4 m-4" 
		           style=" color: white;" 
		           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		            Logout
		        </a>

		        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		            @csrf
		        </form>
		    @else
		        <!-- Login and Register Buttons -->
		        <a href="{{ route('login') }}" 
		           class="btn rounded-pill me-3 py-2 px-4 m-4" 
		           style="background-color: #16325B; color: white;">
		            Log In
		        </a>

		        @if (Route::has('register'))
		            <a href="{{ route('register') }}" 
		               class="btn rounded-pill py-2 px-4 m-4" 
		               style="background-color: #16325B; color: white;">
		                Register
		            </a>
		        @endif
		    @endauth
	    @endif
	</div>
</nav>
