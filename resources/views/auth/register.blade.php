


<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

       

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                    <div class="card-body p-5   shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Sign up</h2>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1">Name</label>
                                        <input type="text" id="form3Example1" name="name" class="form-control" style="width: 100%;" />
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            
                            <div data-mdb-input-init class="form-outline col-md-6 mb-3">
                                <label class="form-label" for="form3Example3"> Enter Your Email</label>
                                <input type="email" id="form3Example3" name="email" class="form-control" style="width: 100%;" />
                            </div>
                          

                            <div data-mdb-input-init class="form-outline col-md-6 mb-3">
                                <label class="form-label" for="form3Example3">Mobile</label>
                                <input type="text" id="form3Example3" name="mobile" class="form-control" style="width: 100%;" />
                            </div>
                            <div data-mdb-input-init class="form-outline col-md-6 mb-3">
    <label class="form-label" for="form3Example4">Address</label>
    <input type="Address" id="form3Example4" name="Address" class="form-control" style="width: 100%;" />
</div>
<div data-mdb-input-init class="form-outline col-md-6 mb-3">
    <label class="form-label" for="form3Example4Gender">Gender</label>
    <select id="form3Example4Gender" name="gender" class="form-control" style="width: 100%;">
        <option value="" disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>

    </select>
</div>


                       <!-- Password input -->
<div data-mdb-input-init class="form-outline col-md-6 mb-3">
    <label class="form-label" for="form3Example4">Password</label>
    <input type="password" id="form3Example4" name="password" class="form-control" style="width: 100%;" />
</div>

<!-- Confirm Password input -->
<div data-mdb-input-init class="form-outline col-md-6 mb-3">
    <label class="form-label" for="form3Example4Confirm">Confirm Password</label>
    <input type="password" id="form3Example4Confirm" name="password_confirmation" class="form-control" style="width: 100%;" />
</div>

                            <!-- Checkbox -->
                          

                            <!-- Submit button -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn  btn-block mb-4" style="background-color: #16325B; color: white;">
                                Sign up
                            </button>
                            <div class="already-have-account">
                                <p>Already have an account? <a href="{{ route('login') }}" style="color: #16325B;">Log in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://jtt.com.jo/wp-content/uploads/2024/04/1110-700.jpg" class="w-100 rounded-4 shadow-4" alt="" />
            </div>
        </div>
       
    </div>
