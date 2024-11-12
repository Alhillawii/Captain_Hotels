<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{asset('fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <div class="wrapper" style="background-image: url('{{ asset('land/images/DSC05113-Edit.jpg') }}');">
        <div class="inner">
            <div class="image-holder">
            <img src="{{ asset ('land/images/logins.jpg')}}"  alt="" />
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <h3>Login Form</h3>

                <!-- Email Input -->
                <div class="form-wrapper">
                    <label for="email">{{ __('Email Address') }}</label>
                    <i class="zmdi zmdi-email"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Password Input -->
                <div class="form-wrapper">
    <label for="password">{{ __('Password') }}</label>
    <div style="position: relative;">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="width: 100%;">
        <i class="zmdi zmdi-eye" id="togglePassword"></i>
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror 
</div>


                <!-- Remember Me Checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn" style="background-color: #16325B; color: white;">
                    {{ __('Login') }}
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>

                <br>
                <!-- Sign-up Link -->
                <p>Don't have an account? <a href="{{ route('register') }}" style="color: #16325B;">Sign up</a></p>
            </form>
        </div>
    </div>
    <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Toggle eye icon class between zmdi-eye and zmdi-eye-off for visual feedback
        this.classList.toggle('zmdi-eye-off');
    });
</script>
</body>
</html>
