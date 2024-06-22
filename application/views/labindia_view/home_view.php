<!-- <div class="firstContainer-new ">
    <div class="wrapper">
        <div class="content-wrap">
            <section class="section hero text-white"> </section>
            <section class="section gradient-purple text-center">

            </section>
            <section class="section gradient text-center">
                <img src="<?php echo base_url() ?>assets/images/Logo.png" alt="Logo" class="Loader-image">

            </section>
        </div>
        <div class="image-container">
            <img src="<?php echo base_url() ?>assets/images/loader/landing-png.png" alt="image">
        </div>
    </div>
</div>
 -->


<?php $this->load->view('labindia_view/layout/head_view.php'); ?>


<div class="custom-container">


    <!-- panle 1 start -->

    <section class="panel background-color-3">

        <div class="introduction-container">
            <div class="row">
                <div class="col-md-8 element-to-animate">
                    <div class="container_video" id="videoContainer">
                        <video autoplay muted loop>
                            <source src="assets/images/video-2.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="hero-content" id="heroContent">
                            <h3>Welcome To</h3>
                            <h1>LABINDIA <span>Analytical</span> </h1>
                            <p>With over 40 years of industry expertise and a team of 500+ professionals, Labindia Analytical is your trusted partner for cutting-edge analytical solutions. Compliant with international standards, we serve 6,000+ clients and 15,000+ customers nationwide through our 12 offices across India.</p>
                            <div class="copyright ">
                                <p>© Copyright 2024. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="container-explore">
                        <div class="container-number d-flex flex-column align-items-center element-to-animate" id="containerNumber">
                            <div class="num text-center">
                                <h2>40 <span>+</span></h2>
                                <p>Years of Experience</p>
                            </div>
                            <div class="num text-center">
                                <h2>500<span>+</span></h2>
                                <p>Professionals</p>
                            </div>
                            <div class="num text-center">
                                <h2>6000 <span>+</span></h2>
                                <p>Satisfied Clients</p>
                            </div>
                        </div>
                        <div class="social-btn text-center element-to-animate mt-3">
                            <button class="btn btn-primary">Explore Product</button>
                            <div class="social-icon d-flex justify-content-center mt-2" id="socialIcons">
                                <a href="#" id="social-icon-1" class="social-link mx-2">
                                    <img src="<?php echo base_url() ?>assets/images/social-icon/Icon-1.svg" alt="Social Icon 1">
                                </a>
                                <a href="#" id="social-icon-2" class="social-link mx-2">
                                    <img src="<?php echo base_url() ?>assets/images/social-icon/Icon-2.svg" alt="Social Icon 2">
                                </a>
                                <a href="#" id="social-icon-3" class="social-link mx-2">
                                    <img src="<?php echo base_url() ?>assets/images/social-icon/Icon-3.svg" alt="Social Icon 3">
                                </a>
                                <a href="#" id="social-icon-4" class="social-link mx-2">
                                    <img src="<?php echo base_url() ?>assets/images/social-icon/Icon-4.svg" alt="Social Icon 4">
                                </a>
                                <a href="#" id="social-icon-5" class="social-link mx-2">
                                    <img src="<?php echo base_url() ?>assets/images/social-icon/Icon-5.svg" alt="Social Icon 5">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- panle 1 end -->

    <!-- 2nd panel start -->

    <section class="panel background-color-3">

        <div class="carousel-container">

            <div class="Recommened-product text-white ">
                <h1>Recommened Products</h1>
                <p>(Quick-view)</p>
            </div>
            <div class="carousel">
                <div class="card text-center  product-card-color-1">

                    <div class="detail ">
                        <div class="img-container">
                            <img src="<?php echo base_url() ?>assets/images/product/product-1.png" class="" alt="">
                        </div>
                        <h3>Product-1</h3>

                    </div>
                    <a class="product-btn know-more-btn" data-product-id="1">Know More</a>
                </div>
                <div class="card">
                    <div class="detail ">
                        <div class="img-container">
                            <img src="<?php echo base_url() ?>assets/images/product/product-2.png" class="" alt="">
                        </div>
                        <h3>Product-2</h3>

                    </div>
                    <a class="product-btn know-more-btn" data-product-id="2">Know More</a>
                </div>
                <div class="card">
                    <div class="detail ">
                        <div class="img-container">
                            <img src="<?php echo base_url() ?>assets/images/product/product-3.png" class="" alt="">
                        </div>
                        <h3>Product-3</h3>

                    </div>
                    <a class="product-btn know-more-btn" data-product-id="3">Know More</a>
                </div>

                <div class="card">
                    <div class="detail ">
                        <div class="img-container">
                            <img src="<?php echo base_url() ?>assets/images/product/product-4.png" class="" alt="">
                        </div>
                        <h3>Product-4</h3>

                    </div>
                    <a class="product-btn know-more-btn" data-product-id="4">Know More</a>
                </div>

                <div class="card">
                    <div class="detail ">
                        <div class="img-container">
                            <img src="<?php echo base_url() ?>assets/images/product/product-5.png" class="" alt="">
                        </div>
                        <h3>Product-5</h3>

                    </div>
                    <a class="product-btn know-more-btn" data-product-id="5">Know More</a>
                </div>
            </div>

        </div>
        <div id="sidebar">
            <button id="close-btn">&times;</button>
            <div id="sidebar-content">
                <div class="sidebar-header">
                    <h2>Product Details</h2>
                </div>
                <div class="sidebar-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin suscipit urna at justo viverra, at vulputate massa egestas.</p>
                    <h3>Features:</h3>
                    <ul class="features-list">
                        <li>Feature 1: High-quality material</li>
                        <li>Feature 2: Sleek and modern design</li>
                        <li>Feature 3: Affordable price</li>
                        <li>Feature 4: Excellent customer reviews</li>
                    </ul>
                    <div class="sidebar-footer">
                        <button class="buy-now-btn">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2nd panel end -->

    <!-- panel 3 start -->
    <section class="panel background-color-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="container-client-say text-white">
                        <h1>
                            What our Client Say
                        </h1>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro recusandae deleniti dolorem dolores praesentium possimus impedit eum, quae sequi nisi!</p>
                        <h3>
                            LABINDIA
                            ANALYTICAL
                        </h3>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="vertical-slider">
                        <div class="slider-container-2">
                            <div class="slider-2">
                                <div class="slide-2 active">
                                    <div class="container-title">
                                        <h3>Cia Rodriguez</h3>
                                        <span>5 hours ago</span>
                                    </div>

                                    <p>“I can confidently say that their products are top-notch. I have been using their UV-Visible Spectrophotometers for the past few years, and I have never been disappointed with its performance. The instruments are highly reliable, accurate, and efficient, which is essential for my work in the pharmaceutical industry.”</p>
                                </div>
                                <div class="slide-2">
                                    <div class="container-title">
                                        <h3>John Doe</h3>
                                        <span>2 days ago</span>
                                    </div>
                                    <p>“The service and products provided by Labindia Analytical are exceptional. Their spectrophotometers have significantly improved our lab's efficiency.”</p>
                                </div>
                                <div class="slide-2">
                                    <div class="container-title">
                                        <h3>Jane Smith</h3>
                                        <span>1 week ago</span>
                                    </div>
                                    <p>“Labindia Analytical has been a game-changer for our research. Their reliable and accurate instruments are exactly what we needed.”</p>
                                </div>
                            </div>
                            <div class="nav-dots">
                                <span class="dot active"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>



    <!-- panel 3 end  -->


    <!-- panel 4 start -->

    <section class="panel background-color-3">
        <div class="container-tab text-white">
            <div class="row">
                <div class="col-md-6">
                    <div class="heading-new text-left mt-0 p-3">
                        <h3 id="section-title" class="element-to-animate-3">What's New</h3>
                        <p id="section-description" class="element-to-animate-3">“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                            diam nonumy eirmod tempor invidunt ut labore et dolore magna”</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mt-4">
                        <div class="col-custom text-center">
                            <div class="news-tabs">
                                <button id="tab-1" class="tab-button active" onclick="showSection(1)">Blogs</button>
                                <button id="tab-2" class="tab-button" onclick="showSection(2)">Resources</button>
                                <button id="tab-3" class="tab-button" onclick="showSection(3)">Learn More</button>
                                <!-- Add more buttons as needed -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-sections">
                <div class="news-section" id="section-1">
                    <!-- Content for section 1 -->
                    <div class="container-blog">
                        <div class="row mt-0 card-container" id="card-container">
                            <div class="col-12 col-md-4 card-content card-1">
                                <div class="card-custom">
                                    <div class="card-inner">
                                        <img src="assets/images/news/news1-1.png" class="img-fluid" alt="" />
                                        <div class="card-body">
                                            <span>Category Name | Date</span>
                                            <h5 class="card-title">Headline for the</h5>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                                                elitr, sed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 card-content card-2">
                                <div class="card-custom">
                                    <div class="card-inner">
                                        <img src="assets/images/news/news1-1.png" class="img-fluid" alt="" />
                                        <div class="card-body">
                                            <span>Category Name | Date</span>
                                            <h5 class="card-title">Headline for the</h5>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                                                elitr, sed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 card-content card-3">
                                <div class="card-custom">
                                    <div class="card-inner">
                                        <img src="assets/images/news/news1-1.png" class="img-fluid" alt="" />
                                        <div class="card-body">
                                            <span>Category Name | Date</span>
                                            <h5 class="card-title">Headline for the</h5>
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing
                                                elitr, sed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add more card content as needed -->
                        </div>
                    </div>
                </div>
                <div class="news-section" id="section-2">
                    <div class="Resources">
                        <div class="Resources-card-container">
                            <div class="row">
                                <div class="col-md-3 element-to-animate-3">
                                    <div class="Resources-card-1">
                                        <img src="assets/images/resource/resource-img-4.png" class="img-fluid" alt="img-1" />
                                        <div class="card-content">
                                            <p>user</p>
                                            <h4>Guides</h4>
                                            <button>User Guides</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 element-to-animate-2">
                                    <div class="Resources-card-2 text-center">
                                        <img src="assets/images/resource/resource_img_2.png" class="img-fluid" alt="img-1" />
                                        <div class="card-content bg-color-1 text-left">
                                            <p>Technical</p>
                                            <h4>Notes</h4>
                                            <button class="second-card-button">Technical Notes</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 element-to-animate-2">
                                    <div class="Resources-card-3 text-center d-flex">
                                        <div class="card-content custom-position bg-color-1 text-left">
                                            <h4><span class="black">Videos &</span><br />
                                                Webinars</h4>
                                            <button class="second-card-button">Technical Notes</button>
                                        </div>
                                        <img src="assets/images/resource/resource-img-5.png" class="img-fluid" alt="img-1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-section" id="section-3">
                    <div class="container-learn-more">
                        <div class="container-cards">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="inner-cards text-center card-color-1 element-card-1">
                                        <img src="assets/images/connect-images/icon-2.png" alt="img-1" />
                                        <button>Free Trial</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inner-cards text-center card-color-2 element-card-2">
                                        <img src="assets/images/connect-images/icon-1.png" alt="img-1" />
                                        <button class="btn-position-1">Speak to a Scientist</button>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="inner-cards text-center card-color-3 element-card-3">
                                        <img class="image-learn-more" src="assets/images/connect-images/icon-3.png" alt="img-1" />
                                        <button class="btn-position-2">Request a Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more sections as needed -->
            </div>
        </div>
    </section>

    <!-- panel 4 end  -->

    <!-- addtional Panel start -->


    <!-- s -->


    <!-- addtional Panel end -->

    <!-- panel 5 start -->

    <!-- <section class="panel panel-5 background-color-3">
        <div class="container-account">
            <div class="container-form element-to-animate-3">
                <div class="form-heading">
                    <h2>Create An Account</h2>
                    <span>
                        Already a user?
                        <a href="#">Sign In</a>
                    </span>
                </div>

                <div class="form-inputs">
                    <form action="POST">
                        <input type="text" id="fname" name="firstname" class="custom-input element-to-animate" placeholder="Your first name..">

                        <input type="email" id="email" name="email" class="custom-input element-to-animate" placeholder="Your email..">

                        <input type="tel" id="phone" name="phone" class="custom-input element-to-animate" placeholder="Your phone number..">

                        <input type="text" id="city" name="city" class="custom-input element-to-animate" placeholder="Your city..">

                        <input type="text" id="purchase" name="purchase" class="custom-input element-to-animate" placeholder="When are you planning to purchase">

                        <input type="date" id="application" name="application" class="custom-input element-to-animate" placeholder="Application">

                        <textarea id="requirements" name="requirements" rows="4" cols="50" class="custom-input element-to-animate" placeholder="Please elaborate your requirement"></textarea>

                        <div class="check-box d-flex">
                            <input type="checkbox" id="agree" name="agree">
                            <span>I have read and agree to the privacy Policy | Or Sign In With</span>
                            <button>Get Quote</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- panel 5 end -->


</div>

<div class="container-motion background-color-3">
    <div class="section-1">
        <div class="container-connect">
            <div class="row">
                <div class="col-md-7">
                    <div class="content-text element-to-animate-3">
                        <h2>We Are <span>Always Open</span> <br> To Your Needs!</h2>
                        <p>“Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna”</p>
                        <button>Connect Now</button>
                    </div>
                </div>
                <!-- <div class="connect-img">
                        <img src="<?php echo base_url() ?>assets/images/connect-img-white.png" class="img-fluid" alt="Circular Image of Contact Us">
                    </div> -->
            </div>
        </div>
    </div>
    <div class="container-snake-wave">
        <div class="wave-tube">
            <svg width="100%" height="100%" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg" class="wave">
                <path id="wavePath1" d="M0 0 H300 Q400 0 400 100 V700" stroke="white" stroke-width="2" fill="none" />
            </svg>
            <div class="ball"></div>
        </div>
        <div class="section-2">
            <div class="container-head-office text-white">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Head <span class="decor">Office</span></h1>
                        <div class="row font-connect">
                            <div class="col-1 text-center">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="col-11">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur necessitatibus labore cumque aliquam reiciendis aspernatur deleniti expedita corrupti ex tempore totam quasi nesciunt ullam magni, veritatis nemo iure adipisci recusandae?</p>
                            </div>
                            <div class="col-1">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="col-11">
                                <a href="tel:+9102269086000">+91-022-6908 6000/6110</a><br>
                                <a href="tel:+91987654321">+91-987654321</a>
                            </div>
                        </div>
                        <a class="text-white mail" href="mailto:dummymain@gmail.com"><i class="fa-solid fa-envelope"></i> dummymain@gmail.com</a>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() ?>assets/images/Map_here.svg" class="map-location" alt="Head Office Image">
                    </div>
                </div>
            </div>
        </div>
        <div class="section-3">
            <div class="container-fluid text-white">
                <div class="row">
                    <div class="col-md-4">
                        <div class="office-center">
                            <h4>Factory</h4>
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="col-11">
                                    <p>Plot No. EL-72, Electronic Zone, TTC Industrial Area, Thane Belapur Road, Navi Mumbai, Maharashtra, India 400705.</p>
                                </div>
                                <div class="col-1">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="col-11">
                                    <a href="tel:+9102261076666">+91-022-61076666</a><br>
                                    <a href="mailto:sales.mfd@labindia.com">sales.mfd@labindia.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="office-center">
                            <h4>Upcoming Factory</h4>
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="col-11">
                                    <p>Plot No. EL-72, Electronic Zone, TTC Industrial Area, Thane Belapur Road, Navi Mumbai, Maharashtra, India 400705.</p>
                                </div>
                                <div class="col-1">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="col-11">
                                    <a href="tel:+9102261076666">+91-022-61076666</a><br>
                                    <a href="mailto:sales.mfd@labindia.com">sales.mfd@labindia.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="office-center">
                            <h4>Application & Training Centre</h4>
                            <div class="row">
                                <div class="col-1">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="col-11">
                                    <p>Plot No. EL-72, Electronic Zone, TTC Industrial Area, Thane Belapur Road, Navi Mumbai, Maharashtra, India 400705.</p>
                                </div>
                                <div class="col-1">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="col-11">
                                    <a href="tel:+9102261076666">+91-022-61076666</a><br>
                                    <a href="mailto:sales.mfd@labindia.com">sales.mfd@labindia.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-4">
            <!-- <div class="location-tabs">
                <button class="tab-button ">Domestic Offices</button>
                <button class="tab-button">International Partners</button>
            </div> -->
            <div class="container text-white mt-4">
                <div class="row">
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Lucknow</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Hyderabad</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Vadodara</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Pune</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Delhi</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Chennai</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Kolkatta</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 p-4">
                        <div class="domestic-office-detail">
                            <div class="location-detail d-flex">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <h4>Bangalore</h4>
                            </div>
                            <div class="contact-detail d-flex mt-2">
                                <i class="fa-solid fa-phone"></i>
                                <p>8/10, Ground Floor, East Patel Nagar, New Delhi - 110008. +91-(011)-43306001 / 6010</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-5">
            <div class="container-account">
                <div class="container-form element-to-animate-3">
                    <div class="form-heading text-white">
                        <h2>LET'S CONNECT</h2>
                        <p>Have a question about any of our products? Fill out the form and our representatives will be in touch</p>
                    </div>
                    <div class="form-inputs">
                        <form action="POST">
                            <input type="text" id="fname" name="firstname" class="custom-input element-to-animate" placeholder="Your first name..">
                            <input type="email" id="email" name="email" class="custom-input element-to-animate" placeholder="Your email..">
                            <input type="tel" id="phone" name="phone" class="custom-input element-to-animate" placeholder="Your phone number..">
                            <input type="text" id="city" name="city" class="custom-input element-to-animate" placeholder="Your city..">
                            <input type="text" id="purchase" name="purchase" class="custom-input element-to-animate" placeholder="When are you planning to purchase">
                            <input type="date" id="application" name="application" class="custom-input element-to-animate" placeholder="Application">
                            <textarea id="requirements" name="requirements" rows="4" cols="50" class="custom-input element-to-animate" placeholder="Please elaborate your requirement"></textarea>
                            <div class="check-box d-flex">
                                <input type="checkbox" id="agree" name="agree">
                                <span>I have read and agree to the privacy Policy | Or Sign In With</span>
                                <button>Get Quote</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- <div class="lastContainer">
    <div class="brand-container">
        <div class="row">
            <div class="col-md-2">
                <div class="head-brand">
                    <h2>Our <span>Client</span></h2>

                </div>
            </div>
            <div class="col-md-10">
                <div class="slider-container">
                    <div class="custom-slider">
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-1.png" alt="Icon 1"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-2.png" alt="Icon 2"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-3.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-4.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-5.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-6.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-7.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-8.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-9.png" alt="Icon 3"></div>

                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-1.png" alt="Icon 1"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-2.png" alt="Icon 2"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-3.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-4.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-5.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-6.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-7.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-8.png" alt="Icon 3"></div>
                        <div class="custom-icon"><img src="<?php echo base_url() ?>assets/images/Color-client-logo/logo-9.png" alt="Icon 3"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div> -->

<!-- <div class="footer">
    <div class="inner-footer">

        <div class="footer-items">
            <img src="<?php echo base_url() ?>assets/images/Logo.png" class="footer-logo" alt="">
            <p>201/202, Nand Chambers, LBS Marg, Near Vandana Cinema, Thane (West), Thane, Maharashtra 400602 </p>
            <p>sales.mfd@labindia.com l +91 9136909578</p>
        </div>

        <div class="footer-items">
            <h3>Quick Links</h3>
            <div class="border1"></div>
            <ul>
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Search</li>
                </a>
                <a href="#">
                    <li>Contact</li>
                </a>
                <a href="#">
                    <li>About</li>
                </a>
            </ul>
        </div>

        <div class="footer-items">
            <h3>Recipes</h3>
            <div class="border1"></div>
            <ul>
                <a href="#">
                    <li>Indian</li>
                </a>
                <a href="#">
                    <li>Chinese</li>
                </a>
                <a href="#">
                    <li>Mexican</li>
                </a>
                <a href="#">
                    <li>Italian</li>
                </a>
            </ul>
        </div>

        <div class="footer-items">
            <h3>Contact us</h3>
            <div class="border1"></div>
            <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>XYZ, abc</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>123456789</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i>xyz@gmail.com</li>
            </ul>

            <div class="social-media">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-google-plus-square"></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        Copyright &copy; LabIndia
    </div>
</div> -->

<!-- Product card courousel -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentIndex = 2; // Index of the active card

        const cards = document.querySelectorAll('.card');
        const totalCards = cards.length;

        function updateCards() {
            cards.forEach((card, index) => {
                card.classList.remove('active', 'left', 'right', 'left-hidden', 'right-hidden');
                if (index === currentIndex) {
                    card.classList.add('active');
                } else if ((index - currentIndex + totalCards) % totalCards === 1) {
                    card.classList.add('left');
                } else if ((currentIndex - index + totalCards) % totalCards === 1) {
                    card.classList.add('right');
                } else if ((index - currentIndex + totalCards) % totalCards === 2) {
                    card.classList.add('left-hidden');
                } else if ((currentIndex - index + totalCards) % totalCards === 2) {
                    card.classList.add('right-hidden');
                }
            });
        }

        updateCards();

        setInterval(() => {
            currentIndex = (currentIndex + 1) % totalCards;
            updateCards();
        }, 1000000);

        // Add click event to cards
        cards.forEach((card, index) => {
            card.addEventListener('click', () => {
                currentIndex = index;
                updateCards();
            });
        });
    });
</script>
<?php

$this->load->view('labindia_view/layout/footer_view.php');

?>