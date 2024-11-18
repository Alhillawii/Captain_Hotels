
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
          	

          	
          		<div class="col-md-12 room-single  mb-5 mt-5">
          			<h4 class="mb-4">Available Room</h4>
					  <div class="row">
                    @foreach($rooms as $room)
                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="room">
                                <!-- Room Image -->
                                <a href="{{ url('room-single/' . $room->id) }}" 
                                   class="img d-flex justify-content-center align-items-center" 
                                   style="background-image: url('{{ asset($room->Roomimage) }}');">
                                 
                                </a>
                                <!-- Room Details -->
                                <div class="text p-3 text-center">
                                    <h3 class="mb-3">
                                        <a href="{{ url('room-single/' . $room->id) }}">{{ $room->Roomtype }}</a>
                                    </h3>
                                    <p>
                                        <span class="price mr-2">{{ $room->price }}</span> 
                                        <span class="per">per night</span>
                                    </p>
                                    <hr>
                                    <p class="pt-1">
                                        <a href="{{ route('rooms.render', $room->id) }}" class="btn-custom">
                                            Read More <i class="fa fa-arrow-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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
                <li><a href="#">Payment <span>in our reception</span></a></li>
                <li><a href="#">Bathroom <span>Done</span></a></li>
                <li><a href="#">Pool <span>swimmging</span></a></li>
                <li><a href="#">Resturant & <span>Cafe</span></a></li>
              </div>
            </div>

         

            

          
          </div>
		  
        </div>
      </div>
    </section> <!-- .section -->


    @include('landing.include.footer')
<!-- Footer End -->


  
        @include('landing.include.last')