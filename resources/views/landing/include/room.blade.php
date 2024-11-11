@include('landing.include.first')
@include('landing.include.nav')

<div class="hero-wrap" style="background-image: url('land/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">
                    <h1 class="mb-4 bread">{{ $room->Roomtype ?? 'Room Type' }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-4">{{ $room->description ?? 'Room description not available.' }}</h2>
                <div class="single-slider owl-carousel">
                    @if(!empty($room->Roomimage))
                        @foreach($room->Roomimage as $image)
                            <div class="item">
                                <div class="room-img" style="background-image: url({{ asset('storage/' . $image->path) }});"></div>
                            </div>
                        @endforeach
                    @else
                        <p>No images available for this room.</p>
                    @endif
                </div>
                <div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
                    <p>{{ $room->description ?? 'Room description not available.' }}</p>
                    <ul class="list">
                        <li><span>Price:</span> ${{ $room->price ?? 'N/A' }}</li>
                        <li><span>Status:</span> {{ $room->status ?? 'N/A' }}</li>
                        <li><span>Rate:</span> {{ $room->Rate ?? 'N/A' }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>