@include('landing.include.first')
@include('landing.include.nav')

<!-- Hero Section -->
<div class="hero-wrap" style="background-image: url('land/images/DSC05410.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <h1 class="mb-4 bread">About Our Camping</h1>
        </div>
      </div>

    </div>

  </div>
</div>




<!-- About Camping Section -->
<section class="ftco-section ftc-no-pb ftc-no-pt">

  <div class="container">
    <div class="row">
      <!-- Video Section -->
      <div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(land/images/camping.jpeg);">
        <a href="{{ asset('land/video/WhatsApp Video 2024-07-20 at 19.46.09_0271d64a.mp4') }}" class="icon popup-vimeo d-flex justify-content-center align-items-center">
          <span class="icon-play"></span>
        </a>
      </div>
      
      <!-- Description Section -->
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
          <div class="ml-md-0">
            <h2 class="mb-4">Welcome To Our Camping</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p>Wadi Rum, known also as the Valley of the Moon, is a valley cut into the sandstone and granite rock in southern Jordan, 60KM (37ml) to the east of Aqaba. Captain’s concept is inspired by the elements of nature in the desert environment. It reflects a feeling of relaxation and satisfaction. Captain’s camp is the perfect place to zone out from all the city’s distractions.</p>
          <p>Captain's Camp is the adventurous sector of Captain's Experience, inspired by Jordan's Sahara with the colors of the mountains, ancient language, and Bedouin textures.</p>
          
          <a 
    href="{{ auth()->check() ? url('campform') : route('login') }}" 
    class="btn rounded-pill me-3 py-2 px-4 m-4" 
    style="background-color: #16325B; color: white; text-decoration: none;">
    Book Now
</a>
          <ul class="ftco-social d-flex">
            <li class="ftco-animate"><a href="https://www.facebook.com/captain.hotel"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>





</section>




<!-- Services Section -->
<section class="ftco-section">
  
  <div class="container">
    <div class="row justify-content-center">
      <!-- 24/7 Front Desk -->
      <div class="col-md-3 d-flex align-items-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-reception-bell"></span>
            </div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">24/7 Front Desk</h3>
          </div>
        </div>
      </div>

      <!-- Open Buffet -->
      <div class="col-md-3 d-flex align-items-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-serving-dish"></span>
            </div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Open Buffet</h3>
          </div>
        </div>
      </div>

      <!-- Transfer Services -->
      <div class="col-md-3 d-flex align-items-stretch ftco-animate">
        <div class="media block-6 services py-4 d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon d-flex align-items-center justify-content-center">
              <span class="flaticon-car"></span>
            </div>
          </div>
          <div class="media-body p-2 mt-2">
            <h3 class="heading mb-3">Transfer Services</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>


<!-- Gallery Section -->
<section class="instagram pt-5">
  <div class="container-fluid">
    <div class="row no-gutters justify-content-center pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2><span>Gallery</span></h2>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-sm-12 col-md ftco-animate">
        <a href="land/images/DSC05113-Edit.jpg" class="insta-img image-popup" style="background-image: url(land/images/DSC05113-Edit.jpg);">
          <div class="icon d-flex justify-content-center"></div>
        </a>
      </div>
      <div class="col-sm-12 col-md ftco-animate">
        <a href="land/images/DSC05446.jpg" class="insta-img image-popup" style="background-image: url(land/images/DSC05446.jpg);">
          <div class="icon d-flex justify-content-center"></div>
        </a>
      </div>
      <div class="col-sm-12 col-md ftco-animate">
        <a href="land/images/DSC05530.jpg" class="insta-img image-popup" style="background-image: url(land/images/DSC05530.jpg);">
          <div class="icon d-flex justify-content-center"></div>
        </a>
      </div>
      <div class="col-sm-12 col-md ftco-animate">
        <a href="land/images/DSC05546.jpg" class="insta-img image-popup" style="background-image: url(land/images/DSC05546.jpg);">
          <div class="icon d-flex justify-content-center"></div>
        </a>
      </div>
      <div class="col-sm-12 col-md ftco-animate">
        <a href="land/images/DSC05511.jpg" class="insta-img image-popup" style="background-image: url(land/images/DSC05511.jpg);">
          <div class="icon d-flex justify-content-center"></div>
        </a>
      </div>
    </div>
  </div>
</section>

@include('landing.include.footer')
@include('landing.include.loder')
@include('landing.include.last')