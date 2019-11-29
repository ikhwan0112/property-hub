<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PropertyHub</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>

    <!-- Styles -->
    <style>
    html, body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Nunito', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 50vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
        margin-bottom: -54px;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
    }

    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .upper-img{
        background-image: url({{ asset('images/bg.jpg') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100vh;
        width: 100%;
    }

    .lower-img{
        background-image: url({{ asset('images/footer-bg.jpg') }});
    }
</style>
</head>
<body>
    <div class="flex-center position-ref full-height upper-img">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>

        @endif

        <!-- Hero section -->
        <section class="hero-section set-bg">
            <div class="container hero-text text-white">
                <h2>find your place with our local life style</h2>
                <p>Search real estate property records, houses, condos, land and more on leramiz.com®.<br>Find property info from the most comprehensive source data.</p>
                <a href="#" class="site-btn">VIEW DETAIL</a>
            </div>
        </section>
        <!-- Hero section end -->
    </div>

    <!-- Filter form section -->
    <div class="filter-search">
        <div class="container">
            <form class="filter-form">
                <input type="text" placeholder="Enter a street name, address number or keyword">
                <select>
                    <option value="City">City</option>
                </select>
                <select>
                    <option value="City">State</option>
                </select>
                <button class="site-btn fs-submit">SEARCH</button>
            </form>
        </div>
    </div>
    <!-- Filter form section end -->

    <!-- feature section -->
    <section class="feature-section spad">
        <div class="container">
            <div class="section-title text-center">
                <h3>Featured Listings</h3>
                <p>Browse houses and flats for sale and to rent in your area</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/1.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>1963 S Crescent Heights Blvd</h5>
                                <p><i class="fa fa-map-marker"></i> Los Angeles, CA 90034</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 800 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 10 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 6 Bathrooms</p>
                                    </div>  
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Tony Holland</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>  
                                </div>
                            </div>
                            <a href="#" class="room-price">$1,200,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/2.jpg">
                            <div class="sale-notic">FOR SALE</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>305 North Palm Drive</h5>
                                <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                    </div>  
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Gina Wesley</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>  
                                </div>
                            </div>
                            <a href="#" class="room-price">$4,500,000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- feature -->
                    <div class="feature-item">
                        <div class="feature-pic set-bg" data-setbg="img/feature/3.jpg">
                            <div class="rent-notic">FOR Rent</div>
                        </div>
                        <div class="feature-text">
                            <div class="text-center feature-title">
                                <h5>305 North Palm Drive</h5>
                                <p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
                            </div>
                            <div class="room-info-warp">
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-th-large"></i> 1500 Square foot</p>
                                        <p><i class="fa fa-bed"></i> 16 Bedrooms</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-car"></i> 2 Garages</p>
                                        <p><i class="fa fa-bath"></i> 8 Bathrooms</p>
                                    </div>  
                                </div>
                                <div class="room-info">
                                    <div class="rf-left">
                                        <p><i class="fa fa-user"></i> Gina Wesley</p>
                                    </div>
                                    <div class="rf-right">
                                        <p><i class="fa fa-clock-o"></i> 1 days ago</p>
                                    </div>  
                                </div>
                            </div>
                            <a href="#" class="room-price">$2,500/month</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

        <!-- Footer section -->
    <footer class="footer-section set-bg lower-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 footer-widget">
                    <img src="img/logo.png" alt="">
                    <p>Lorem ipsum dolo sit azmet, consecter dipise consult  elit. Maecenas mamus antesme non anean a dolor sample tempor nuncest erat.</p>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 footer-widget">
                    <div class="contact-widget">
                        <h5 class="fw-title">CONTACT US</h5>
                        <p><i class="fa fa-map-marker"></i>3711-2880 Nulla St, Mankato, Mississippi </p>
                        <p><i class="fa fa-phone"></i>(+88) 666 121 4321</p>
                        <p><i class="fa fa-envelope"></i>info.leramiz@colorlib.com</p>
                        <p><i class="fa fa-clock-o"></i>Mon - Sat, 08 AM - 06 PM</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-nav">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Featured Listing</a></li>
                        <li><a href="">About us</a></li>
                        <li><a href="">Pages</a></li>
                        <li><a href="">Blog</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->
</body>
</html>
