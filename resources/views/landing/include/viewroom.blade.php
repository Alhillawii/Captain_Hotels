
@include('landing.include.first')
@include('landing.include.nav')




<div class="hero-wrap" style="background-image: url('land/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
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
                  <h2 class="mb-4">{{$room->Roomtype}}</h2>
          			<div>
                      <div class="item">
                            <div class="room-img"  style="background-image: url('{{ asset( $room->Roomimage) }}');"></div>
                        </div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single mt-4 mb-5 ">
                  <p>Description: {{ $room->description }}</p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> 3 Persons</li>
                                    <li><span>View:</span> Sea View</li>
	    							<li><span>Bed:</span> 1</li>
	    						</ul>
	    						<ul class="list ml-md-5">
                                <li><span>Price:</span> ${{ $room->price }}</li>
                        <li><span>Status:</span> {{ $room->status }}</li>
                        <li><span>Rate:</span> {{ $room->Rate }}</li>
	    						</ul>
    						</div>
          		</div>
          	

          		<div class="col-md-12 properties-single  mb-5 mt-4">
          			<h4 class="mb-4">Review &amp; Ratings</h4>
          			<div class="row">
          				<div class="col-md-6">
          					<form method="post" class="star-rating">
										  <div class="form-check">
												<input type="checkbox" class="form-check-input" id="exampleCheck1">
												<label class="form-check-label" for="exampleCheck1">
													<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
												</label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									    	   <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
									     </label>
										  </div>
										  <div class="form-check">
										    <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
									      </label>
										  </div>
										  <div class="form-check">
									      <input type="checkbox" class="form-check-input" id="exampleCheck1">
									      <label class="form-check-label" for="exampleCheck1">
									      	<p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
										    </label>
										  </div>
										</form>
          				</div>
          			</div>
          		</div>
          		<div class="col-md-12 room-single  mb-5 mt-5">
          			<h4 class="mb-4">Available Room</h4>
          			<div class="row">
          				<div class="col-sm col-md-6 ">
				    				<div class="room">
				    					<a href="rooms.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/room-1.jpg);">
				    						<div class="icon d-flex justify-content-center align-items-center">
				    							<span class="icon-search2"></span>
				    						</div>
				    					</a>
				    					<div class="text p-3 text-center">
				    						<h3 class="mb-3"><a href="rooms.html">Suite Room</a></h3>
				    						<p><span class="price mr-2">$120.00</span> <span class="per">per night</span></p>
				    						<hr>
				    						<p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
				    					</div>
				    				</div>
				    			</div>
				    			<div class="col-sm col-md-6 ">
				    				<div class="room">
				    					<a href="rooms.html" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/room-2.jpg);">
				    						<div class="icon d-flex justify-content-center align-items-center">
				    							<span class="icon-search2"></span>
				    						</div>
				    					</a>
				    					<div class="text p-3 text-center">
				    						<h3 class="mb-3"><a href="rooms.html">Family Room</a></h3>
				    						<p><span class="price mr-2">$20.00</span> <span class="per">per night</span></p>
				    						<hr>
				    						<p class="pt-1"><a href="room-single.html" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
				    					</div>
				    				</div>
				    			</div>
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
                <h3>Categories</h3>
                <li><a href="#">Properties <span>(12)</span></a></li>
                <li><a href="#">Home <span>(22)</span></a></li>
                <li><a href="#">House <span>(37)</span></a></li>
                <li><a href="#">Villa <span>(42)</span></a></li>
                <li><a href="#">Apartment <span>(14)</span></a></li>
                <li><a href="#">Condominium <span>(140)</span></a></li>
              </div>
            </div>

         

            

          
          </div>
        </div>
      </div>
    </section> <!-- .section -->


    @include('landing.include.footer')
<!-- Footer End -->


  
        @include('landing.include.last')