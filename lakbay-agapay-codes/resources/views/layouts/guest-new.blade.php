<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Explore the wonders of Albay with Lakbay Agapay — a guide for your next travels in the province.
                            With just a few clicks, you can now see the wondrous spots Albay has to offer.
                            Visit some never-before-seen places and be at awe with the province's hidden gems." />
    <meta name="keywords" content="Lakbay Agapay, lakbay, agapay, lakbay agapay, lakbayagapay, travel, albay, tourist, tourist destinations, tour operator, tour guide, philippines, bicol, bicol region, albay tourism, tourism, department of tourism, where to travel, travel, travel in the philippines, best place to travel" />
    <meta name="author" content="CJ4">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Lakbay Agapay') }}</title>
    <link rel="icon" href="{{ asset('img/index/LOGO-1.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media_query.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    @stack('specific-css-new')

    <!-- Fetch Online -->
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owlcarousel/owl.theme.default.min.css') }}">

    <!-- FontAwesome JS -->
    <script src="https://kit.fontawesome.com/2fb013f950.js" crossorigin="anonymous"></script>
    <!-- FontAwesome CSS -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>
<div id="progress">
    <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
</div>
<div id="app">

    <main>
        @yield('content-guest-new')
    </main>

    <footer class="footer">
        <div class="col">
            <img class="footer-logo mb-4" src="{{ asset('img/icons/LOGO-BANNER.jpg') }}" alt="logo">
            <h4>Contact</h4>
            <p><strong>Email Address: </strong> lakbay.agapay@gmail.com</p>
            <p><strong>Address: </strong> Legazpi City, Albay, Philippines</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <a href="https://www.facebook.com/profile.php?id=100086206800895"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/LakbayAgapay"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/lakbayagapay/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <div style="display:flex; width: 70%;">
            <div class="col ml-5">
                <h4>Province of Albay</h4>
                <a href="https://beta.tourism.gov.ph/">DOT Website</a>
                <a href="https://albay.gov.ph/?page_id=1557">Tourism</a>
                <a href="https://albay.gov.ph/?page_id=18018">Festivals</a>
                <a href="https://albay.gov.ph/?page_id=18580">Culture, Arts and History</a>
            </div>

            <div class="col">
                <h4>About</h4>
                <a href="{{ route('guest.about') }}">About Us</a>
                <a href="{{ route('privacy') }}">Privacy Policy</a>
            </div>

            <div class="col">
                <h4>Account</h4>
                <a href="{{ route('guest.login') }}">Sign In</a>
            </div>
        </div>

        <div class="copyright ml-3">
            <p>&copy; 2022, Lakbay Agapay</p>
        </div>
    </footer>
</div>
<script src="{{ asset('js/packages/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('js/packages/typed-2.0.12.js') }}"></script>
<script src="{{ asset('js/packages/vanilla_tilt.js') }}"></script>
<script src="{{ asset('js/packages/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/function.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/index.js') }}"></script>
<script src="{{ asset('js/scroll-top.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
@stack('scripts-guest-new')
</body>
</html>
