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
                               style="background-image: url('{{ asset('storage/' . $room->Roomimage) }}');">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-search2"></span>
                                </div>
                            </a>
                            <div class="text p-3 text-center">
                                <h3 class="mb-3">
                                    <a href="{{ url('room-single/' . $room->id) }}">{{ $room->Roomtype }}</a>
                                </h3>
                                <p><span class="price mr-2">${{ $room->price }}</span> <span class="per">per night</span></p>
                                <hr>
                                <p class="pt-1">
                                    <a href="{{ url('room-single/' . $room->id) }}" class="btn-custom">
                                        View Room Details <span class="icon-long-arrow-right"></span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
             
        </div>
    </div>
	@endforeach
</section>
