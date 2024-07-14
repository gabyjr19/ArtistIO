<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ArtistIO - About Page</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="assets/css/bootstrap-icons.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="assets/css/slick.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link href="assets/css/tooplate-little-fashion.css" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/css/slick.css" rel="stylesheet">
        <link href="assets/css/tooplate-little-fashion.css" rel="stylesheet">
    </noscript>

    <style>
        /* Preloader CSS */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid #3498db;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Ensure content is hidden initially to prevent FOUC (Flash of Unstyled Content) */
        body {
            display: none;
        }
    </style>

    <script>
        // Remove preloader and show content once the page is fully loaded
        window.addEventListener('load', function() {
            document.querySelector('.preloader').style.display = 'none';
            document.body.style.display = 'block';
        });
    </script>
</head>

<body>
    <section class="preloader">
        <div class="spinner"></div>
    </section>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <strong><span>Artist</span> IO</strong>
                </a>
                <div class="d-lg-none">
                    <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                    <a href="product-detail.html" class="bi-bag custom-icon"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('story')}}">Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('artworks')}}">Artworks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('faqs')}}">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <div class="d-none d-lg-block">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>
                </div>
            </div>
        </nav>

        <header class="site-header section-padding-img site-header-image">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12 header-info">
                        <h1>
                            <span class="d-block text-primary">Company</span>
                            <span class="d-block text-dark">Fashion</span>
                        </h1>
                    </div>
                </div>
            </div>
            <img src="assets/images/header/businesspeople-meeting-office-working.jpg" class="header-image img-fluid" alt="">
        </header>

        <section class="team section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5">Meet our <span>team</span></h2>
                    </div>

                    <div class="col-lg-4 mb-4 col-12">
                        <div class="team-thumb d-flex align-items-center">
                            <img src="assets/images/people/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">
                            <div class="team-info">
                                <h5 class="mb-0">Don</h5>
                                <strong class="text-muted">Product, VP</strong>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#don">
                                    <i class="bi-plus-circle-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4 col-12">
                        <div class="team-thumb d-flex align-items-center">
                            <img src="assets/images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">
                            <div class="team-info">
                                <h5 class="mb-0">Kelly</h5>
                                <strong class="text-muted">Marketing</strong>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#kelly">
                                    <i class="bi-plus-circle-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-lg-0 mb-4 col-12">
                        <div class="team-thumb d-flex align-items-center">
                            <img src="assets/images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image team-image me-4" alt="">
                            <div class="team-info">
                                <h5 class="mb-0">Marie</h5>
                                <strong class="text-muted">Founder</strong>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn custom-modal-btn" data-bs-toggle="modal" data-bs-target="#marie">
                                    <i class="bi-plus-circle-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonial section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto col-11">
                        <h2 class="text-center">Customer love, <br> <span>Little</span> Fashion</h2>
                        <div class="slick-testimonial">
                            <div class="slick-testimonial-caption">
                                <p class="lead">Over three years in business, We’ve had the chance to work on a variety of projects, with companies Lorem ipsum dolor sit amet</p>
                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="assets/images/people/senior-man-wearing-white-face-mask-covid-19-campaign-with-design-space.jpeg" class="img-fluid custom-circle-image me-3" alt="">
                                    <span>George, <strong class="text-muted">Digital Art Fashion</strong></span>
                                </div>
                            </div>
                            <div class="slick-testimonial-caption">
                                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="assets/images/people/beautiful-woman-face-portrait-brown-background.jpeg" class="img-fluid custom-circle-image me-3" alt="">
                                    <span>Charlotte, <strong class="text-muted">Artsy Fashion</strong></span>
                                </div>
                            </div>
                            <div class="slick-testimonial-caption">
                                <p class="lead">Incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                                <div class="slick-testimonial-client d-flex align-items-center mt-4">
                                    <img src="assets/images/people/portrait-british-woman.jpeg" class="img-fluid custom-circle-image me-3" alt="">
                                    <span>Samantha, <strong class="text-muted">Fasion Stylist</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js" defer></script>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/jquery.sticky.js" defer></script>
    <script src="assets/js/click-scroll.js" defer></script>
    <script src="assets/js/counter.js" defer></script>
    <script src="assets/js/custom.js" defer></script>
</body>
</html>
