<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ArtistIO</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/tooplate-little-fashion.css" rel="stylesheet">
</head>

<body>
    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong><span>Artist</span> IO</strong></a>
                <div class="d-lg-none">
                    @guest
                    <a href="{{ route('register') }}" class="bi-person custom-icon me-3"></a>
                    @endguest
                    <a href="product-detail.html" class="bi-bag custom-icon"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.html">Story</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('artworks') }}">Artwork</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">FAQs</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                    <div class="d-none d-lg-block">
                        @guest
                        <a href="{{ route('register') }}" class="bi-person custom-icon me-3"></a>
                        @endguest
                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>
                </div>
            </div>
        </nav>

        <section class="slick-slideshow">
            <div class="slick-custom">
                <img src="assets/images/slideshow/Blog-12.jpg" class="img-fluid" alt="">
                <div class="slick-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-10">
                                <h1 class="slick-title">Great Team</h1>
                                <p class="lead text-white mt-lg-3 mb-lg-5">ArtistIO has a team available to help with any artist needs.</p>
                                <a href="about.html" class="btn custom-btn">Learn more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-custom">
                <img src="assets/images/slideshow/Blog-10.jpg" class="img-fluid" alt="">
                <div class="slick-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-10">
                                <h1 class="slick-title">Excellent Design</h1>
                                <p class="lead text-white mt-lg-3 mb-lg-5">ArtistIO has been designed to assist with easy navigation..</p>
                                <a href="product.html" class="btn custom-btn">Explore Artworks</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slick-custom">
                <img src="assets/images/slideshow/Blog-11.jpg" class="img-fluid" alt="">
                <div class="slick-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-10">
                                <h1 class="slick-title">Talk to us</h1>
                                <p class="lead text-white mt-lg-3 mb-lg-5">ArtistIO admins are ready to hear from you.</p>
                                <a href="contact.html" class="btn custom-btn">Work with us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="mb-5">Get started with <span>Artist</span> IO</h2>
                    </div>
                    <div class="col-lg-2 col-12 mt-auto mb-auto">
                        <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Introduction</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">How we work?</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-skill-tab" data-bs-toggle="pill" data-bs-target="#pills-skill" type="button" role="tab" aria-controls="pills-skill" aria-selected="false">Capabilities</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-10 col-12">
                        <div class="tab-content mt-2" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-7 col-12">
                                        <img src="assets/images/pim-chu-z6NZ76_UTDI-unsplash.jpeg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-12">
                                        <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                            <h4 class="mb-3">Great <span>Place</span> <br>To Post <span>your</span> Art</h4>
                                            <p>ArtistIO is an upcoming artists heaven. No need to worry about suffering commissions and monthly subscriptions</p>
                                            <p>As an artist, you will have full control of your profile and be able to chat and collaborate with other artists.</p>
                                            <p>Get ready for the journey of a lifetime!</p>
                                            <div class="mt-2 mt-lg-auto">
                                                <a href="about.html" class="custom-link mb-2">
                                                    More about us
                                                    <i class="bi-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">
                                <div class="row">
                                    <div class="col-lg-7 col-12">
                                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/uVtee7rEZi0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="col-lg-5 col-12">
                                        <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                            <h4 class="mb-3">You are NOT <span>allowed</span> <br> to redistribute <span>this</span> template</h4>
                                            <p>Please tell your friends about Tooplate website. That would be very helpful.</p>
                                            <p>If you have any question regarding this HTML template, you can <a href="mailto:contact@tooplate.com">email us</a> or message us via <a href="https://www.facebook.com/tooplate/">Facebook page</a>.</p>
                                            <div class="mt-2 mt-lg-auto">
                                                <a href="contact.html" class="custom-link mb-2">
                                                    Work with us
                                                    <i class="bi-arrow-right ms-2"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-skill" role="tabpanel" aria-labelledby="pills-skill-tab">
                                <div class="row">
                                    <div class="col-lg-7 col-12">
                                        <img src="assets/images/christina-wocintechchat-com-2XiMrXhOLN8-unsplash.jpeg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-5 col-12">
                                        <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                            <h4 class="mb-3">We’re <span>Building</span> <br>Our <span>Team</span></h4>
                                            <p>This HTML template can be converted into your desired CMS theme.</p>
                                            <p>If you wish to support us, please consider <a href="https://paypal.me/tooplate" target="_blank">making a small contribution</a> via PayPal.</p>
                                            <div class="mt-2 mt-lg-auto">
                                                <a href="sign-up.html" class="custom-link mb-2">
                                                    Sign Up
                                                    <i class="bi-arrow-right ms-2"></i>
                                                </a>
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

        <section class="testimonials section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h2 class="mb-lg-5 mb-4">What they say about us</h2>
                        <div class="testimonial-author d-flex flex-wrap align-items-center">
                            <img src="assets/images/avatar/star-rating.png" class="img-fluid avatar-image" alt="">
                            <div class="ms-4">
                                <p class="mb-2">"Most exciting website I have used. Highly recommend to any Artist!."</p>
                                <p class="testimonial-author-name mb-0">Martin Nduati</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-10 me-auto mb-4">
                    <h4 class="text-white mb-3"><a href="index.html">Artist</a> IO</h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Artist IO</strong></p>
                    <br>
                    <p class="copyright-text">Designed by <a href="https://www.tooplate.com/" target="_blank">Tooplate</a></p>
                </div>
                <div class="col-lg-5 col-8">
                    <h5 class="text-white mb-3">Sitemap</h5>
                    <ul class="footer-menu d-flex flex-wrap">
                        <li class="footer-menu-item"><a href="about.html" class="footer-menu-link">Story</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Products</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy policy</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQs</a></li>
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-4">
                    <h5 class="text-white mb-3">Social</h5>
                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                        <li><a href="#" class="social-icon-link bi-skype"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js" defer></script>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/Headroom.js" defer></script>
    <script src="assets/js/jQuery.headroom.js" defer></script>
    <script src="assets/js/slick.min.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
</body>
</html>
