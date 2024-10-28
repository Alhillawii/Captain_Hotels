@include('landing.include.first')
@include('landing.include.nav')

<div class="content">


<div class="hero-wrap" style="background-image: url('land/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            
	            <h1 class="mb-4 bread">Restaurants</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


<section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(land/images/DSC04787.jpg);">
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-4 mb-5">
	          	<div class="ml-md-0">
		          	<span class="subheading">WELCOME ABOARD
					  </span>
		            <h2 class="mb-4">Captain’s resturant</h2>
	            </div>
	          </div>
	          <div class="pb-md-4">
							<p>Captain Abdul-Fattah Abu Taleb, fondly known as Abu Osama,
was committed to oering world-class hospitality to visitors from all around the world.
His journey began with the establishment of a restaurant, "Captain's Restaurant,"
which became famous for its exquisite blend of Eastern and Western dishes.
But he didn’t stop there; Driven by his passion, he continued and built a luxurious hotel,
aiming to make it a global landmark. His clear goal was to ensure that tourists in Aqaba,
the historic city once known as Ayla, would feel truly at home,
even when they were far from it.
							</p>

						</div>
					</div>
				</div>
			</div>
		</section>

        <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Our Menu</h2>
          </div>
        </div>
		
		<div class="book">
<input type="checkbox" id="c0">
  <input type="checkbox" id="c1">
  <input type="checkbox" id="c2">
  <input type="checkbox" id="c3">
  <input type="checkbox" id="c4">
  <input type="checkbox" id="c5">
  <input type="checkbox" id="c6">
  <input type="checkbox" id="c7">
  <input type="checkbox" id="c8">
  <input type="checkbox" id="c9">
  <input type="checkbox" id="c10">
  <input type="checkbox" id="c11">
  <input type="checkbox" id="c12">
  <div id="cover" style="background-color: white;"></div>
  <div class="flip-book">
    <div class="flip" id="p0">
      <div class="back">
        <img src="{{asset('land/images/menu1.png')}}" alt="menu">
        <label class="back-btn" for="c0">Back</label>
      </div>
      <div class="front" id="acde">
        <img src="{{asset('land/images/menu12.png')}}" alt="menu">
		<label class="next-btn" for="c0">Next</label>
      </div>
    </div>
    <div class="flip" id="p1">
      <div class="back">
        <img src="{{asset('land/images/menu2.png')}}">
        <label class="back-btn" for="c1">Back</label>
      </div>
      <div class="front">
	  <img src="{{asset('land/images/menu3.png')}}">
        <label class="next-btn" for="c1">Next</label>
      </div>
    </div>

    <div class="flip" id="p2">
      <div class="back">
	  <img src="{{asset('land/images/menu4.png')}}">
        <label class="back-btn" for="c2">Back</label>
      </div>
      <div class="front">
	  <img src="{{asset('land/images/menu5.png')}}">
        <label class="next-btn" for="c2">Next</label>
      </div>
    </div>

    <div class="flip" id="p3">
      <div class="back">
	  <img src="{{asset('land/images/menu66.png')}}">
        <label class="back-btn" for="c3">Back</label>
      </div>
      <div class="front">
	  <img src="{{asset('land/images/menu7.png')}}">
        <label class="next-btn" for="c3">Next</label>
      </div>
    </div>

    <div class="flip" id="p4">
      <div class="back">
	  <img src="{{asset('land/images/menu8.png')}}">
        <label class="back-btn" for="c4">Back</label>
      </div>
      <div class="front">
	  <img src="{{asset('land/images/menu9.png')}}">
        <label class="next-btn" for="c4">Next</label>
      </div>
    </div>

    <div class="flip" id="p5">
      <div class="back">
	  <img src="{{asset('land/images/menu10.png')}}">
        <label class="back-btn" for="c5">Back</label>
      </div>
      <div class="front">
	  <img src="{{asset('land/images/menu11.png')}}">
        <label class="next-btn" for="c5">Next</label>
      </div>
    </div>

    
      
   

   

   
  </div>
</div>
   
 
</div>
        </div>
			</div>
		</section>

</div>
        <!-- Footer Start -->
@include('landing.include.footer')
<!-- Footer End -->

<!-- Back to Top -->
@include('landing.include.loder')

  
        @include('landing.include.last')