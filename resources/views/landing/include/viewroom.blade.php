@include('landing.include.first')
@include('landing.include.nav')

<div class="hero-wrap" style="background-image: url('land/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <h1 class="mb-4 bread">{{ $room->Roomtype }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">{{ $room->description }}</h2>
                <div class="single-slider owl-carousel">
                    <div class="item">
                            <div class="room-img" style="background-image: url({{ asset($room->Roomimage) }});"></div>
                        </div>
                </div>
                <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                    <p>{{ $room->description }}</p>
                    <ul class="list">
                        <li><span>Price:</span> ${{ $room->price }}</li>
                        <li><span>Status:</span> {{ $room->status }}</li>
                        <li><span>Rate:</span> {{ $room->Rate }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
