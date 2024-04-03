<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{ config('app.name') }}</title>
        <script src="https://code.jquery.com/jquery.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
    <!-- @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    (555) 555-5555
                </div>
                <div class="col-md-6 text-right">
                    <a class="link-white" href="/register">Dealer Signup</a>
                    <a class="link-white" href="/login">Dealer Login</a>
                </div>
            </div>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-container">
                        <a href="/"><img src="/images/logo.png" alt="{{ config('app.name') }}" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="header-main-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/used-cars">Used Cars</a></li>
                        <li><a href="/used-cars-left-sidebar">Used Cars Left Sidebar</a></li>
                        <li><a href="/used-cars-right-sidebar">Used Cars Right Sidebar</a></li>
                        <li><a href="/dealers">Dealers</a></li>
                        <li><a href="/contact-us">Contact Us</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                    <a class="link-button" href="/sell-my-car">Sell my Car (For Individual)</a>
                </div>
            </div>
        </div>
    </header>