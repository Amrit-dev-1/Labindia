<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Labindian 3</title>
    
    <!-- Bootstrap CSS (latest version) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Swiper CSS (latest version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.0/swiper-bundle.min.css" />

    <!-- Font Awesome CSS (latest version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Owl Carousel CSS (latest version) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <link rel="stylesheet" href="https://unpkg.com/locomotive-scroll/dist/locomotive-scroll.css">

    <!-- AOS CSS (latest version) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Barlow:wght@400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>


<body>
  

    <div class="top-bar">
        <div>
            <a href="#">Contact</a>
            <a href="#">Email</a>
        </div>
        <div>
            <a href="#">Request a Quote</a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo base_url() ?>Home">
                <img src="<?php echo base_url() ?>assets/images/Logo.png" alt="Logo" class="main-logo">
            </a>

            <!-- Toggle button for smaller screens -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation links on the right side -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo base_url() ?>Home">
                            <img class="header-icon" src="<?php echo base_url() ?>assets/images/home.png" alt="">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() ?>About">About us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Applications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News & Events </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img class="header-search" src="<?php echo base_url() ?>assets/images/search.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>