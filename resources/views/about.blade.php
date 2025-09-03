<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riva Cake | About Us </title>

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
                    <li class="active"><a href="{{ route('about') }}">About Us</a></li>
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>About</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>About</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__video set-bg" data-setbg="img/about-video.jpg">
                        <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1"
                        class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Riva Cake</span>
                            <h2>Profile Owner</h2>
                        </div>
                        <p>Vini Wulandari adalah pendiri sekaligus pemilik UMKM Riva Cake. Lulusan program studi Perhotelan di NHI Bandung ini memulai perjalanannya dari hobi di bidang tata boga yang ia tekuni sejak masa kuliah. Melihat potensi besar di bidang kuliner, Vini memberanikan diri untuk mendirikan Riva Cake pada tahun 2010. Berawal dari memproduksi roti rumahan yang dipasarkan ke sekolah-sekolah dan warung sekitar, Riva Cake kini telah berkembang pesat. Setelah lebih dari 15 tahun, usaha ini telah memiliki ruko sendiri dan memperluas ragam produknya. tidak hanya cake dan pastry, tetapi juga mie ayam, pempek, dan menu-menu lainnya yang diminati pelanggan. Komitmen dan semangat Vini dalam mengembangkan usahanya menjadikan Riva Cake sebagai salah satu UMKM lokal yang terus tumbuh dan dicintai pelanggan.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Information</span>
                            <h2>Riva Baking Class</h2>
                        </div>
                        <p>Riva Baking Class adalah program pelatihan yang telah berjalan selama 3 tahun dan berhasil menarik lebih dari 125 peserta dari berbagai kalangan. Kelas ini dirancang fleksibel, menyesuaikan dengan kebutuhan dan minat peserta. Misalnya, jika banyak peserta ingin belajar membuat roti, kami akan menjadwalkan sesi khusus untuk materi tersebut. Hal yang sama juga berlaku untuk kelas-kelas lainnya, seperti pembuatan kue, pastry, atau makanan khas daerah. Tidak hanya kelas reguler, Riva Cake juga menyediakan kelas privat bagi peserta yang ingin belajar secara lebih intensif dan personal, dengan waktu yang lebih fleksibel dan materi yang dapat disesuaikan sepenuhnya. Selain itu, kami secara rutin mengadakan baking demo yang telah sukses digelar sebanyak 7 kali, dengan menghadirkan vendor-vendor ternama yang bekerja sama dengan kami. Baking demo ini memberikan pengalaman langsung, wawasan baru, dan kesempatan untuk belajar langsung dari para profesional di bidangnya.
                            Yuk, bergabung di Riva Baking Class—baik kelas reguler maupun privat—dan kembangkan skill baking kamu bersama kami!
                            Jangan lewatkan juga baking demo inspiratif yang akan memperluas pengetahuan dan jaringanmu di dunia kuliner!
                            </p>
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