<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Product Template">
    <meta name="keywords" content="Product, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riva Cake | Gallery </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>USD <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>ENG <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
    
    <div class="container">
        <div class="row align-items-center">
            <!-- Menu kiri -->
            <div class="col-lg-9">
            <div class="header__logo">
                            <a href="{{ route('home') }}"><img src="img/logo.png" alt=""></a>
                        </div>
                <nav class="header__menu mobile-menu">
                    <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li class="active"><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Menu login dut -->
            <div class="col-lg-3">
                <ul class="header__menu__right">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @endguest

                    @auth
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="logout-btn">Logout</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</header>
    <!-- Header Section End -->

  <!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between align-items-center">
                <!-- Judul -->
                <div class="breadcrumb__text">
                    <h2>Gallery</h2>
                </div>

                <!-- Link ke tiap kategori -->
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="#Achievement">Achievement</a>
                    <a href="#DocumentaryClass">DocumentaryClass</a>
                    <a href="#Product">Product</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Section Achievement -->
<section id="Achievement" class="shop spad">
    <div class="container">
        <h3 class="mb-4">Achievement</h3>
        <div class="row">
            @forelse($Achievement as $post)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                             data-setbg="{{ asset('storage/' . $post->image) }}">
                            <div class="product__label">
                                <span>{{ $post->category }}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $post->title }}</h6>
                            <p>{{ Str::limit($post->content, 50) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center w-100">Belum ada data kategori Achievement</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Section DocumentaryClass -->
<section id="DocumentaryClass" class="shop spad">
    <div class="container">
        <h3 class="mb-4">Documentary Class</h3>
        <div class="row">
            @forelse($DocumentaryClass as $post)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                             data-setbg="{{ asset('storage/' . $post->image) }}">
                            <div class="product__label">
                                <span>{{ $post->category }}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $post->title }}</h6>
                            <p>{{ Str::limit($post->content, 50) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center w-100">Belum ada data kategori Documentary Class</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Section Product -->
<section id="Product" class="shop spad">
    <div class="container">
        <h3 class="mb-4">Product</h3>
        <div class="row">
            @forelse($Product as $post)
                <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__item__pic set-bg"
                             data-setbg="{{ asset('storage/' . $post->image) }}">
                            <div class="product__label">
                                <span>{{ $post->category }}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $post->title }}</h6>
                            <p>{{ Str::limit($post->content, 50) }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center w-100">Belum ada data kategori Product</p>
            @endforelse
        </div>
    </div>
</section>

    <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Monday - Friday: 08:00 am – 08:30 pm</li>
                            <li>Saturday: 10:00 am – 16:30 pm</li>
                            <li>Sunday: 10:00 am – 16:30 pm</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore dolore magna aliqua.</p>
                        <div class="footer__social">
                            <a href="https://api.whatsapp.com/send?phone=6285779086772"><i class="fa fa-whatsapp"></i></a>
                            <a href="https://instagram.com/riva.Product1"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__newslatter">
                        <h6>Subscribe</h6>
                        <p>Get latest updates and offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>