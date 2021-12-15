@extends('layouts.main')
@section('content')

    <body>

        <!-- ======= slider ======= -->
        <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="zoom-in">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" id="first">
                            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                                <div class="col-xl-6 col-lg-8">
                                    <h1>Fastest Way to Achieve <span
                                            style="background: linear-gradient(to right, #ceac12 0%, #6e6e6c 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Success</span>
                                    </h1>
                                    <h2>Cloud-based complete spend control, purchase order management and more at an
                                        affordale price.</h2>
                                </div>
                            </div>
                            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                                <div class="col-xl-2 col-md-4">
                                    <div class="icon-box">
                                        <div class="row">
                                            <i class="ri-bar-chart-box-line" style="font-size:large;"></i>
                                            <h3><a href="/contact">Join Kasper</a></h3>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4">
                                    <div class="icon-box"  data-bs-toggle="modal" data-bs-target="#exampleModal" >
                                        <div class="row">
                                            <i class="ri-bar-chart-box-line" style="font-size:large;"></i>
                                            <h3 style="color: white">Watch Video</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div><!-- End testimonial item -->

                        <div class="swiper-slide" id="second">
                            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                                <div class="col-xl-6 col-lg-8">
                                    <h1>Your Privacy Our <span
                                            style="background: linear-gradient(to right, #ceac12 0%, #6e6e6c 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Concern</span>
                                    </h1>
                                    <h2>Get hold of your expenses through our transparent yet
                                        secure digitalized system.</h2>
                                </div>
                            </div>
                            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                                <div class="col-xl-2 col-md-4">
                                    <div class="icon-box">
                                        <div class="row">
                                            <i class="ri-bar-chart-box-line" style="font-size:large;"></i>
                                            <h3><a href="/contact">Join Kasper</a></h3>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4">
                                    <div  class="icon-box"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="row">
                                            <i class="ri-bar-chart-box-line" style="font-size:large;"></i>
                                            <h3  style="color: white">Watch Video</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div><!-- End testimonial item -->

                        <div class="swiper-slide" id="third">
                            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                                <div class="col-xl-6 col-lg-8">
                                    <h1>Your Business Our <span
                                            style="background: linear-gradient(to right, #ceac12 0%, #6e6e6c 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">Effort</span>
                                    </h1>
                                    <h2>Communicate with the suppliers of all categories
                                        within seconds using our automated workflow process. </h2>
                                </div>
                            </div>
                            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                                <div class="col-xl-2 col-md-4">
                                    <div class="icon-box">
                                        <div class="row">
                                            <i class="ri-bar-chart-box-line" style="font-size:large;"></i>
                                            <h3><a href="/contact">Join Kasper</a></h3>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xl-2 col-md-4">
                                    <div  class="icon-box"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <div class="row">
                                            <i class="ri-bar-chart-box-line" style="font-size:large;"></i>
                                            <h3  style="color: white">Watch Video</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div><!-- End testimonial item -->
                    </div><br><br><br>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End slider Section -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                            <img src="assets/img/procurement.jpg " class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right"
                            data-aos-delay="100">
                            <h3>Kasper Solutions</h3>
                            <p class="fst-italic">
                                Kasper solutions digitally connect buyers, sellers and other teams, providing complete
                                visibility and management of data, documents and costs across all stages of a procurement
                                cycle in the construction industry. It is an effective way for contractors and vendors to
                                find and transact with each other online.
                            </p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Eliminates the never-ending use of printer and
                                    paperwork .</li>
                                <li><i class="ri-check-double-line"></i> It helps contractors search and transact via our
                                    supplier database or network .</li>
                                <li><i class="ri-check-double-line"></i> Less time consumption doing approvals with regular
                                    notifications .</li>
                                <li><i class="ri-check-double-line"></i> No more old school ways of keeping a track of the
                                    money being spent .</li>
                                <li><i class="ri-check-double-line"></i> Assessment from the past vendor evaluations before
                                    making any transaction .</li>
                                <li><i class="ri-check-double-line"></i> Automated quotation analysis can ensure faster
                                    compliance for your organization .</li>

                            </ul>

                        </div>
                    </div>

                </div>
                <!-- End About Section -->

                <!-- ======= Clients Section ======= -->
                <section id="clients" class="clients">
                    <div class="container" data-aos="zoom-in">

                        <div class="clients-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide"><img src="assets/img/clients/Abusafieh Group.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Cleveland Cable Company.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/FJG.png" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Smart Gas.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/al-fajer.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets\img\clients\Al Inshrah.jpg"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Al Khaleej Ceramics.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Axon.png" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/BMTC.png" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Cosmoplast.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Abusafieh Group.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Dutco.png" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Eljirubber.png"
                                        class="img-fluid" alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/hemayah.png" class="img-fluid"
                                        alt=""></div>
                                <div class="swiper-slide"><img src="assets/img/clients/Petro Coat.png"
                                        class="img-fluid" alt=""></div>

                            </div>

                        </div>
                </section>
                </div>
                <br>
                <h1 class="text-center">Kasper <span
                        style="background: linear-gradient(to right, #ceac12 0%, #6e6e6c 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;font-size:20px;">Key
                        Features</span></h1>

            </section><!-- End Clients Section -->

            <!-- ======= Features Section ======= -->

            <section id="features" class="features">

                <div class="container" data-aos="fade-up">

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-receipt"></i>
                                <h4>REQUISITION MANAGEMENT</h4>
                                <p>An Integrated System assisting the Procurement team
                                    in requesting a precise quantity of materials in a
                                    hassle-free manner.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Spend Management</h4>
                                <p> Accurately track the expenses required for completing
                                    a project within an allocated budget and a specified
                                    deadline.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-images"></i>
                                <h4>MINIMIZE MANUAL EFFORT</h4>
                                <p>Request Multiple quotations from Various suppliers and
                                    compare the bids immediately, avoiding the
                                    troublesome process of sending and waiting for emails</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-shield"></i>
                                <h4>APPROVAL</h4>
                                <p> Define access rights for every user and request
                                    permissions with a few clicks.</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                            <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-receipt"></i>
                                <h4>RELEASE PURCHASE ORDERS</h4>
                                <p>Regulate the purchasing of material from the supplier,
                                    keeping precise records of the agreed prices, quality
                                    and quantity.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-cube-alt"></i>
                                <h4>AMEND CONTRACTS</h4>
                                <p> Finalise the quantity present in the batches and clarify
                                    the terms of payment and delivery.</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-images"></i>
                                <h4>INVENTORY MANAGEMENT</h4>
                                <p>Have a systematic track of stock ordered, stored, and
                                    transferred to the site team</p>
                            </div>
                            <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                                <i class="bx bx-shield"></i>
                                <h4>REPORT GENERATION</h4>
                                <p> Generate Quick reports concerning material
                                    requisition, purchase orders, and quotations while
                                    defining a timeline.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Features Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Scale Your Supplies</h2>
                        <p>Kasper <span style="font-size: 20px;">Marketplace for Suppliers</span></p>
                        <br>
                        <h6 class="fst-italic">Kasper is a B2B e-commerce marketplace where suppliers and contractors
                            can digitally connect to
                            communicate and transact with each other. Kasper helps suppliers of all sizes increase their
                            sales
                            potential and improve the visibility of their brands. </h6>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4>Sales Management</h4>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                            data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4>Instant <br>Messaging</h4>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4>Free <br>Registration</h4>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in"
                            data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-tachometer"></i></div>
                                <h4>Increased Contacts</h4>
                            </div>
                        </div>


                    </div>

                </div>
            </section><!-- End Services Section -->



            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Portfolio</h2>
                        <p>Check our Portfolio</p>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-card">Card</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 2</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 2</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 1</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Card 3</h4>
                                    <p>Card</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <div class="portfolio-links">
                                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                        <a href="portfolio-details.html" title="More Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->



            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container" data-aos="zoom-in">

                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                                    <h3>DAVID PORTUGAL</h3>
                                    <h4>Director (Execution & Procurement), San Jose Constructions)</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Kasper helped me build strong business relations with a wide range of
                                        organizations out there. The concept of bringing in contractors and
                                        suppliers on a single platform has significantly increased our sales.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>Mohamed Jahangir</h3>
                                    <h4>Managing Director, Global Lighting Systems</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Kasper offers an opportunity to build strong business relations with a wide range
                                        of organizations out there, the concept of bringing in contractors and suppliers
                                        on a single platform will significantly increase our sales in the near future <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                    <h3>Daragh O’Connor</h3>
                                    <h4>Vice President PM, ALDAR Properties PJSC</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        From a developer’s point of view, the level of detail Kasper offers to provide a
                                        contractor as well as a supplier is very beneficial for the industry. It helps
                                        organizations stay relevant with change in time and advancing technology <i
                                            class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div><!-- End testimonial item -->

                            <!-- End testimonial item -->

                            <!-- End testimonial item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
                <div class="container" data-aos="fade-up">

                    <div class="row no-gutters">
                        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"
                            data-aos="fade-right" data-aos-delay="100"></div>
                        <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left"
                            data-aos-delay="100">
                            <div class="content d-flex flex-column justify-content-center">

                                <p>
                                    Kasper Solutions for Procurement and Engineering Cloud offers its customers the
                                    industry’s most advanced solutions for planning, scheduling, procuring and delivering
                                    large-scale projects. </p>
                                <div class="row">
                                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box">
                                            <i class="bi bi-emoji-smile"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="2000"
                                                data-purecounter-duration="1" class="purecounter"></span>
                                            <p><strong>Suppliers</strong> </p>
                                        </div>
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <h1 style="color:black;">+</h1>
                                        </div>

                                    </div>



                                    <div class="col-md-6 d-md-flex align-items-md-stretch">
                                        <div class="count-box">
                                            <i class="bi bi-award"></i>
                                            <span data-purecounter-start="0" data-purecounter-end="60000"
                                                data-purecounter-duration="1" class="purecounter"></span>
                                            <p><strong>Products</strong> </p>
                                        </div>
                                        <div class="col-md-6 d-md-flex align-items-md-stretch">
                                            <h1 style="color:black;"> +</h1>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End .content-->
                        </div>
                    </div>

                </div>
            </section><!-- End Counts Section -->

            <!-- ======= Team Section ======= -->
            <!-- End Team Section -->

            <section id="contact" class="contact" style="padding-top: 50px;">
                <div class="container aos-init aos-animate" data-aos="fade-up">
              
                  <div class="section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                  </div>
              
                  
              
                  <div class="row mt-5">
              
                    <div class="col-lg-4">
                      <div class="info">
                        <div class="address">
                          <i class="bi bi-geo-alt"></i>
                          <h4>Location:</h4>
                          <p>13th Floor, The One Tower,
                            Barsha Heights, Sheikh Zayed Road, Dubai, U.A.E</p>
                        </div>
              
                        <div class="email">
                          <i class="bi bi-envelope"></i>
                          <h4>Email:</h4>
                          <p>info@kaspersolutions.ae</p>
                        </div>
              
                        <div class="phone">
                          <i class="bi bi-phone"></i>
                          <h4>Call:</h4>
                          <p>+971 (0)4 381 2069</p>
                        </div>
              
                      </div>
              
                    </div>
              
                    <div class="col-lg-8 mt-5 mt-lg-0">
              
                      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                          </div>
                          <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                        </div>
                        <div class="form-group mt-3">
                          <textarea class="form-control" name="message" rows="5" placeholder="Message" required=""></textarea>
                        </div>
                        <div class="my-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                      </form>
              
                    </div>
              
                  </div>
              
                </div>
              </section>
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body mx-auto">
                            <iframe width="1000" height="500"  src="https://www.youtube.com/embed/b1FnGFkWgc4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
            </div>

        </main><!-- End #main -->

        <!-- Vendor JS Files -->


    </body>



@endsection
