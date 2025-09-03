<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riva Cake | Shop  </title>

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
    <link rel='stylesheet' id='joinchat-css' href='https://bankdptaspen.co.id/wp-content/plugins/creame-whatsapp-me/public/css/joinchat.min.css?ver=5.2.1' type='text/css' media='all' />
    <style id='joinchat-button-style-inline-css' type='text/css'>
.wp-block-joinchat-button{border:none!important;text-align:center}.wp-block-joinchat-button figure{display:table;margin:0 auto;padding:0}.wp-block-joinchat-button figcaption{font:normal normal 400 .6em/2em var(--wp--preset--font-family--system-font,sans-serif);margin:0;padding:0}.wp-block-joinchat-button .joinchat-button__qr{background-color:#fff;border:6px solid #25d366;border-radius:30px;box-sizing:content-box;display:block;height:200px;margin:auto;overflow:hidden;padding:10px;width:200px}.wp-block-joinchat-button .joinchat-button__qr canvas,.wp-block-joinchat-button .joinchat-button__qr img{display:block;margin:auto}.wp-block-joinchat-button .joinchat-button__link{align-items:center;background-color:#25d366;border:6px solid #25d366;border-radius:30px;display:inline-flex;flex-flow:row nowrap;justify-content:center;line-height:1.25em;margin:0 auto;text-decoration:none}.wp-block-joinchat-button .joinchat-button__link:before{background:transparent var(--joinchat-ico) no-repeat center;background-size:100%;content:"";display:block;height:1.5em;margin:-.75em .75em -.75em 0;width:1.5em}.wp-block-joinchat-button figure+.joinchat-button__link{margin-top:10px}@media (orientation:landscape)and (min-height:481px),(orientation:portrait)and (min-width:481px){.wp-block-joinchat-button.joinchat-button--qr-only figure+.joinchat-button__link{display:none}}@media (max-width:480px),(orientation:landscape)and (max-height:480px){.wp-block-joinchat-button figure{display:none}}

</style>
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
                    <li class="active"><a href="{{ route('shop') }}">Shop</a></li>
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
<!-- Breadcrumb -->
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Shop</h4>
                    <div class="breadcrumb__links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="#kuekering">Kue Kering</a>
                    <a href="#kuebasah">Kue Basah</a>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Section -->
<section class="shop spad">
    <div class="container">
        <!-- Kue Kering -->
        <div class="section-title">
            <h2>Kue Kering</h2>
        </div>
        <div class="row">
            @forelse ($kuekering as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="product__label">
                                <span>{{ $item->category }}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $item->name }}</h6>
                            <p>{{ Str::limit($item->description, 50) }}</p>
                            <p><strong>Rp{{ number_format($item->price, 0, ',', '.') }}</strong></p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">Tidak ada produk kategori Kue Kering</p>
            @endforelse
        </div>

        <!-- Kue Basah -->
        <div class="section-title mt-5">
            <h2>Kue Basah</h2>
        </div>
        <div class="row">
            @forelse ($kuebasah as $item)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('storage/' . $item->image) }}">
                            <div class="product__label">
                                <span>{{ $item->category }}</span>
                            </div>
                        </div>
                        <div class="product__item__text">
                            <h6>{{ $item->name }}</h6>
                            <p>{{ Str::limit($item->description, 50) }}</p>
                            <p><strong>Rp{{ number_format($item->price, 0, ',', '.') }}</strong></p>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-muted">Tidak ada produk kategori Kue Basah</p>
            @endforelse
        </div>
</section>

    <!-- Shop Section End -->

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

<div class="joinchat joinchat--right" data-settings='{"telephone":"6285779086772","mobile_only":false,"button_delay":0,"whatsapp_web":false,"qr":false,"message_views":2,"message_delay":10,"message_badge":false,"message_send":"Halo, Saya ingin beli","message_hash":"e98562a9"}'>
	<div class="joinchat__button">
		<div class="joinchat__button__open"></div>
											<div class="joinchat__button__sendtext">Open chat</div>
						<svg class="joinchat__button__send" width="60" height="60" viewbox="0 0 400 400" stroke-linecap="round" stroke-width="33">
				<path class="joinchat_svg__plain" d="M168.83 200.504H79.218L33.04 44.284a1 1 0 0 1 1.386-1.188L365.083 199.04a1 1 0 0 1 .003 1.808L34.432 357.903a1 1 0 0 1-1.388-1.187l29.42-99.427"/>
				<path class="joinchat_svg__chat" d="M318.087 318.087c-52.982 52.982-132.708 62.922-195.725 29.82l-80.449 10.18 10.358-80.112C18.956 214.905 28.836 134.99 81.913 81.913c65.218-65.217 170.956-65.217 236.174 0 42.661 42.661 57.416 102.661 44.265 157.316"/>
			</svg>
										</div>
			<div class="joinchat__box">
			<div class="joinchat__header">
									<a class="joinchat__powered" href="https://join.chat/en/powered/?site=Pinjaman%20Taspen%20PNS%2C%20Taspen%20Pensiunan%2C%20Tabungan%20Pensiun%2C%20Taspen%20Bekasi%2C%20Kredit%20Pensiun%2C%20Kredit%20Bekasi%2C%20PT%20BPR%20DP%20TASPEN%2C%20PT%20Bank%20Perkreditan%20Rakyat%20Dana%20Pensiun%20TASPEN%2C%20PT%20Bank%20Perkreditan%20Rakyat%20Dana%20Pensiun%20TASPEN&#038;url=https%3A%2F%2Fbankdptaspen.co.id%2Fsekilas-tentang" rel="nofollow noopener" target="_blank">
						
					</a>
								<div class="joinchat__close" title="Close"></div>
			</div>
			<div class="joinchat__box__scroll">
				<div class="joinchat__box__content">
					<div class="joinchat__message">Halo, Saya ingin beli</div>				</div>
			</div>
		</div>
		<svg style="width:0;height:0;position:absolute"><defs><clipPath id="joinchat__peak_l"><path d="M17 25V0C17 12.877 6.082 14.9 1.031 15.91c-1.559.31-1.179 2.272.004 2.272C9.609 18.182 17 18.088 17 25z"/></clipPath><clipPath id="joinchat__peak_r"><path d="M0 25.68V0c0 13.23 10.92 15.3 15.97 16.34 1.56.32 1.18 2.34 0 2.34-8.58 0-15.97-.1-15.97 7Z"/></clipPath></defs></svg>
	</div>
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
<script type="text/javascript" src="https://bankdptaspen.co.id/wp-content/plugins/creame-whatsapp-me/public/js/joinchat.min.js?ver=5.2.1" id="joinchat-js"></script>
</body>

</html>