<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Donate App</title>
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset('images/pro.png')}}">
    <link rel="stylesheet" href="{{asset('home/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli">
    <link rel="stylesheet" href="{{asset('home/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">
</head>

<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="{{asset('images/pro.png')}}" height="45">&nbsp;Donate</a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler float-right" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#features">Features</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                @if(\Illuminate\Support\Facades\Auth::user())
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger"
                        @if(\Illuminate\Support\Facades\Auth::user()->role_id == 1)
                            href="{{route('root')}}"
                        @elseif(\Illuminate\Support\Facades\Auth::user()->role_id == 2)
                            href="{{route('admin')}}"
                        @endif>Admin</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<header class="masthead" style="background: url('{{asset('home/img/bg-pattern.png')}}'), linear-gradient(to left, #31af91, #005541);height: 100%;">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-lg-7 my-auto">
                <div class="mx-auto header-content">
                    <h1 class="pulse animated mb-5">Donate is an app that simplifies and makes the blood donation procedure easier!</h1>
                </div>
            </div>
            <div class="col-lg-5 my-auto">
                <div class="device-container">
                    <div class="bounce animated device-mockup iphone6_plus portrait white">
                        <div data-bs-hover-animate="bounce" class="device" style="background-image: url('{{asset('home/img/pixel.png')}}');">
                            <div class="screen"><img class="img-fluid" src="{{asset('home/img/Home.png')}}"></div>
                            <div class="button"></div>
                        </div>
                    </div>
                </div>
                <div class="iphone-mockup"></div>
            </div>
        </div>
    </div>
</header>
<section id="download" class="download text-center bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2 data-aos="fade-right" data-aos-delay="50" data-aos-once="true" class="section-heading">Will Available Soon!</h2>
                <p data-aos="fade-left" data-aos-delay="300" data-aos-once="true">Our app will available on Google Play Store!</p>
                <div class="badges"><a class="badge-link" href="#">
                        <img data-aos="fade-up" data-aos-delay="500" data-aos-once="true" src="{{asset('home/img/google-play-badge.svg')}}"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="features" class="features">
    <div class="container">
        <div class="section-heading text-center">
            <h2 data-aos="fade-right" data-aos-delay="400" data-aos-once="true">Be Kind &amp; Be Happy!</h2>
            <p data-aos="fade-left" data-aos-delay="800" data-aos-once="true" class="text-muted">Check out what you can do with Donate!</p>
            <hr>
        </div>
        <div class="row">
            <div class="col-lg-4 my-auto">
                <div class="device-container">
                    <div class="device-mockup iphone6_plus portrait white">
                        <div data-aos="fade-up" data-aos-delay="1200" data-aos-once="true" class="device" style="background-image: url('{{asset('home/img/pixel.png')}}');">
                            <div class="screen"><img class="img-fluid" src="{{asset('home/img/Home.png')}}"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 my-auto">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div data-aos="fade-right" data-aos-delay="1500" data-aos-once="true" class="feature-item"><i class="icon-screen-smartphone text-primary"></i>
                                <h3>Easy to Use</h3>
                                <p class="text-muted">With one button you can start&nbsp;<br>the donation process!</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-right" data-aos-delay="1800" data-aos-once="true" class="feature-item"><i class="icon-present text-primary"></i>
                                <h3>Rewards</h3>
                                <p class="text-muted">Once donation is completed<br>rewards are waiting for you!</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-delay="2400" data-aos-once="true" class="feature-item"><i class="icon-tag text-primary"></i>
                                <h3>Free to Use</h3>
                                <p class="text-muted">Donate is free to use</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div data-aos="fade-left" data-aos-delay="2100" data-aos-once="true" class="feature-item"><i class="icon-lock-open text-primary"></i>
                                <h3>Secure</h3>
                                <p class="text-muted">Your data are save <br>in our app!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact" class="contact bg-primary">
    <div class="container">
        <h2><span>Keep in touch with us!</span></h2>
        <div class="row no-gutters">
            <div class="col">
                <form><input class="form-control subs-form" type="email" placeholder="Enter your email address..">
                    <button class="btn btn-primary subs" type="submit">subscribe!</button>
                </form>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <p>©&nbsp;Donate 2019. All Rights Reserved.</p>
    </div>
</footer>
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/bs-animation.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="{{asset('home/js/new-age.js')}}"></script>
</body>

</html>