@include('landing.include.first')
@include('landing.include.nav')

<div class="hero-wrap" style="background-image: url('land/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text d-flex align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
                <div class="text">

                    <h1 class="mb-4 bread">Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center mb-5 contact-info text-center">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>

            <div class="col-md-3 d-flex justify-content-center">
                <div class="info bg-white p-4">
                    <i class="fas fa-map-marker-alt fa-2x mb-3" style="color: #16325B;"></i>
                    <p><span>Address:</span> al Saada Aqaba, Jordan</p>
                </div>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <div class="info bg-white p-4">
                    <i class="fas fa-phone-alt fa-2x mb-3" style="color: #16325B;"></i>
                    <p><span>Phone:</span> <a href="tel://0799000950">07 9900 0950</a></p>
                </div>
            </div>

            <div class="col-md-3 d-flex justify-content-center">
                <div class="info bg-white p-4">
                    <i class="fas fa-envelope fa-2x mb-3" style="color: #16325B;"></i>
                    <p><span>Email:</span> <a href="mailto:sales@captains.jo">sales@captains.jo</a></p>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
            </div>
        @endif

        <script>
            setTimeout(function () {
                const alert = document.getElementById('success-alert');
                if (alert) {
                    alert.style.transition = "opacity 0.5s ease";
                    alert.style.opacity = "0";
                    setTimeout(() => alert.remove(), 500); 
                }
            }, 3000); 
        </script>

        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="{{ route('contacts.store') }}" method="POST" class="bg-white p-5 contact-form">
                    @csrf 
                    <div class="form-group">
                        <input type="text" name="Name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="Message" class="form-control" placeholder="Message" required>
                    </div>
                    <div class="form-group">
                        <textarea name="Description" cols="30" rows="7" class="form-control" placeholder="Description" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>

            <div class="col-md-6 d-flex">
                <img src="{{ asset('land/images/DSC05163-Edit.jpg') }}" class="img-fluid" alt="Contact Image" style="object-fit: cover; height: 100%; width: 100%;">
            </div>
        </div>
    </div>
</section>

@include('landing.include.footer')
@include('landing.include.loder') 
@include('landing.include.last')
