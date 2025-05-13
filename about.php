<?php include 'header.php'; ?>

<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    /* Section Styles */
    section {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        padding: 40px;
        margin-bottom: 40px;
    }

    section h2 {
        color: #0c3c60;
        font-size: 28px;
        margin-bottom: 20px;
        border-left: 6px solid #f9b233;
        padding-left: 15px;
    }

    section ul {
        padding-left: 20px;
    }

    section ul li {
        margin-bottom: 10px;
    }

    /* Subsections inside What We Do */
    .services-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }

    .service-box {
        background-color: #fdfdfd;
        border: 1px solid #e6e6e6;
        border-radius: 10px;
        padding: 20px;
        transition: all 0.3s ease;
    }

    .service-box:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
    }

    .service-box h3 {
        color: #333;
        font-size: 20px;
        margin-bottom: 10px;
    }

    /* Values with icons or emphasis */
    .values-list li {
        margin-bottom: 12px;
        position: relative;
        padding-left: 20px;
    }

    .values-list li::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #f9b233;
        font-weight: bold;
    }

    /* Social impact and final sections */
    .final-section {
        background-color: #f0f4f8;
        border-left: 5px solid #f9b233;
        padding: 30px;
        border-radius: 10px;
    }

    .final-section h3 {
        color: #0c3c60;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
        }

        section {
            padding: 25px;
        }

        .container {
            padding: 20px 15px;
        }

        section h2 {
            font-size: 24px;
        }

        .service-box h3 {
            font-size: 18px;
        }
    }
</style>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image " data-bs-bg="img/bg/14.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">About Us</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120--- pb-90 mt--30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="img/slider/s2.jpeg" alt="About Us Image">
                    <div class="about-us-img-info about-us-img-info-2 about-us-img-info-3">

                        <!--<div class="ltn__video-img ltn__animation-pulse1">-->
                        <!--    <img src="img/others/8.png" alt="video popup bg image">-->
                        <!--    <a class="ltn__video-icon-2 ltn__video-icon-2-border---" href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&showinfo=0"  data-rel="lightcase:myCollection">-->
                        <!--        <i class="fa fa-play"></i>-->
                        <!--    </a>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2--- mb-20">
                        <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">About Us</h6>
                        <h1 class="section-title">Building Dreams. Creating Value. Shaping Futures<span>.</span></h1>
                        <p>Welcome to Sunrise Realty, a rising name in India’s real estate landscape, headquartered in the heart of Howrah, West Bengal. Founded in October 2024, Sunrise Realty has swiftly grown into a symbol of trust, quality, and innovation in the world of property development and construction. With a strong local presence, we are committed to redefining urban living and infrastructure through world-class design, meticulous planning, and a customer-first approach.</p>
                        <p>We don’t just build buildings — we craft communities, design lifestyles, and turn your aspirations into reality.</p>
                    </div>
                    <!--<ul class="ltn__list-item-half clearfix">-->
                    <!--    <li>-->
                    <!--        <i class="flaticon-home-2"></i>-->
                    <!--        Smart Home Design-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <i class="flaticon-mountain"></i>-->
                    <!--        Beautiful Scene Around-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <i class="flaticon-heart"></i>-->
                    <!--        Exceptional Lifestyle-->
                    <!--    </li>-->
                    <!--    <li>-->
                    <!--        <i class="flaticon-secure"></i>-->
                    <!--        Complete 24/7 Security-->
                    <!--    </li>-->
                    <!--</ul>-->
                    <!--<div class="ltn__callout bg-overlay-theme-05  mt-30">-->
                    <!--    <p>"Enimad minim veniam quis nostrud exercitation <br>-->
                    <!--        llamco laboris. Lorem ipsum dolor sit amet" </p>-->
                    <!--</div>-->
                    <!--<div class="btn-wrapper animated">-->
                    <!--    <a href="service.html" class="theme-btn-1 btn btn-effect-1">OUR SERVICES</a>-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FEATURE AREA START ( Feature - 6) -->
<div class="ltn__feature-area section-bg-1 pt-50 mb-120---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2--- text-center">
                    <!--<h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our P</h6>-->
                    <h1 class="section-title">Our Journey</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-12 col-sm-12 col-12">
                <div class="ltn__feature-item ltn__feature-item-6 bg-white  box-shadow-1">
                    <!-- <div class="ltn__feature-icon" id="aboutusform">
                            <span><i class="flaticon-house"></i></span>
                            <img src="img/icons/icon-img/21.png" alt="#">
                        </div> -->
                    <div class="ltn__feature-info">
                        <!-- <h3><a href="service-details.html">Sea Nest (Mandarmoni)</a></h3> -->
                        <p style="font-size: 18px;">Sunrise Realty began with a simple but powerful idea: to bring integrity, transparency, and excellence back into the real estate and construction industry. Born in October 2024, we entered the market with a bold vision — to raise the standards of property development in Eastern India and deliver spaces that are not only structurally sound but also emotionally fulfilling.</p>
                        <p style="font-size: 18px;">From our base at 74/75/2 Buxarah Road, Howrah, we started our operations by assembling a team of experienced professionals, young minds with new ideas, and seasoned engineers with decades of project execution behind them. We knew that real estate isn’t just about bricks and mortar — it’s about building trust, forming relationships, and enhancing the quality of life for our clients.</p>
                        <p style="font-size: 18px;">Over time, we’ve expanded from being just a construction company to becoming a comprehensive real estate solutions provider.
                        </p>
                        <!--<a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>-->
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-4 col-sm-6 col-12">-->
            <!--    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1 active">-->
            <!--        <div class="ltn__feature-icon">-->
            <!-- <span><i class="flaticon-house-3"></i></span> -->
            <!--            <img src="img/icons/icon-img/22.png" alt="#">-->
            <!--        </div>-->
            <!--        <div class="ltn__feature-info">-->
            <!--            <h3><a href="service-details.html">Rent a home</a></h3>-->
            <!--            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>-->
            <!--            <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-4 col-sm-6 col-12">-->
            <!--    <div class="ltn__feature-item ltn__feature-item-6 text-center bg-white  box-shadow-1">-->
            <!--        <div class="ltn__feature-icon">-->
            <!-- <span><i class="flaticon-deal-1"></i></span> -->
            <!--            <img src="img/icons/icon-img/23.png" alt="#">-->
            <!--        </div>-->
            <!--        <div class="ltn__feature-info">-->
            <!--            <h3><a href="service-details.html">Sell a home</a></h3>-->
            <!--            <p>over 1 million+ homes for sale available on the website, we can match you with a house you will want to call home.</p>-->
            <!--            <a class="ltn__service-btn" href="service-details.html">Find A Home <i class="flaticon-right-arrow"></i></a>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->


<!-- About Us Page -->
<section class="bg-[#1C2B2D] text-[#D6E2E2] px-6 md:px-16 py-12 space-y-16" style="background-color: var(--section-bg-1);;">

    <div class="container">
        <!-- What We Do -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-6">What We Do</h2>
            <p class="mb-4">At Sunrise Realty, our services cover every aspect of the property lifecycle — from acquisition and planning to design, construction, and post-sale support. Our aim is to be your one-stop destination for all things real estate.</p>

            <ul class="space-y-6 list-decimal list-inside">
                <li>
                    <h3 class="text-xl font-semibold text-[#F5C26B] mb-1">Property Development</h3>
                    <p>We deliver well-planned residential and commercial developments reflecting modern lifestyles. Our focus is on space efficiency, sustainability, and aesthetic appeal — from apartments to villas and retail spaces.</p>
                </li>
                <li>
                    <h3 class="text-xl font-semibold text-[#F5C26B] mb-1">Construction Services</h3>
                    <p>Handled by our in-house team, every construction phase is guided by modern techniques, strict safety standards, and a commitment to quality and timeliness.</p>
                </li>
                <li>
                    <h3 class="text-xl font-semibold text-[#F5C26B] mb-1">Property Sales & Consulting</h3>
                    <p>We guide clients with personalized service, market knowledge, and legal clarity, ensuring informed decisions for all types of buyers and investors.</p>
                </li>
                <li>
                    <h3 class="text-xl font-semibold text-[#F5C26B] mb-1">Custom Projects & Turnkey Solutions</h3>
                    <p>Need something unique? We offer tailor-made solutions — from concept to delivery — for homes or commercial properties with complete accountability.</p>
                </li>
            </ul>
        </div>

        <!-- Vision -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-4">Our Vision</h2>
            <p>To become a leading real estate and construction brand in India, known for setting new benchmarks in design, quality, and service — synonymous with trust, innovation, and sustainable development.</p>
        </div>

        <!-- Mission -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-4">Our Mission</h2>
            <ul class="list-disc list-inside space-y-2">
                <li>To deliver real estate solutions that exceed expectations.</li>
                <li>To uphold transparency, ethics, and accountability in every interaction.</li>
                <li>To contribute to the socio-economic growth of our communities by creating homes and spaces that improve lives.</li>
                <li>To integrate innovation, smart technologies, and green practices into every project we undertake.</li>
            </ul>
        </div>

        <!-- Values -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-4">Our Values</h2>
            <ul class="list-disc list-inside space-y-2">
                <li><strong>Integrity:</strong> Honest communication, fair dealings, and ethical practices.</li>
                <li><strong>Quality:</strong> Excellence in materials, design, and execution.</li>
                <li><strong>Innovation:</strong> Adoption of new ideas and technologies to stay ahead.</li>
                <li><strong>Customer-Centricity:</strong> Clients' needs shape our solutions.</li>
                <li><strong>Sustainability:</strong> Responsible design and construction to minimize ecological impact.</li>
            </ul>
        </div>

        <!-- Why Choose Us -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-4">Why Choose Sunrise Realty?</h2>
            <ul class="list-decimal list-inside space-y-2">
                <li><strong>Expertise & Experience:</strong> A diverse team including architects, engineers, and legal experts.</li>
                <li><strong>On-Time Delivery:</strong> We meet deadlines without compromising quality.</li>
                <li><strong>Transparent Processes:</strong> Clarity in cost, progress, and communication.</li>
                <li><strong>Modern Design Aesthetics:</strong> Stylish, functional, and future-ready spaces.</li>
                <li><strong>Customer Support:</strong> Long-term relationships and after-possession care.</li>
            </ul>
        </div>

        <!-- Social Impact -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-4">Social Impact</h2>
            <p>We believe in giving back. From promoting local employment and safe labor practices to supporting education and housing for underprivileged families, Sunrise Realty is committed to making a difference. Our future includes sustainable infrastructure and community-oriented projects.</p>
        </div>

        <!-- Looking Ahead -->
        <div>
            <h2 class="text-3xl font-bold border-b-2 border-[#F5C26B] pb-2 mb-4">Looking Ahead</h2>
            <p>The industry is evolving — and so are we. With ongoing investments in R&D, smarter techniques, and green construction, Sunrise Realty is preparing for the future. Our upcoming projects in Howrah and nearby areas focus on smart homes, green buildings, and affordable housing.</p>
        </div>

        <!-- Final CTA -->
        <div class="text-center bg-[#243536] p-8 rounded-lg shadow-lg bg-white py-5">
            <h3 class="text-2xl font-semibold text-[#F5C26B] mb-4">Let’s Build Your Dream Together</h3>
            <p class="max-w-3xl mx-auto mb-4">Choosing a developer isn’t just about structures — it’s about trust, comfort, and peace of mind. With Sunrise Realty, you’re choosing a committed partner from blueprint to key handover.<br>
                Whether you’re buying, building, or investing — we’re with you every step of the way.</p>
        </div>
    </div>

</section>



<!-- TEAM AREA START (Team - 3) -->
<!--<div class="ltn__team-area pt-115 pb-90">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="section-title-area ltn__section-title-2--- text-center">-->
<!--                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Team</h6>-->
<!--                    <h1 class="section-title">Property Agents</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <div class="ltn__team-item ltn__team-item-3---">-->
<!--                    <div class="team-img">-->
<!--                        <img src="img/team/4.jpg" alt="Image">-->
<!--                    </div>-->
<!--                    <div class="team-info">-->
<!--                        <h4><a href="team-details.html">Rosalina D. William</a></h4>-->
<!--                        <h6 class="ltn__secondary-color">Real Estate Broker</h6>-->
<!--                        <div class="ltn__social-media">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <div class="ltn__team-item ltn__team-item-3---">-->
<!--                    <div class="team-img">-->
<!--                        <img src="img/team/2.jpg" alt="Image">-->
<!--                    </div>-->
<!--                    <div class="team-info">-->
<!--                        <h4><a href="team-details.html">Kelian Anderson</a></h4>-->
<!--                        <h6 class="ltn__secondary-color">Selling Agents</h6>-->
<!--                        <div class="ltn__social-media">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <div class="ltn__team-item ltn__team-item-3---">-->
<!--                    <div class="team-img">-->
<!--                        <img src="img/team/5.jpg" alt="Image">-->
<!--                    </div>-->
<!--                    <div class="team-info">-->
<!--                        <h4><a href="team-details.html">Miranda H. Halim</a></h4>-->
<!--                        <h6 class="ltn__secondary-color">Property Seller</h6>-->
<!--                        <div class="ltn__social-media">-->
<!--                            <ul>-->
<!--                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>-->
<!--                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
<!--                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- TEAM AREA END -->

<!-- TESTIMONIAL AREA START (testimonial-7) -->
<!--<div class="ltn__testimonial-area section-bg-1--- bg-image-top pt-120 pb-70" data-bs-bg="img/bg/20.jpg">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="section-title-area ltn__section-title-2--- text-center">-->
<!--                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">Our Testimonial</h6>-->
<!--                    <h1 class="section-title">Clients Feedback</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row ltn__testimonial-slider-5-active slick-arrow-1">-->
<!--            <div class="col-lg-4">-->
<!--                <div class="ltn__testimonial-item ltn__testimonial-item-7">-->
<!--                    <div class="ltn__testimoni-info">-->
<!--                        <p><i class="flaticon-left-quote-1"></i> -->
<!--                            Precious ipsum dolor sit amet-->
<!--                            consectetur adipisicing elit, sed dos-->
<!--                            mod tempor incididunt ut labore et-->
<!--                            dolore magna aliqua. Ut enim ad min-->
<!--                            veniam, quis nostrud Precious ips-->
<!--                            um dolor sit amet, consecte</p>-->
<!--                        <div class="ltn__testimoni-info-inner">-->
<!--                            <div class="ltn__testimoni-img">-->
<!--                                <img src="img/testimonial/1.jpg" alt="#">-->
<!--                            </div>-->
<!--                            <div class="ltn__testimoni-name-designation">-->
<!--                                <h5>Jacob William</h5>-->
<!--                                <label>Selling Agents</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="ltn__testimonial-item ltn__testimonial-item-7">-->
<!--                    <div class="ltn__testimoni-info">-->
<!--                        <p><i class="flaticon-left-quote-1"></i> -->
<!--                            Precious ipsum dolor sit amet-->
<!--                            consectetur adipisicing elit, sed dos-->
<!--                            mod tempor incididunt ut labore et-->
<!--                            dolore magna aliqua. Ut enim ad min-->
<!--                            veniam, quis nostrud Precious ips-->
<!--                            um dolor sit amet, consecte</p>-->
<!--                        <div class="ltn__testimoni-info-inner">-->
<!--                            <div class="ltn__testimoni-img">-->
<!--                                <img src="img/testimonial/2.jpg" alt="#">-->
<!--                            </div>-->
<!--                            <div class="ltn__testimoni-name-designation">-->
<!--                                <h5>Kelian Anderson</h5>-->
<!--                                <label>Selling Agents</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="ltn__testimonial-item ltn__testimonial-item-7">-->
<!--                    <div class="ltn__testimoni-info">-->
<!--                        <p><i class="flaticon-left-quote-1"></i> -->
<!--                            Precious ipsum dolor sit amet-->
<!--                            consectetur adipisicing elit, sed dos-->
<!--                            mod tempor incididunt ut labore et-->
<!--                            dolore magna aliqua. Ut enim ad min-->
<!--                            veniam, quis nostrud Precious ips-->
<!--                            um dolor sit amet, consecte</p>-->
<!--                        <div class="ltn__testimoni-info-inner">-->
<!--                            <div class="ltn__testimoni-img">-->
<!--                                <img src="img/testimonial/3.jpg" alt="#">-->
<!--                            </div>-->
<!--                            <div class="ltn__testimoni-name-designation">-->
<!--                                <h5>Adam Joseph</h5>-->
<!--                                <label>Selling Agents</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-lg-4">-->
<!--                <div class="ltn__testimonial-item ltn__testimonial-item-7">-->
<!--                    <div class="ltn__testimoni-info">-->
<!--                        <p><i class="flaticon-left-quote-1"></i> -->
<!--                            Precious ipsum dolor sit amet-->
<!--                            consectetur adipisicing elit, sed dos-->
<!--                            mod tempor incididunt ut labore et-->
<!--                            dolore magna aliqua. Ut enim ad min-->
<!--                            veniam, quis nostrud Precious ips-->
<!--                            um dolor sit amet, consecte</p>-->
<!--                        <div class="ltn__testimoni-info-inner">-->
<!--                            <div class="ltn__testimoni-img">-->
<!--                                <img src="img/testimonial/4.jpg" alt="#">-->
<!--                            </div>-->
<!--                            <div class="ltn__testimoni-name-designation">-->
<!--                                <h5>James Carter</h5>-->
<!--                                <label>Selling Agents</label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--  -->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- TESTIMONIAL AREA END -->

<!-- BLOG AREA START (blog-3) -->
<!--<div class="ltn__blog-area pt-115--- pb-70">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-12">-->
<!--                <div class="section-title-area ltn__section-title-2--- text-center">-->
<!--                    <h6 class="section-subtitle section-subtitle-2 ltn__secondary-color">News & Blogs</h6>-->
<!--                    <h1 class="section-title">Leatest News Feeds</h1>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">-->
<!-- Blog Item -->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__blog-item ltn__blog-item-3">-->
<!--                    <div class="ltn__blog-img">-->
<!--                        <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>-->
<!--                    </div>-->
<!--                    <div class="ltn__blog-brief">-->
<!--                        <div class="ltn__blog-meta">-->
<!--                            <ul>-->
<!--                                <li class="ltn__blog-author">-->
<!--                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>-->
<!--                                </li>-->
<!--                                <li class="ltn__blog-tags">-->
<!--                                    <a href="#"><i class="fas fa-tags"></i>Decorate</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <h3 class="ltn__blog-title"><a href="blog-details.html">10 Brilliant Ways To Decorate Your Home</a></h3>-->
<!--                        <div class="ltn__blog-meta-btn">-->
<!--                            <div class="ltn__blog-meta">-->
<!--                                <ul>-->
<!--                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="ltn__blog-btn">-->
<!--                                <a href="blog-details.html">Read more</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!-- Blog Item -->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__blog-item ltn__blog-item-3">-->
<!--                    <div class="ltn__blog-img">-->
<!--                        <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>-->
<!--                    </div>-->
<!--                    <div class="ltn__blog-brief">-->
<!--                        <div class="ltn__blog-meta">-->
<!--                            <ul>-->
<!--                                <li class="ltn__blog-author">-->
<!--                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>-->
<!--                                </li>-->
<!--                                <li class="ltn__blog-tags">-->
<!--                                    <a href="#"><i class="fas fa-tags"></i>Interior</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <h3 class="ltn__blog-title"><a href="blog-details.html">The Most Inspiring Interior Design Of 2021</a></h3>-->
<!--                        <div class="ltn__blog-meta-btn">-->
<!--                            <div class="ltn__blog-meta">-->
<!--                                <ul>-->
<!--                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>July 23, 2021</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="ltn__blog-btn">-->
<!--                                <a href="blog-details.html">Read more</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!-- Blog Item -->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__blog-item ltn__blog-item-3">-->
<!--                    <div class="ltn__blog-img">-->
<!--                        <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>-->
<!--                    </div>-->
<!--                    <div class="ltn__blog-brief">-->
<!--                        <div class="ltn__blog-meta">-->
<!--                            <ul>-->
<!--                                <li class="ltn__blog-author">-->
<!--                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>-->
<!--                                </li>-->
<!--                                <li class="ltn__blog-tags">-->
<!--                                    <a href="#"><i class="fas fa-tags"></i>Estate</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <h3 class="ltn__blog-title"><a href="blog-details.html">Recent Commercial Real Estate Transactions</a></h3>-->
<!--                        <div class="ltn__blog-meta-btn">-->
<!--                            <div class="ltn__blog-meta">-->
<!--                                <ul>-->
<!--                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>May 22, 2021</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="ltn__blog-btn">-->
<!--                                <a href="blog-details.html">Read more</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!-- Blog Item -->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__blog-item ltn__blog-item-3">-->
<!--                    <div class="ltn__blog-img">-->
<!--                        <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>-->
<!--                    </div>-->
<!--                    <div class="ltn__blog-brief">-->
<!--                        <div class="ltn__blog-meta">-->
<!--                            <ul>-->
<!--                                <li class="ltn__blog-author">-->
<!--                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>-->
<!--                                </li>-->
<!--                                <li class="ltn__blog-tags">-->
<!--                                    <a href="#"><i class="fas fa-tags"></i>Room</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <h3 class="ltn__blog-title"><a href="blog-details.html">Renovating a Living Room? Experts Share Their Secrets</a></h3>-->
<!--                        <div class="ltn__blog-meta-btn">-->
<!--                            <div class="ltn__blog-meta">-->
<!--                                <ul>-->
<!--                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="ltn__blog-btn">-->
<!--                                <a href="blog-details.html">Read more</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!-- Blog Item -->
<!--            <div class="col-lg-12">-->
<!--                <div class="ltn__blog-item ltn__blog-item-3">-->
<!--                    <div class="ltn__blog-img">-->
<!--                        <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>-->
<!--                    </div>-->
<!--                    <div class="ltn__blog-brief">-->
<!--                        <div class="ltn__blog-meta">-->
<!--                            <ul>-->
<!--                                <li class="ltn__blog-author">-->
<!--                                    <a href="#"><i class="far fa-user"></i>by: Admin</a>-->
<!--                                </li>-->
<!--                                <li class="ltn__blog-tags">-->
<!--                                    <a href="#"><i class="fas fa-tags"></i>Trends</a>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                        <h3 class="ltn__blog-title"><a href="blog-details.html">7 home trends that will shape your house in 2021</a></h3>-->
<!--                        <div class="ltn__blog-meta-btn">-->
<!--                            <div class="ltn__blog-meta">-->
<!--                                <ul>-->
<!--                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>June 24, 2021</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <div class="ltn__blog-btn">-->
<!--                                <a href="blog-details.html">Read more</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--  -->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- BLOG AREA END -->

<!-- CALL TO ACTION START (call-to-action-6) -->
<!-- <div class="ltn__call-to-action-area call-to-action-6 before-bg-bottom" data-bs-bg="img/1.jpg--">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner call-to-action-inner-6 ltn__secondary-bg position-relative text-center---">
                        <div class="coll-to-info text-color-white">
                            <h1>Looking for a dream home?</h1>
                            <p>We can help you realize your dream of a new home</p>
                        </div>
                        <div class="btn-wrapper">
                            <a class="btn btn-effect-3 btn-white" href="contact.html">Explore Properties <i class="icon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- CALL TO ACTION END -->




<!-- CONTACT MESSAGE AREA START -->
<div class="ltn__contact-message-area mb-120 mb--100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__form-box contact-form-box box-shadow white-bg">
                    <h4 class="title-2">Having any questions? Write us</h4>
                    <form id="contact-form" action="mail.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-item input-item-name ltn__custom-icon">
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-email ltn__custom-icon">
                                    <input type="email" name="email" placeholder="Enter email address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="input-item">
                                        <select class="nice-select">
                                            <option>Select Service Type</option>
                                            <option>Property Management </option>
                                            <option>Mortgage Service </option>
                                            <option>Consulting Service</option>
                                            <option>Home Buying</option>
                                            <option>Home Selling</option>
                                            <option>Escrow Services</option>
                                        </select>
                                    </div> -->
                                <div class="input-item input-item-address ltn__custom-icon">
                                    <input type="text" name="address" placeholder="Enter your address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-item input-item-phone ltn__custom-icon">
                                    <input type="text" name="phone" placeholder="Enter phone number">
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea name="message" placeholder="Enter message"></textarea>
                        </div>
                        <!-- <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label></p> -->
                        <div class="btn-wrapper mt-0">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">submit</button>
                        </div>
                        <p class="form-messege mb-0 mt-20"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CONTACT MESSAGE AREA END -->

<div style="margin-top: 100px;"></div>

<?php include 'footer.php'; ?>