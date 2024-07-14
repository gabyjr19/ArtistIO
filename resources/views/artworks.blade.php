<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Artist IO Artworks</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/slick.css"/>
    <link href="assets/css/tooplate-little-fashion.css" rel="stylesheet">
    <style>
        /* Additional CSS for product page layout */
        .product-thumb {
            position: relative;
            margin-bottom: 30px;
        }
        .product-thumb img {
            width: 100%;
        }
        .product-info {
            background-color: #fff;
            padding: 15px;
            text-align: center;
        }
        .product-title {
            font-size: 16px;
            margin-bottom: 10px;
        }
        .product-price {
            color: #555;
            font-size: 14px;
        }
        .product-alert {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #f8d7da;
            padding: 5px 10px;
            color: #721c24;
            border-radius: 5px;
        }
        .product-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            color: #555;
        }
        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
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
                            <a class="nav-link" href="{{ route('homepage')}}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('story')}}">Story</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('artworks')}}">Artworks</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faqs')}}">FAQs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact')}}">Contact</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                        <a href="product-detail.html" class="bi-bag custom-icon"></a>
                    </div>
                </div>
            </div>
        </nav>

        <header class="site-header section-padding d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12">
                        <h1>
                            <span class="d-block text-primary">Choose your</span>
                            <span class="d-block text-dark">artwork!</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="products section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12 section-title">
                        <h2>Most Searched</h2>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{route('product-detail')}}">
                                <img src="assets/images/product/Art-1.jpg" class="img-fluid product-image" alt="">
                            </a>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="{{route('product-detail')}}" class="product-title-link">Tears</a>
                                </h5>
                                <p class="product-p">Showcasing humanity</p>
                                <span class="product-price">Sh25000</span>
                            </div>
                            <div class="product-top">
                                <span class="product-alert">New Arrival</span>
                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{route('product-detail')}}">
                                <img src="assets/images/product/Art-2.jpg" class="img-fluid product-image" alt="">
                            </a>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product-detail.html" class="product-title-link">Waves</a>
                                </h5>
                                <p class="product-p">Waves of the Ocean in a differnt light</p>
                                <span class="product-price">Sh35000</span>
                            </div>
                            <div class="product-top">
                                <span class="product-alert">Discounted Price</span>
                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{route('product-detail')}}">
                                <img src="assets/images/product/Art-3.jpg" class="img-fluid product-image" alt="">
                            </a>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product-detail.html" class="product-title-link">Acrylic Paint</a>
                                </h5>
                                <p class="product-p">Nature made another world</p>
                                <span class="product-price">Sh45000</span>
                            </div>
                            <div class="product-top">
                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{route('product-detail')}}">
                                <img src="assets/images/product/Art-4.jpg" class="img-fluid product-image" alt="">
                            </a>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="{{route('product-detail')}}" class="product-title-link">Dots</a>
                                </h5>
                                <p class="product-p">Dots connecting our life</p>
                                <span class="product-price">Sh50000</span>
                            </div>
                            <div class="product-top">
                                <span class="product-alert">Trending</span>
                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 section-title">
                        <h2>New arrivals</h2>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{route('product-detail')}}">
                                <img src="assets/images/product/Art-5.jpg" class="img-fluid product-image" alt="">
                            </a>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="product-detail.html" class="product-title-link">Flying Fish</a>
                                </h5>
                                <p class="product-p">Who said fish can't fly?</p>
                                <span class="product-price">Sh10000</span>
                            </div>
                            <div class="product-top">
                                <a href="#" class="bi-heart-fill product-icon"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mb-3">
                        <div class="product-thumb">
                            <a href="{{route('product-detail')}}">
                                <img src="assets/images/product/Art-6.jpg" class="img-fluid product-image" alt="">
                            </a>
                            <div class="product-info">
                                <h5 class="product-title">
                                    <a href="{{route('product-detail')}}" class="product-title-link">Water Paint</a>
                                </h5>
                                <p class="product-p">To make you smile</p>
                                <span class="product-price">Sh20000</span>
                            </div>
                            <div class="product-top">
                                <a href="#" class="bi-heart-fill product-icon"></a>
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
                    <h4 class="text-white mb-3"><a href="index.html">Little</a> Fashion</h4>
                    <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">Copyright © 2022 <strong>Little Fashion</strong></p>
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
    <script src="assets/js/jquery.min.js" async></script>
    <script src="assets/js/bootstrap.bundle.min.js" defer></script>
    <script src="assets/js/Headroom.js" async></script>
    <script src="assets/js/jQuery.headroom.js" async></script>
    <script src="assets/js/slick.min.js" async></script>
    <script src="assets/js/custom.js" defer></script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Add to Wishlist
    document.querySelectorAll('.bi-heart-fill.product-icon').forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default action
            const name = button.getAttribute('data-name');
            const description = button.getAttribute('data-description');
            addToWishlist(name, description);
        });
    });

    function addToWishlist(name, description) {
        const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        const itemExists = wishlist.some(item => item.name === name);
        
        if (!itemExists) {
            wishlist.push({ name, description });
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            alert(`${name} has been added to your wishlist!`);
        } else {
            alert(`${name} is already in your wishlist!`);
        }
    }

    // Load Wishlist items
    function loadWishlist() {
        const wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
        const wishlistContainer = document.getElementById('wishlist-items');
        wishlistContainer.innerHTML = '';

        if (wishlist.length > 0) {
            wishlist.forEach(item => {
                const wishlistItem = document.createElement('div');
                wishlistItem.className = 'wishlist-item';
                wishlistItem.innerHTML = `<h5>${item.name}</h5><p>${item.description}</p>`;
                wishlistContainer.appendChild(wishlistItem);
            });
        } else {
            wishlistContainer.innerHTML = '<p>Your wishlist is empty.</p>';
        }
    }

    // Load wishlist when the Wishlist section is displayed
    document.getElementById('wishlist-button').addEventListener('click', () => {
        loadWishlist();
    });

    // Initial load of wishlist items on page load
    loadWishlist();
});

</script>


</body>
</html>
