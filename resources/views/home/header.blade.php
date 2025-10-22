<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Crypto Organization World Wide | Premium Crypto Trading</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
     <link rel="stylesheet" href="{{ asset('assets/home/style.css') }}">
  
</head>
<body>
    <!-- Lightning Fast Preloader - Only 300ms! -->
    <div class="pre-loader">
        <div class="loader-content">
            <div class="loader-logo">
                <!-- You can replace this with your own logo -->
                <svg viewBox="0 0 100 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10L30 30L40 10H50L60 30L70 10H80L90 30L100 10" stroke="#52afee" stroke-width="4" stroke-linecap="round"/>
                    <text x="10" y="35" fill="#52afee" font-family="Arial" font-size="14" font-weight="bold">GCOWW</text>
                </svg>
            </div>
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <!-- You can replace this with your own logo -->
                    <svg width="150" height="40" viewBox="0 0 150 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 10L30 30L40 10H50L60 30L70 10H80L90 30L100 10" stroke="#52afee" stroke-width="3" stroke-linecap="round"/>
                        <text x="10" y="35" fill="#f8f9fa" font-family="Raleway" font-size="18" font-weight="bold">GCOWW</text>
                    </svg>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="marketsDropdown" role="button" data-bs-toggle="dropdown">
                                MARKETS
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">CRYPTOS</a></li>
                                <li><a class="dropdown-item" href="#">INDICES</a></li>
                                <li><a class="dropdown-item" href="#">FOREX</a></li>
                                <li><a class="dropdown-item" href="#">ENERGIES</a></li>
                                <li><a class="dropdown-item" href="#">SHARES</a></li>
                                <li><a class="dropdown-item" href="#">OPTIONS</a></li>
                                <li><a class="dropdown-item" href="#">ETFS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('faqs') }}">FAQS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">CONTACTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('trade') }}">TRADE</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('login') }}" class="top-login">Login</a>
                        <a href="{{ route('register') }}" class="top-signup">Signup</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
