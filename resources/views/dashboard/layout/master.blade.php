<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <title>Captain's Hotel</title>


    <link rel="icon" type="image/png" href="{{asset('dash/img/logocap.png')}}">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    @include('dashboard.include.First')
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

    <!-- sidebar -->
    @include('dashboard.include.Sidebar')
    <!-- sidebar -->

    
        <!-- Content Start -->
        <div class="content">



            <!-- nav -->
        @include('dashboard.include.Nav')


        <!-- nav -->
       

        @yield('content')


        

      

       

        <!-- Footer Start -->
        @include('dashboard.include.Footer')
          <!-- Footer End -->
 
          <!-- Back to Top -->
          @include('dashboard.include.Top')


        </div>

        @include('dashboard.include.Last')


    </div>