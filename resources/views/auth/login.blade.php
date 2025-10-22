<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Wave Capital | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
    
    <style>
        :root {
            --primary: #52afee;
            --secondary: #f58634;
            --dark-bg: #1a1a2e;
            --card-bg: #252547;
            --text-light: #f8f9fa;
            --text-muted: #a0a0c0;
        }
        
        body {
            background: linear-gradient(135deg, #0f0f23 0%, #1a1a2e 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-light);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .login-card {
            background: var(--card-bg);
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            border: 1px solid #3a3a5e;
        }
        
        .card-header {
            background: linear-gradient(135deg, #252547 0%, #1e1e3a 100%);
            border-bottom: 1px solid #3a3a5e;
            padding: 2rem;
        }
        
        .form-control {
            background: rgba(30, 30, 60, 0.7);
            border: 1px solid #3a3a5e;
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
        }
        
        .form-control:focus {
            background: rgba(40, 40, 80, 0.8);
            border-color: var(--primary);
            color: var(--text-light);
            box-shadow: 0 0 0 0.2rem rgba(82, 175, 238, 0.2);
        }
        
        .btn-login {
            background: linear-gradient(135deg, var(--primary) 0%, #2a6b9c 100%);
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(82, 175, 238, 0.3);
        }
        
        .password-toggle {
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .password-toggle:hover {
            color: var(--primary);
        }
        
        .checkbox-container {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 15px;
            border-radius: 8px;
            background: rgba(30, 30, 60, 0.5);
            border: 1px solid #3a3a5e;
        }
        
        .text-primary {
            color: var(--primary) !important;
        }
        
        .avatar {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary) 0%, #2a6b9c 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            border: 3px solid rgba(255, 255, 255, 0.1);
        }
        
        .avatar i {
            font-size: 1.8rem;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-card">
                    <div class="card-header text-center">
                        <div class="avatar">
                            <i class="fas fa-user-lock"></i>
                        </div>
                        <h4 class="mb-1">Welcome Back!</h4>
                        <p class="text-muted mb-0">Sign in to continue to Global Wave Capital</p>
                    </div>

                    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-error">{{ session('error') }}</div>
@endif

@if ($errors->any())
    <div class="alert alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



                    <div class="card-body p-4">
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="Enter your email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="Enter your password" required>
                                    <span class="input-group-text password-toggle" id="togglePassword">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            
                            <div class="mb-3">
                                <div class="checkbox-container">
                                    <input type="checkbox" id="robotCheck" required>
                                    <label for="robotCheck" class="mb-0">I'm not a robot</label>
                                    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" width="24" height="24">
                                </div>
                            </div>
                            
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-login">Sign In</button>
                            </div>
                            
                            <div class="text-center">
                                <a href="{{ route('forgot.password.form') }}" class="text-primary">Forgot your password?</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <p class="mb-0">Don't have an account? 
                            <a href="{{ route('register') }}" class="text-primary fw-semibold">Sign up now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Password visibility toggle
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.className = 'fas fa-eye-slash';
            } else {
                passwordInput.type = 'password';
                icon.className = 'fas fa-eye';
            }
        });

        // Form validation
        document.querySelector('.login-form').addEventListener('submit', function(e) {
            const robotCheck = document.getElementById('robotCheck');
            
            if (!robotCheck.checked) {
                e.preventDefault();
                alert('Please verify that you are not a robot');
                return false;
            }
        });
    </script>
</body>
</html>