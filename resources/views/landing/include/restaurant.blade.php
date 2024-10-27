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
		
    <img class="card-img-top" src="{{asset('land/images/DSC04787.jpg')}}" alt="Card image">
   
 
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