
@include('landing.include.first')
@include('landing.include.nav')




<div class="hero-wrap" style="background-image: url('/land/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <h1 class="mb-4 bread">Room Single</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ">
                  <h2 class="mb-4">{{$room->Roomtype}} / {{ $room->price}}</h2>
          			<div>
                      <div class="item">
                            <div class="room-img"  style="background-image: url('{{ asset( $room->Roomimage) }}');"></div>
                        </div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ">
					
                  <h2 class="mb-4">Description: {{ $room->description }}</h2>
				  <h4>Check-in Time : After 2:00PM | Check-Out Time : 12:00Noon</h4>
				  <h4>Room Rates Per Room Per Night Including Breakfast</h4>
          		</div>
          	

          	
          	

          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box ">
              <div class="categories">
                <h3>amenities</h3>
                <li><span>Status:</span> {{ $room->status }}</li>
                        <li><span>Rate:</span> {{ $room->Rate }}</li>
                <li><a href="#">Payment in our reception</a></li>
                <li><a href="#">Pool swimmging</a></li>
                <li><a href="#">Resturant & <span>Cafe</span></a></li>
              </div>
              <br>
              <a href="{{ url('/room') }}" class="btn"  style="background-color: #16325B; color: white;">
                                <i class="fas fa-arrow-left me-1"></i> Back to booking
                            </a>
            </div>

         

            

          
          </div>
		  
        </div>
      </div>
    </section> <!-- .section -->


    @include('landing.include.footer')
<!-- Footer End -->


  
        @include('landing.include.last')