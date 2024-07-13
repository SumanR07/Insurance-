<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Font Awesome for the eye icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            height: 45px;
            border-radius: 5px;
        }
        .form-label {
            font-weight: bold;
        }
        .email-label {
            color: #007bff; /* Blue color for email label */
        }
        .password-label {
            color: #dc3545; /* Red color for password label */
        }
        .btn-login {
            height: 40px;
            font-size: 16px;
            font-weight: bold;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
        }
        .btn-login:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        /* Eye icon */
        .eye-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #777;
        }
        /* Center the eye icon vertically */
        .position-relative {
            position: relative;
        }
        .eye-icon-container {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3 login-container"> 
                <div class="col-md-12 text-center mb-4">
                    <h2 style="color: #007bff;">Login</h2>
                </div>
                <form action="{{route('auth.login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label password-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 position-relative">
                        <label for="password" class="form-label password-label">Password</label>
                        <div class="eye-icon-container">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                            <i class="eye-icon fas fa-eye-slash"></i>
                        </div>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-primary btn-login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript to toggle password visibility -->
    <script>
        const eyeIcon = document.querySelector('.eye-icon');
        const passwordInput = document.getElementById('password');

        eyeIcon.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>
