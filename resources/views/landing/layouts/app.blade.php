<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Deluxe - Free Bootstrap 4 Template by Colorlib</title>
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
@include('landing.include.room')

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