<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <div class="wrapper" style="background-image: url('{{ asset('land/images/DSC05113-Edit.jpg') }}');">
        <div class="inner">
            <div class="image-holder">
                <img src="{{ asset ('land/images/camping.jpeg')}}" alt="">
            </div>
            <form method="POST" action="{{ route('register') }}">
                <h3>Registration Form</h3>
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-wrapper">
                    <input type="text" placeholder="First Name" name="name" class="form-control">
                    <i class="zmdi zmdi-account-add"></i>

                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Email Address" name="email" class="form-control">
                    <i class="zmdi zmdi-email"></i>
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Mobile" name="mobile" class="form-control">
                </div>
                <div class="form-wrapper">
                    <input type="text" placeholder="Address" name="Address" class="form-control">
                </div>
                <div class="form-wrapper">
                    <select name="gender" class="form-control">
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <i class="zmdi zmdi-caret-down" style="font-size: 17px"></i>
                </div>
                <div class="form-wrapper">
    <input type="password" placeholder="Password" name="password" id="password" class="form-control">
   
    <i class="zmdi zmdi-eye" id="togglePassword"></i>
</div>
<div class="form-wrapper">
    <input type="password" placeholder="Confirm Password" name="password_confirmation" id="confirmPassword" class="form-control">
    
    <i class="zmdi zmdi-eye" id="toggleConfirmPassword"></i>
</div>
                <button type="submit" style="background-color: #16325B; color: white;">Register
                <i class="zmdi zmdi-arrow-right"></i>
                </button>
                <br>
                <div class="already-have-account">
                    <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('zmdi-eye-off'); // Toggle eye icon
    });

    // Toggle confirm password visibility
    document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const type = confirmPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmPasswordInput.setAttribute('type', type);
        this.classList.toggle('zmdi-eye-off'); // Toggle eye icon
    });
</script>
</body>
</html>

