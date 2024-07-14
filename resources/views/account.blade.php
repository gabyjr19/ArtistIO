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
    <link rel="stylesheet" href="assets/css/slick.css" />
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

        .description-container,
        .price-container {
            margin-top: 20px;
            text-align: center;
        }

        .description-container textarea,
        .price-container input {
            width: 100%;
            max-width: 600px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
                            <a href="#" class="list-group-item list-group-item-action" id="profile-picture-button">Profile Picture</a>
                            <a href="#" class="list-group-item list-group-item-action" id="upload-art-button">Upload Art</a>
                            <a href="#" class="list-group-item list-group-item-action" id="chat-button">Chat</a>
                            <a href="#" class="list-group-item list-group-item-action" id="wishlist-button">Wishlist</a>
                            <a href="#" class="list-group-item list-group-item-action" id="track-order-button">Track Order</a>
                            <a href="#" class="list-group-item list-group-item-action" id="check-analytics-button">Check Analytics</a>
                            <a href="#" class="list-group-item list-group-item-action" id="logout-button">Logout</a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="profile-picture-section">
                            <div class="profile-picture-container">
                                <div class="profile-picture-dropzone" id="profile-picture-dropzone">
                                    <p>Drop your profile picture here or click to upload.</p>
                                </div>
                                <button id="upload-profile-picture-button" class="btn btn-primary mt-3">Upload Profile Picture</button>
                            </div>
                        </div>

                        <div class="upload-art-section">
                            <div class="upload-art-container">
                                <div class="upload-art-dropzone" id="upload-art-dropzone">
                                    <p>Drop your art file here or click to upload.</p>
                                </div>
                                <div class="description-container">
                                    <textarea id="description" rows="4" placeholder="Enter a description..."></textarea>
                                </div>
                                <div class="price-container">
                                    <input type="text" id="price" placeholder="Enter a price...">
                                </div>
                                <button id="upload-art-submit" class="btn btn-primary mt-3">Upload Art</button>
                            </div>
                        </div>

                        <div class="chat-section">
                            <div class="chat-container">
                                <div class="chat-box">
                                    <div class="chat-messages" id="chat-messages"></div>
                                    <div class="chat-input">
                                        <input type="text" id="chat-input-field" placeholder="Type a message...">
                                        <button id="send-chat-button">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="wishlist-section">
                            <h4>Your Wishlist</h4>
                            <div class="wishlist-container" id="wishlist-container"></div>
                        </div>

                        <div class="track-order-section">
                            <h4>Track Your Order</h4>
                            <div class="track-order-container" id="track-order-container"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <div id="cropper-modal">
        <div class="modal-content">
            <div class="cropper-container">
                <img id="cropper-image" src="" alt="Cropper Image">
            </div>
            <button id="crop-button" class="btn btn-primary">Crop</button>
            <button id="cancel-crop-button" class="btn btn-secondary">Cancel</button>
        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.sticky.js"></script>
    <script src="assets/js/click-scroll.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://unpkg.com/cropperjs"></script>
    <script src="assets/js/cropper.js"></script>
    <script src="assets/js/upload-art.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const profilePictureSection = document.querySelector(".profile-picture-section");
            const uploadArtSection = document.querySelector(".upload-art-section");
            const chatSection = document.querySelector(".chat-section");
            const wishlistSection = document.querySelector(".wishlist-section");
            const trackOrderSection = document.querySelector(".track-order-section");

            const profilePictureButton = document.getElementById("profile-picture-button");
            const uploadArtButton = document.getElementById("upload-art-button");
            const chatButton = document.getElementById("chat-button");
            const wishlistButton = document.getElementById("wishlist-button");
            const trackOrderButton = document.getElementById("track-order-button");

            profilePictureButton.addEventListener("click", function() {
                profilePictureSection.style.display = "block";
                uploadArtSection.style.display = "none";
                chatSection.style.display = "none";
                wishlistSection.style.display = "none";
                trackOrderSection.style.display = "none";
            });

            uploadArtButton.addEventListener("click", function() {
                profilePictureSection.style.display = "none";
                uploadArtSection.style.display = "block";
                chatSection.style.display = "none";
                wishlistSection.style.display = "none";
                trackOrderSection.style.display = "none";
            });

            chatButton.addEventListener("click", function() {
                profilePictureSection.style.display = "none";
                uploadArtSection.style.display = "none";
                chatSection.style.display = "block";
                wishlistSection.style.display = "none";
                trackOrderSection.style.display = "none";
            });

            wishlistButton.addEventListener("click", function() {
                profilePictureSection.style.display = "none";
                uploadArtSection.style.display = "none";
                chatSection.style.display = "none";
                wishlistSection.style.display = "block";
                trackOrderSection.style.display = "none";
            });

            trackOrderButton.addEventListener("click", function() {
                profilePictureSection.style.display = "none";
                uploadArtSection.style.display = "none";
                chatSection.style.display = "none";
                wishlistSection.style.display = "none";
                trackOrderSection.style.display = "block";
            });
        });

       // Upload Art Section
const uploadArtDropzone = document.getElementById("upload-art-dropzone");
const uploadArtSubmit = document.getElementById("upload-art-submit");
let artFile = null;

uploadArtDropzone.addEventListener("dragover", function(event) {
    event.preventDefault();
    uploadArtDropzone.classList.add("dragging");
});

uploadArtDropzone.addEventListener("dragleave", function() {
    uploadArtDropzone.classList.remove("dragging");
});

uploadArtDropzone.addEventListener("drop", function(event) {
    event.preventDefault();
    uploadArtDropzone.classList.remove("dragging");

    artFile = event.dataTransfer.files[0];
    uploadArtDropzone.textContent = artFile.name;
});

uploadArtDropzone.addEventListener("click", function() {
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.accept = "image/*";
    fileInput.style.display = "none";

    fileInput.addEventListener("change", function() {
        artFile = fileInput.files[0];
        uploadArtDropzone.textContent = artFile.name;
    });

    document.body.appendChild(fileInput);
    fileInput.click();
    document.body.removeChild(fileInput);
});

uploadArtSubmit.addEventListener("click", function() {
    if (!artFile) {
        alert("Please select an art file.");
        return;
    }

    const description = document.getElementById("description").value;
    const price = document.getElementById("price").value;

    const formData = new FormData();
    formData.append("art_image", artFile);
    formData.append("description", description);
    formData.append("price", price);

    // Send AJAX request to upload art
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "{{ route('artworks.store') }}", true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert("Art uploaded successfully!");
        } else {
            alert("Failed to upload art. Please try again.");
        }
    };
    xhr.send(formData);
});

    </script>

    <script>
        document.getElementById('logout-button').addEventListener('click', function() {
            window.location.href = 'index.html';
        });
    </script>
</body>

</html>
