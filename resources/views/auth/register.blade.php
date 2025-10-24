<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Wave Capital | Register</title>
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
        
        .register-card {
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
        
        .form-select {
            background: rgba(30, 30, 60, 0.7);
            border: 1px solid #3a3a5e;
            color: var(--text-light);
            padding: 12px 15px;
            border-radius: 8px;
        }
        
        .form-select:focus {
            background: rgba(40, 40, 80, 0.8);
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(82, 175, 238, 0.2);
        }
        
        .btn-register {
            background: linear-gradient(135deg, var(--primary) 0%, #2a6b9c 100%);
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .btn-register:hover {
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
        
        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="register-card">
                    <div class="card-header text-center">
                        <div class="avatar">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <h4 class="mb-1">Create Account</h4>
                        <p class="text-muted mb-0">Join Global Wave Capital today</p>
                    </div>
                    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if(session('error'))
    <div class="alert alert-error">{{ session('error') }}</div>
@endif

                    <div class="card-body p-4">
                        <form class="register-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstname" name="name" 
                                           placeholder="Enter first name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastname" name="lname" 
                                           placeholder="Enter last name" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                       placeholder="Enter your email" required>
                                @error('email')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="currency" class="form-label">Preferred Currency</label>
                                <select class="form-select" id="currency" name="currency" required>
                                     <option value="">Select Currency</option>
    <option value="$">USD - US Dollar</option>
    <option value="€">EUR - Euro</option>
    <option value="£">GBP - British Pound</option>
    <option value="¥">JPY - Japanese Yen</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" 
                                           placeholder="Create password" required>
                                    <span class="input-group-text password-toggle" id="togglePassword">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password_confirmation" 
                                           name="password_confirmation" placeholder="Confirm password" required>
                                    <span class="input-group-text password-toggle" id="togglePasswordConfirm">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="checkbox-container">
                                    <input type="checkbox" id="robotCheck" required>
                                    <label for="robotCheck" class="mb-0">I'm not a robot</label>
                                    <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" alt="reCAPTCHA" width="24" height="24">
                                </div>
                            </div>
                            
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a>
                                </label>
                            </div>
                            
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-register">Create Account</button>
                            </div>
                            
                            <div class="text-center">
                                <p class="mb-0">Already have an account? 
                                    <a href="{{ route('login') }}" class="text-primary fw-semibold">Sign in</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- WhatsApp Floating Button -->
<a href="https://wa.me/18053932568?text=Hello!%20I%20would%20like%20to%20know%20more%20about%20your%20services." 
   class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
   <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 32 32" fill="white">
      <path d="M19.11 17.53c-.33-.17-1.95-.96-2.25-1.07s-.52-.17-.74.17-.85 1.07-1.05 1.29-.39.26-.72.09a7.87 7.87 0 01-2.31-1.42 
      8.62 8.62 0 01-1.59-1.98c-.17-.3 0-.46.13-.63.13-.13.3-.35.46-.52s.22-.3.35-.52.07-.39 0-.56c-.09-.17-.74-1.77-1.02-2.43s-.52-.52-.74-.52h-.63c-.22 
      0-.56.09-.85.39s-1.12 1.09-1.12 2.66 1.15 3.09 1.31 3.3 2.27 3.46 5.49 4.85c.77.33 1.37.52 1.84.67a4.42 4.42 0 002.03.13c.62-.09 
      1.95-.8 2.23-1.57s.28-1.42.2-1.57-.3-.22-.63-.39zM16.02 3c-7.16 0-12.97 5.81-12.97 12.97 0 2.29.59 4.52 1.71 6.49L3 29l6.74-1.77a12.93 
      12.93 0 006.28 1.61h.01c7.16 0 12.97-5.81 12.97-12.97S23.18 3 16.02 3zm0 23.66c-2.2 0-4.35-.59-6.23-1.7l-.45-.27-4 .99 1.06-3.9-.25-.4a10.93 
      10.93 0 01-1.68-5.83c0-6.05 4.92-10.97 10.97-10.97 2.93 0 5.68 1.14 7.75 3.21s3.21 4.82 3.21 7.75c0 6.05-4.92 10.97-10.97 10.97z"/>
   </svg>
   <span class="whatsapp-tooltip">Chat with us</span>
</a>

<style>
.whatsapp-float {
    position: fixed;
    bottom: 20px;
    left: 20px;
    background: #25D366;
    color: white;
    border-radius: 50%;
    padding: 16px;
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
}

.whatsapp-float:hover {
    transform: scale(1.1) rotate(-5deg);
    box-shadow: 0 12px 20px rgba(0,0,0,0.4);
}

.whatsapp-tooltip {
    position: absolute;
    left: 70px;
    background: #333;
    color: #fff;
    font-size: 14px;
    padding: 6px 12px;
    border-radius: 6px;
    opacity: 0;
    transform: translateY(10px);
    pointer-events: none;
    transition: all 0.3s ease;
    white-space: nowrap;
}

.whatsapp-float:hover .whatsapp-tooltip {
    opacity: 1;
    transform: translateY(0);
}
</style>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '23953927cb41ee739722ce20ed7c44829348837d';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>




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

        document.getElementById('togglePasswordConfirm').addEventListener('click', function() {
            const passwordInput = document.getElementById('password_confirmation');
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
        document.querySelector('.register-form').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('password_confirmation').value;
            const robotCheck = document.getElementById('robotCheck');
            const terms = document.getElementById('terms');
            
            if (password.length < 6) {
                e.preventDefault();
                alert('Password must be at least 6 characters long');
                return false;
            }
            
            if (password !== passwordConfirm) {
                e.preventDefault();
                alert('Passwords do not match');
                return false;
            }
            
            if (!robotCheck.checked) {
                e.preventDefault();
                alert('Please verify that you are not a robot');
                return false;
            }
            
            if (!terms.checked) {
                e.preventDefault();
                alert('Please agree to the Terms of Service and Privacy Policy');
                return false;
            }
        });
    </script>
</body>
</html>