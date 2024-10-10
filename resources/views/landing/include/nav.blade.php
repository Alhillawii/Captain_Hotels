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
	          <li class="nav-item"><a href="{{ url('aboutus') }}" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="{{ url('contact') }}" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->