<!DOCTYPE html>
<html lang="en">
  <head>
    
  <title>Captain's Hotel</title>
    <link rel="icon" type="image/png" href="{{ asset('dash/img/logocap.png') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('landing.include.first')
  </head>
  <body>
  @include('landing.include.nav')




   <!-- Content Start -->
   <div class="content">



<!-- hero -->
@include('landing.include.hero')

<!-- about -->

@include('landing.include.about')

<!-- service -->
@include('landing.include.service')

<!-- our rooms -->
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Our Rooms</h2>
            </div>
        </div>    		
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                    <div class="room">
                        <a href="{{ url('room-single/' . $room->id) }}" 
                           class="img d-flex justify-content-center align-items-center" 
                           style="background-image: url('{{ asset( $room->Roomimage) }}');">
                           
                        </a>
                        <div class="text p-3 text-center">
                            <h3 class="mb-3">
                                <a href="{{ url('room-single/' . $room->id) }}">{{ $room->Roomtype }}</a>
                            </h3>
                            <p><span class="price mr-2">{{ $room->price }}</span> <span class="per">per night</span></p>
                            <hr>
                            <p class="pt-1">
                                <!-- <a href="{{ 'viewroom' , $room->id}}" class="btn-custom">
                                    View Room Details <span class="icon-long-arrow-right"></span>
                                </a> -->
                                <a href="{{ route('rooms.render', $room->id) }}" class="">Read More <i class="fa fa-arrow-right"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- testimonials -->
@include('landing.include.testimonials')



<!-- image -->
@include('landing.include.image')








@yield('content')












<!-- Footer Start -->
@include('landing.include.footer')
<!-- Footer End -->

<!-- Back to Top -->
@include('landing.include.loder')


</div>

@include('landing.include.last')


</div>
  </body>