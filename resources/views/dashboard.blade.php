<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile Settings</title>

    <!-- CSS FILES -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/slick.css"/>
    <link href="assets/css/tooplate-little-fashion.css" rel="stylesheet">
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet">
    <!-- Tooplate 2127 Little Fashion - https://www.tooplate.com/view/2127-little-fashion -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    <style>
        .profile-picture-section,
        .upload-art-section,
        .chat-section,
        .wishlist-section,
        .track-order-section {
            display: none;
        }

        .profile-picture-container {
            text-align: center;
            margin-top: 50px;
        }

        .profile-picture-dropzone {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px dashed #ccc;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: 0 auto;
            background-color: #f9f9f9;
        }

        .profile-picture-dropzone:hover {
            background-color: #e9e9e9;
        }

        .profile-picture-dropzone p {
            margin: 0;
            color: #888;
            text-align: center;
        }

        .upload-art-container {
            text-align: center;
            margin-top: 50px;
        }

        .upload-art-dropzone {
            border: 2px dashed #ccc;
            padding: 20px;
            border-radius: 10px;
            cursor: pointer;
        }

        .chat-container {
            text-align: center;
            margin-top: 50px;
        }

        .chat-box {
            width: 100%;
            max-width: 600px;
            height: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            margin-bottom: 20px;
        }

        .chat-input {
            display: flex;
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            outline: none;
        }

        .chat-input button {
            padding: 10px 20px;
            border: 1px solid #ccc;
            border-radius: 0 5px 5px 0;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #0056b3;
        }

        .profile-pic {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            object-fit: cover;
        }

        #cropper-modal {
            display: none;
            position: fixed;
            z-index: 1050;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.5);
        }

        #cropper-modal .modal-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 10px;
        }

        #cropper-modal .cropper-container {
            width: 100%;
            max-width: 500px;
            height: 300px;
        }

        #cropper-modal button {
            margin-top: 10px;
        }

        .wishlist-section,
        .track-order-section {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>

<body onload="loadProfilePicture()">
    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <strong><span>Artist</span> IO</strong>
                </a>

                <div class="d-lg-none">
                    <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                    <a href="product-detail.html" class="bi-bag custom-icon"></a>
                </div>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.html">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.html">FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <div class="d-none d-lg-block">
                        <a href="sign-in.html" class="bi-person custom-icon me-3" id="profile-icon">
                            <img id="profile-icon-img" src="assets/images/default-avatar.png" class="profile-pic"
                                alt="Profile Icon">
                        </a>
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
                            <span class="d-block text-primary">Profile</span>
                            <span class="d-block text-dark">Settings</span>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <section class="profile-settings section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action"
                                id="profile-picture-button">Profile Picture</a>
                            <a href="#" class="list-group-item list-group-item-action"
                                id="upload-art-button">Upload Art</a>
                            <a href="#" class="list-group-item list-group-item-action" id="chat-button">Chat</a>
                            <a href="#" class="list-group-item list-group-item-action"
                                id="wishlist-button">Wishlist</a>
                            <a href="#" class="list-group-item list-group-item-action"
                                id="track-order-button">Track Order</a>
                            <a href="#" class="list-group-item list-group-item-action"
                                id="check-analytics-button">Check Analytics</a>
                            <a href="#" class="list-group-item list-group-item-action" id="logout-button">Logout</a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="profile-content">
                            <div class="default-section">
                                <h2 class="mb-4">Welcome to your profile settings</h2>
                                <p>Use the buttons on the left to navigate through your profile options.</p>
                            </div>
                            <div class="profile-picture-section">
                                <div class="profile-picture-container">
                                    <div class="profile-picture-dropzone" id="profile-picture-dropzone">
                                        <p>Click to upload profile picture</p>
                                    </div>
                                    <input type="file" id="profile-picture-upload" style="display: none;">
                                    <button type="button" class="btn custom-btn mt-3" id="upload-profile-btn">Upload
                                        Profile Picture</button>
                                </div>
                            </div>
                            <div class="upload-art-section">
                                <div class="upload-art-container">
                                    <div class="upload-art-dropzone" id="upload-art-dropzone">
                                        <p>Click to upload art</p>
                                    </div>
                                    <input type="file" id="art-upload" style="display: none;">
                                    <button type="button" class="btn custom-btn mt-3" id="upload-art-btn">Upload Art</button>
                                </div>
                            </div>
                            <div class="chat-section">
                                <div class="chat-container">
                                    <div class="chat-box">
                                        <div class="chat-messages" id="chat-messages"></div>
                                        <div class="chat-input">
                                            <input type="text" id="chat-input" placeholder="Type a message...">
                                            <button id="send-message">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wishlist-section">
                                <h2>Wishlist</h2>
                                <p>Your wishlist items will be displayed here.</p>
                                <div id="wishlist-items">
                                    <!-- Wishlist items will be dynamically loaded here -->
                                </div>
                            </div>
                            <div class="track-order-section">
                                <h2>Track Order</h2>
                                <p>Your order tracking information will be displayed here.</p>
                                <div id="order-tracking">
                                    <!-- Order tracking information will be dynamically loaded here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Cropper Modal -->
    <div id="cropper-modal">
        <div class="modal-content">
            <div class="cropper-container">
                <img id="cropper-image" src="" alt="Image to crop">
            </div>
            <button id="crop-image">Crop Image</button>
            <button id="cancel-crop">Cancel</button>
        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/click-scroll.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://unpkg.com/cropperjs"></script>

    <script>
        document.getElementById('profile-picture-button').addEventListener('click', function () {
            showSection('profile-picture-section');
        });

        document.getElementById('upload-art-button').addEventListener('click', function () {
            showSection('upload-art-section');
        });

        document.getElementById('chat-button').addEventListener('click', function () {
            showSection('chat-section');
        });

        document.getElementById('wishlist-button').addEventListener('click', function () {
            showSection('wishlist-section');
            loadWishlistItems();
        });

        document.getElementById('track-order-button').addEventListener('click', function () {
            showSection('track-order-section');
            loadOrderTracking();
        });

        function showSection(sectionClass) {
            document.querySelectorAll('.profile-content > div').forEach(section => {
                section.style.display = 'none';
            });
            document.querySelector(`.${sectionClass}`).style.display = 'block';
        }
        
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


        /*function loadWishlistItems() {
            const wishlistItems = [
                { name: 'By the Sea', description: 'Painting showcasing a boat by the sea' },
                { name: 'Pollution', description: 'A painting depicting effects of pollution ' },
                // Add more wishlist items here
            ];

            const wishlistContainer = document.getElementById('wishlist-items');
            wishlistContainer.innerHTML = '';

            wishlistItems.forEach(item => {
                const itemElement = document.createElement('div');
                itemElement.className = 'wishlist-item';
                itemElement.innerHTML = `<h3>${item.name}</h3><p>${item.description}</p>`;
                wishlistContainer.appendChild(itemElement);
            });
        }*/

        function loadOrderTracking() {
            const orderTrackingInfo = [
                { orderId: '12345', status: 'Shipped' },
                { orderId: '67890', status: 'Delivered' },
                // Add more order tracking information here
            ];

            const orderTrackingContainer = document.getElementById('order-tracking');
            orderTrackingContainer.innerHTML = '';

            orderTrackingInfo.forEach(order => {
                const orderElement = document.createElement('div');
                orderElement.className = 'order-tracking-item';
                orderElement.innerHTML = `<h3>Order ID: ${order.orderId}</h3><p>Status: ${order.status}</p>`;
                orderTrackingContainer.appendChild(orderElement);
            });
        }

         // Logout functionality
         document.getElementById('logout-button').addEventListener('click', () => {
            fetch('/logout', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
                .then(response => {
                    if (response.ok) {
                        window.location.href = 'homepage';
                    } else {
                        alert('Logout failed. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Logout failed. Please try again.');
                });
        });

        

        // Profile Picture Upload and Crop
        const profilePictureDropzone = document.getElementById('profile-picture-dropzone');
        const profilePictureUpload = document.getElementById('profile-picture-upload');
        const cropperModal = document.getElementById('cropper-modal');
        const cropperImage = document.getElementById('cropper-image');
        let cropper;

        profilePictureDropzone.addEventListener('click', () => {
            profilePictureUpload.click();
        });

        profilePictureUpload.addEventListener('change', (e) => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    cropperImage.src = event.target.result;
                    cropperModal.style.display = 'block';
                    cropper = new Cropper(cropperImage, {
                        aspectRatio: 1,
                        viewMode: 1,
                        autoCropArea: 1,
                    });
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('crop-image').addEventListener('click', () => {
            const canvas = cropper.getCroppedCanvas();
            canvas.toBlob((blob) => {
                const url = URL.createObjectURL(blob);
                const profileIconImg = document.getElementById('profile-icon-img');
                profileIconImg.src = url;
                cropperModal.style.display = 'none';
            });
        });

        document.getElementById('cancel-crop').addEventListener('click', () => {
            cropperModal.style.display = 'none';
            cropper.destroy();
        });

        // Load Profile Picture from LocalStorage
        function loadProfilePicture() {
            const profilePicture = localStorage.getItem('profilePicture');
            if (profilePicture) {
                document.getElementById('profile-icon-img').src = profilePicture;
            }
        }

        // Save Profile Picture to LocalStorage
        document.getElementById('upload-profile-btn').addEventListener('click', () => {
            const profileIconImg = document.getElementById('profile-icon-img');
            localStorage.setItem('profilePicture', profileIconImg.src);
        });
    </script>
</body>

</html>
