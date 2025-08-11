<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="'Viewport">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta charset="width=device-width, initial-scale=1.0">
    <title>Riva Cake | Home </title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    

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
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="shop.html" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="shop.html" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Cake shop</span>
                            <h2>Cakes and bakes from the house of Queens!</h2>
                        </div>
                        <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                        Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Cake design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Class</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Recipes</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- menu kue -->
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-029-Achievement-3"></span>
                            <h5>Achievement</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-034-chocolate-roll"></span>
                            <h5>Butter</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-005-pancake"></span>
                            <h5>Red Velvet</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-030-Achievement-2"></span>
                            <h5>Biscuit</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Donut</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Achievement</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-1.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Dozen Achievements</a></h6>
                            <div class="product__item__price">$32.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-2.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">DocumentaryClass and Cream</a></h6>
                            <div class="product__item__price">$30.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-3.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Gluten Free Mini Dozen</a></h6>
                            <div class="product__item__price">$31.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-4.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Cookie Dough</a></h6>
                            <div class="product__item__price">$25.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-5.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Vanilla Salted Caramel</a></h6>
                            <div class="product__item__price">$05.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-6.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">German Chocolate</a></h6>
                            <div class="product__item__price">$14.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-7.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Dulce De Leche</a></h6>
                            <div class="product__item__price">$32.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="img/shop/product-8.jpg">
                            <div class="product__label">
                                <span>Achievement</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#">Mississippi Mud</a></h6>
                            <div class="product__item__price">$08.00</div>
                            <div class="cart_add">
                                <a href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Class Section Begin -->
    <section class="class spad">
    <div class="container-class-cakes">
           
           
                    <div class="class__form">
                        <div class="section-title">
                            <span>Class cakes</span>
                            <h2>Made from your <br />own hands</h2>
                            <h6>Riva Baking Class adalah program pelatihan yang telah berjalan selama 3 tahun dan berhasil menarik lebih dari 125 peserta dari berbagai kalangan. Kelas ini dirancang fleksibel, menyesuaikan dengan kebutuhan dan minat peserta. Misalnya, jika banyak peserta ingin belajar membuat roti, kami akan menjadwalkan sesi khusus untuk materi tersebut. Hal yang sama juga berlaku untuk kelas-kelas lainnya, seperti pembuatan kue, pastry, atau makanan khas daerah. Tidak hanya kelas reguler, Riva Cake juga menyediakan kelas privat bagi peserta yang ingin belajar secara lebih intensif dan personal, dengan waktu yang lebih fleksibel dan materi yang dapat disesuaikan sepenuhnya. Selain itu, kami secara rutin mengadakan baking demo yang telah sukses digelar sebanyak 7 kali, dengan menghadirkan vendor-vendor ternama yang bekerja sama dengan kami. Baking demo ini memberikan pengalaman langsung, wawasan baru, dan kesempatan untuk belajar langsung dari para profesional di bidangnya.
                                Yuk, bergabung di Riva Baking Class—baik kelas reguler maupun privat—dan kembangkan skill baking kamu bersama kami!
                                Jangan lewatkan juga baking demo inspiratif yang akan memperluas pengetahuan dan jaringanmu di dunia kuliner!
                            </h6>
                        </div>
                        
                        <form
                         action="https://api.whatsapp.com/send?phone=6285779086772&text=saya%20mau%20daftar%20kelas">
                            <button class="site-btn">registration</button>
                        </form>
                    </div>
                </div>
            </div>
           <!---- <div class="class__video set-bg" data-setbg="img/class-video.jpg">

                <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                class="play-btn video-popup"><i class="fa fa-play"></i></a>
            </div> -->
            
        </div>
    </section>
    <!-- Class Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our team</span>
                        <h2>Sweet Baker </h2>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-1.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            <div class="team__item__social">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            
                            <div class="team__item__social">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            
                            <div class="team__item__social">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team__item set-bg" data-setbg="img/team/team-4.jpg">
                        <div class="team__item__text">
                            <h6>Randy Butler</h6>
                            
                            <div class="team__item__social">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @riva.cake1</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Map Begin -->
    <div class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-7">
                </div>
            </div>
        </div>
        <div class="map__iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.154203828027!2d106.79614827356262!3d-6.751040766010556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cd210f62b437%3A0x4d25094043fa56f5!2sRiva%20Cake!5e0!3m2!1sen!2sid!4v1753872047368!5m2!1sen!2sid" height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <!-- Map End -->    

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
                            <a href="https://instagram.com/riva.cake1"><i class="fa fa-instagram"></i></a>
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
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>