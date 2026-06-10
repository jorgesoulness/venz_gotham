<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gotham_Air_Child
 */

get_header();
?>

	<main id="primary" class="site-main">
  <?php if(is_page(8)): ?>
    <section class="vs-hero-wrapper hero-layout1 position-relative  ">
        <div class="vs-hero-carousel" data-height="740" data-container="1900" data-slidertype="responsive">

            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:8000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1921" height="750" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero-bg-2-1.png" class="ls-bg" alt="" decoding="async">
                <img width="1164" height="756" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero-shape-2-1.png" class="ls-l ls-hide-phone ls-img-layer" alt="" decoding="async" style="top:-9px; left:-7px; width:1159px; height:753px;" data-ls="static:forever;">
                <img width="1164" height="756" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero-shape-2-1.png" class="ls-l ls-hide-desktop ls-img-layer" alt="" decoding="async" style="top:-66px; left:-218px; width:1565px; height:1017px;" data-ls="static:forever;">
                <div style="font-family:Raleway; color:#ffffff; font-size:18px; font-weight:700; text-transform:uppercase; left:300px; top:185px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:-150; durationin:1500; delayin:300; offsetxout:-150;">
                    <div class="slider-line">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero-line-2-1.png" alt="line" class="me-2">
                        Electrical Repair Services
                    </div>
                </div>
                <div style="font-family:Raleway; color:#ffffff; font-size:30px; font-weight:700; text-transform:uppercase; left:300px; top:159px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:-150; durationin:1500; delayin:300; offsetxout:-150;">
                    <div class="slider-line">Electrical Repair Services</div>
                </div>
                <h1 style="color:#ffffff; font-size:74px; font-weight:700; font-family:Raleway; left:300px; top:223px;" class="ls-l ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500;">
                    Fast &amp; Reliable
                </h1>
                <h1 style="color:#ffffff; font-weight:700; font-family:Raleway; left:100px; top:119px; font-size:100px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-150; durationin:1500;">
                    Fast &amp; Reliable
                </h1>
                <h1 style="color:#ffffff; font-size:74px; font-weight:700; font-family:Raleway; left:300px; top:303px;" class="ls-l ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:200;">
                    Electrical Services
                </h1>
                <h1 style="color:#ffffff; font-size:100px; font-weight:700; font-family:Raleway; left:100px; top:242px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:200;">
                    Electrical Services
                </h1>
                <ls-layer style="color:#ffffff; font-family:DM Sans; font-size:18px; top:400px; left:300px; line-height:30px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:400;">
                    If you experience frequent circuit breaker trips, flickering lights, or you
                    <br>
                    have an older home with outdated wiring, it may be time
                </ls-layer>
                <ls-layer style="padding-top:0; padding-bottom:0; padding-right:2.48em; padding-left:2.48em;  line-height: 56px; font-family:DM Sans; font-weight:700; background-color:#fff; left:300px; top:490px; text-align:center; text-transform:uppercase; color:#D23024; font-size:16px;" class="ls-l ls-hide-tablet ls-hide-phone ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                    describe more <i class="far fa-long-arrow-right"></i>
                    <a href="about.html" class="inner-hero-link"><span class="sr-only">link</span></a>
                </ls-layer>
                <ls-layer style="padding-top:0; padding-bottom:0; padding-right:2.48em; padding-left:2.48em; line-height: 100px; font-family:DM Sans; font-weight:700; background-color:#fff; left:300px; top:449px; text-align:center; text-transform:uppercase; color:#D23024; font-size:26px;" class="ls-l ls-hide-desktop ls-hide-phone ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                    describe more <i class="far fa-long-arrow-right"></i>
                    <a href="about.html" class="inner-hero-link"><span class="sr-only">link</span></a>
                </ls-layer>
                <ls-layer style="padding-top:0; padding-bottom:0; padding-right:1em; padding-left:1em; line-height: 140px; font-family:DM Sans; font-weight:700; background-color:#fff; left:100px; top:431px; text-align:center; text-transform:uppercase; color:#D23024; font-size:60px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                    describe more
                    <a href="about.html" class="inner-hero-link"><span class="sr-only">link</span></a>
                </ls-layer>
                <ls-layer style="left:1492px; top:325px;" class="ls-l ls-hide-phone ls-html-layer">
                    <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=TnoL4Kr3InHnMwPu" class="play-btn style2 popup-video"><i class="fa fa-play"></i></a>
                </ls-layer>
                <ls-layer style="left:1535px; top:242px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer">
                    <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=TnoL4Kr3InHnMwPu" class="play-btn style2 popup-video"><i class="fa fa-play"></i></a>
                </ls-layer>
                <ls-layer style="top:490px; left:540px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
                    <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
                </ls-layer>
                <ls-layer style="top:442px; left:738px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
                    <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
                </ls-layer>
                <ls-layer style="top:429px; left:807px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
                    <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
                </ls-layer>
            </div>


            <!-- Slide 2-->
            <div class="ls-slide" data-ls="duration:8000; transition2d:5; kenburnszoom:out; kenburnsscale:1.1;">
                <img width="1921" height="750" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero-bg-2-2.png" class="ls-bg" alt="" decoding="async">
                <div style="font-family:Raleway; color:#ffffff; font-size:18px; font-weight:700; text-transform:uppercase; left:300px; top:185px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:-150; durationin:1500; delayin:300; offsetxout:-150;">
                    <div class="slider-line">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hero/hero-line-2-1.png" alt="line" class="me-2">
                        Powering Peace of Mind
                    </div>
                </div>
                <div style="font-family:Raleway; color:#ffffff; font-size:30px; font-weight:700; text-transform:uppercase; left:300px; top:159px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:-150; durationin:1500; delayin:300; offsetxout:-150;">
                    <div class="slider-line">Powering Peace of Mind</div>
                </div>
                <h1 style="color:#ffffff; font-size:74px; font-weight:700; font-family:Raleway; left:300px; top:223px;" class="ls-l ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500;">
                    Expert Fixes
                </h1>
                <h1 style="color:#ffffff; font-weight:700; font-family:Raleway; left:100px; top:119px; font-size:100px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-150; durationin:1500;">
                    Expert Fixes
                </h1>
                <h1 style="color:#ffffff; font-size:74px; font-weight:700; font-family:Raleway; left:300px; top:303px;" class="ls-l ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:200;">
                    Electrical Failures
                </h1>
                <h1 style="color:#ffffff; font-size:100px; font-weight:700; font-family:Raleway; left:100px; top:242px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:200;">
                    Electrical Failures
                </h1>
                <ls-layer style="color:#ffffff; font-family:DM Sans; font-size:18px; top:400px; left:300px; line-height:30px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:400;">
                    If you experience frequent circuit breaker trips, flickering lights, or you
                    <br>
                    have an older home with outdated wiring, it may be time
                </ls-layer>
                <ls-layer style="padding-top:0; padding-bottom:0; padding-right:2.48em; padding-left:2.48em; line-height: 56px; font-family:DM Sans; font-weight:700; background-color:#fff; left:300px; top:490px; text-align:center; text-transform:uppercase; color:#D23024; font-size:16px;" class="ls-l ls-hide-tablet ls-hide-phone ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                    describe more <i class="far fa-long-arrow-right"></i>
                    <a href="about.html" class="inner-hero-link"><span class="sr-only">link</span></a>
                </ls-layer>
                <ls-layer style="padding-top:0; padding-bottom:0; padding-right:2.48em; padding-left:2.48em; line-height: 100px; font-family:DM Sans; font-weight:700; background-color:#fff; left:300px; top:449px; text-align:center; text-transform:uppercase; color:#D23024; font-size:26px;" class="ls-l ls-hide-desktop ls-hide-phone ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                    describe more <i class="far fa-long-arrow-right"></i>
                    <a href="about.html" class="inner-hero-link"><span class="sr-only">link</span></a>
                </ls-layer>
                <ls-layer style="padding-top:0; padding-bottom:0; padding-right:1em; padding-left:1em; line-height: 140px; font-family:DM Sans; font-weight:700; background-color:#fff; left:100px; top:431px; text-align:center; text-transform:uppercase; color:#D23024; font-size:60px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                    describe more
                    <a href="about.html" class="inner-hero-link"><span class="sr-only">link</span></a>
                </ls-layer>
                <ls-layer style="left:1492px; top:325px;" class="ls-l ls-hide-phone ls-html-layer">
                    <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=TnoL4Kr3InHnMwPu" class="play-btn style2 popup-video"><i class="fa fa-play"></i></a>
                </ls-layer>
                <ls-layer style="left:1535px; top:242px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer">
                    <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=TnoL4Kr3InHnMwPu" class="play-btn style2 popup-video"><i class="fa fa-play"></i></a>
                </ls-layer>
                <ls-layer style="top:490px; left:540px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
                    <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
                </ls-layer>
                <ls-layer style="top:442px; left:738px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
                    <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
                </ls-layer>
                <ls-layer style="top:429px; left:807px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
                    <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
                </ls-layer>
            </div>


        </div>
    </section><!--==============================
    About Area
    ==============================-->
    <section class="position-relative space-top space-extra-bottom">
        <div class="about-shape1 d-none d-hd-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/ab-shape-3-1.png" alt="about"></div>
        <div class="container">
            <div class="row gx-85">
                <div class="col-lg-6">
                    <div class="img-box2">
                        <div class="img-1">
                            <div class="line"></div>
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/ab-3-1.png" alt="image">
                        </div>
                        <div class="img-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/ab-3-2.png" alt="image"></div>
                        <div class="img-3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/ab-3-3.png" alt="image"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="title-area mb-30">
                        <span class="sec-subtitle">About us</span>
                        <h2 class="sec-title">We Restore the Power you Enjoy the Safety</h2>
                        <p class="sec-text">We handle all residential and commercial electrical repairs, including wiring issues, fuse replacement, circuit breaker fixes, and more outdated wiring, it may be time for an inspection repairs safely an inspection.</p>
                        <div class="row gy-3">
                            <div class="col-auto">
                                <a href="about.html" class="vs-btn style2">About Us<i class="far fa-long-arrow-right"></i></a>
                            </div>
                            <div class="col-auto">
                                <div class="author-style1">
                                    <div class="author-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/ab-author-1.png" alt="author"></div>
                                    <div class="author-body">
                                        <h4 class="author-name">Brooklyn Simmons</h4>
                                        <span class="author-degi">Co-Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="feature-box1">
                            <div class="row gx-0">
                                <div class="col-sm-6 feature-style1">
                                    <div class="feature-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/fe-1-2.svg" alt="icon"></div>
                                    <h3 class="feature-title">Expert Electrician</h3>
                                    <p class="feature-text">We handle all residential a and commercial</p>
                                </div>
                                <div class="col-sm-6 feature-style1">
                                    <div class="feature-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/fe-1-1.svg" alt="icon"></div>
                                    <h3 class="feature-title">Ceiling Fan Installation</h3>
                                    <p class="feature-text">We handle all residential a and commercial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Services Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/service-bg-2-1.png">
        <div class="container">
            <div class="title-area text-center text-xl-start">
                <span class="sec-subtitle2">Services</span>
                <h2 class="sec-title text-white">We Provide Best Service</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-8 z-index-common">
                    <div class="service-slider-one">
                        <div>
                            <div class="service-style2">
                                <div class="service-img"><a href="service-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-img-2-0.png" alt="service"></a></div>
                                <div class="service-content">
                                    <div class="service-top">
                                        <div class="service-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/sr-i-2-0.svg" alt="icon"></div>
                                        <span class="service-number">01</span>
                                    </div>
                                    <h3 class="service-title h5"><a href="service-details.html" class="text-inherit">Smart Home Installations</a></h3>
                                    <p class="service-text">In case of an electrical emergency, first an any you kind safety by turning off the kind main</p>
                                    <ul class="list-unstyled service-list">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Commercial Services</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Light Fixture Repair</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Surge Protection Setup</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Rapid Fuse Repair</li>
                                    </ul>
                                    <a href="service-details.html" class="arrow-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="service-style2">
                                <div class="service-img"><a href="service-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-img-2-1.png" alt="service"></a></div>
                                <div class="service-content">
                                    <div class="service-top">
                                        <div class="service-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/sr-i-2-1.svg" alt="icon"></div>
                                        <span class="service-number">02</span>
                                    </div>
                                    <h3 class="service-title h5"><a href="service-details.html" class="text-inherit">Electrical Panel Upgrades</a></h3>
                                    <p class="service-text">In case of an electrical emergency, first an any you kind safety by turning off the kind main</p>
                                    <ul class="list-unstyled service-list">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Commercial Services</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Light Fixture Repair</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Surge Protection Setup</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Rapid Fuse Repair</li>
                                    </ul>
                                    <a href="service-details.html" class="arrow-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="service-style2">
                                <div class="service-img"><a href="service-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-img-2-2.png" alt="service"></a></div>
                                <div class="service-content">
                                    <div class="service-top">
                                        <div class="service-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/sr-i-2-2.svg" alt="icon"></div>
                                        <span class="service-number">03</span>
                                    </div>
                                    <h3 class="service-title h5"><a href="service-details.html" class="text-inherit">Surge Protection Setup</a></h3>
                                    <p class="service-text">In case of an electrical emergency, first an any you kind safety by turning off the kind main</p>
                                    <ul class="list-unstyled service-list">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Commercial Services</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Light Fixture Repair</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Surge Protection Setup</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Rapid Fuse Repair</li>
                                    </ul>
                                    <a href="service-details.html" class="arrow-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="service-style2">
                                <div class="service-img"><a href="service-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-img-2-3.png" alt="service"></a></div>
                                <div class="service-content">
                                    <div class="service-top">
                                        <div class="service-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/sr-i-2-3.svg" alt="icon"></div>
                                        <span class="service-number">04</span>
                                    </div>
                                    <h3 class="service-title h5"><a href="service-details.html" class="text-inherit">Outlet & Switch Repairs</a></h3>
                                    <p class="service-text">In case of an electrical emergency, first an any you kind safety by turning off the kind main</p>
                                    <ul class="list-unstyled service-list">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Commercial Services</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Light Fixture Repair</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Surge Protection Setup</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Rapid Fuse Repair</li>
                                    </ul>
                                    <a href="service-details.html" class="arrow-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="service-style2">
                                <div class="service-img"><a href="service-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-img-2-4.png" alt="service"></a></div>
                                <div class="service-content">
                                    <div class="service-top">
                                        <div class="service-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/sr-i-2-4.svg" alt="icon"></div>
                                        <span class="service-number">05</span>
                                    </div>
                                    <h3 class="service-title h5"><a href="service-details.html" class="text-inherit">Lighting Installation</a></h3>
                                    <p class="service-text">In case of an electrical emergency, first an any you kind safety by turning off the kind main</p>
                                    <ul class="list-unstyled service-list">
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Commercial Services</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Light Fixture Repair</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Surge Protection Setup</li>
                                        <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/check-in-icon.svg" alt="icon"> Rapid Fuse Repair</li>
                                    </ul>
                                    <a href="service-details.html" class="arrow-btn">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="thumb-style1 service-slider-two">
                        <div>
                            <div class="thumb-item">
                                <div class="thumb-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-thumb-1-1.png" alt="image"></div>
                                <h3 class="thumb-title h6">Smart Home Installations</h3>
                            </div>
                        </div>
                        <div>
                            <div class="thumb-item">
                                <div class="thumb-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-thumb-1-2.png" alt="image"></div>
                                <h3 class="thumb-title h6">Electrical Panel Upgrades</h3>
                            </div>
                        </div>
                        <div>
                            <div class="thumb-item">
                                <div class="thumb-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-thumb-1-3.png" alt="image"></div>
                                <h3 class="thumb-title h6">Surge Protection Setup</h3>
                            </div>
                        </div>
                        <div>
                            <div class="thumb-item">
                                <div class="thumb-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-thumb-1-4.png" alt="image"></div>
                                <h3 class="thumb-title h6">Outlet & Switch Repairs</h3>
                            </div>
                        </div>
                        <div>
                            <div class="thumb-item">
                                <div class="thumb-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/service/sr-thumb-1-5.png" alt="image"></div>
                                <h3 class="thumb-title h6">Lighting Installation</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Team Area
    ==============================-->
    <section class="position-relative space-top space-extra-bottom">
        <div class="team-shape1 d-none d-hd-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/team-shape-1-1.png" alt="team shape"></div>
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Team Members</span>
                        <h2 class="sec-title">Meet Our Team of Expert Electrical Staff</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-arrows="true" data-md-slide-show="2" data-lg-slide-show="3" data-slide-show="4" data-xs-dots="true">
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/team-1-1.png" alt="team"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a class="text-inherit" href="team-details.html">Leslie Alexander</a></h3>
                            <span class="team-degi">Electrical CEO</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/team-1-2.png" alt="team"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a class="text-inherit" href="team-details.html">Guy Hawkins</a></h3>
                            <span class="team-degi">Chief Service Engineer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/team-1-3.png" alt="team"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a class="text-inherit" href="team-details.html">Brooklyn Simmons</a></h3>
                            <span class="team-degi">Supervisor</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/team-1-4.png" alt="team"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a class="text-inherit" href="team-details.html">Darlene Robertson</a></h3>
                            <span class="team-degi">Junior Electrician</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="team-style1">
                        <div class="team-img">
                            <a href="team-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/team/team-1-5.png" alt="team"></a>
                            <div class="team-social">
                                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                                <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="team-name"><a class="text-inherit" href="team-details.html">Redwan Hussain</a></h3>
                            <span class="team-degi">Founder</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Gallery Area
    ==============================-->
    <section class="position-relative space-top space-extra-bottom" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/gallery-bg-3-1.png">
        <div class="gallery-shape2 d-none d-hd-block" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/gallery-shape-1-1.png"></div>
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center text-center text-lg-start">
                <div class="col-md-8 col-lg-6">
                    <div class="title-area pe-xl-4 has-sec-btns">
                        <span class="sec-subtitle2">Portfolio</span>
                        <h2 class="sec-title">Our Work Portfolio That You Get Ideas</h2>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btns">
                        <button class="slick-arrow style2 default" data-slick-prev="#gallerySlider2"><i class="far fa-long-arrow-left"></i></button>
                        <button class="slick-arrow style2 default" data-slick-next="#gallerySlider2"><i class="far fa-long-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="container-style1">
                <div class="row vs-carousel" id="gallerySlider2" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-center-mode="true" data-center-padding="300px">
                    <div class="col-xl-3">
                        <div class="gallery-style2">
                            <div class="gallery-img"><a href="project-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gal-3-1.png" alt="gallery"></a></div>
                            <div class="gallery-content">
                                <span class="gallery-label">Express Electric</span>
                                <h3 class="gallery-title h5"><a class="text-inherit" href="project-details.html">Full Circuit Diagnostics</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="gallery-style2">
                            <div class="gallery-img"><a href="project-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gal-3-2.png" alt="gallery"></a></div>
                            <div class="gallery-content">
                                <span class="gallery-label">Express Electric</span>
                                <h3 class="gallery-title h5"><a class="text-inherit" href="project-details.html">Full Circuit Diagnostics</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="gallery-style2">
                            <div class="gallery-img"><a href="project-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gal-3-3.png" alt="gallery"></a></div>
                            <div class="gallery-content">
                                <span class="gallery-label">Express Electric</span>
                                <h3 class="gallery-title h5"><a class="text-inherit" href="project-details.html">Full Circuit Diagnostics</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="gallery-style2">
                            <div class="gallery-img"><a href="project-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gal-3-4.png" alt="gallery"></a></div>
                            <div class="gallery-content">
                                <span class="gallery-label">Express Electric</span>
                                <h3 class="gallery-title h5"><a class="text-inherit" href="project-details.html">Full Circuit Diagnostics</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="gallery-style2">
                            <div class="gallery-img"><a href="project-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery/gal-3-5.png" alt="gallery"></a></div>
                            <div class="gallery-content">
                                <span class="gallery-label">Express Electric</span>
                                <h3 class="gallery-title h5"><a class="text-inherit" href="project-details.html">Full Circuit Diagnostics</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Testimonial Area
    ==============================-->
    <section class="position-relative space-top space-extra-bottom">
        <div class="testi-shape2 d-none d-hd-block"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/shape/testi-shape-2-1.png" alt="shape"></div>
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-4">
                    <div class="title-area">
                        <span class="sec-subtitle">Testimonial</span>
                        <h2 class="sec-title">What Clients Say About Us</h2>
                    </div>
                </div>
            </div>
            <div class="testi-style2">
                <div class="avater-area vs-carousel vs-3d-slider" id="testislider2" data-slide-show="5" data-xl-slide-show="5" data-ml-slide-show="5" data-lg-slide-show="5" data-md-slide-show="5" data-sm-slide-show="3" data-xs-slide-show="3" data-center-mode="true" data-xl-center-mode="true" data-lg-center-mode="true" data-md-center-mode="true" data-sm-center-mode="true" data-xs-center-mode="true" data-asnavfor="#testislidebody2">
                    <div>
                        <div class="avater"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testi/testi-1-1.png" alt="author"></div>
                    </div>
                    <div>
                        <div class="avater"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testi/testi-1-2.png" alt="author"></div>
                    </div>
                    <div>
                        <div class="avater"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testi/testi-1-3.png" alt="author"></div>
                    </div>
                    <div>
                        <div class="avater"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testi/testi-1-4.png" alt="author"></div>
                    </div>
                    <div>
                        <div class="avater"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testi/testi-1-5.png" alt="author"></div>
                    </div>
                    <div>
                        <div class="avater"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/testi/testi-1-6.png" alt="author"></div>
                    </div>
                </div>
                <div class="testi-body vs-carousel" id="testislidebody2" data-slide-show="1" data-fade="true" data-arrows="true" data-asnavfor="#testislider2">
                    <div>
                        <div class="testi-inner">
                            <h3 class="testi-name">Brooklyn Simmons</h3>
                            <p class="testi-degi">Business Man</p>
                            <p class="testi-text">“Excellent work from this company! They handled our electrical issues quickly and professionally. The lights are working great, and the place feels safer now. They were polite, efficient, and reasonably priced. I highly recommend them for any residential or commercial electrical project.”</p>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-inner">
                            <h3 class="testi-name">Jordan Ellis</h3>
                            <p class="testi-degi">Homeowner</p>
                            <p class="testi-text">“I’m really happy with the results! The team did a fantastic job and delivered exactly what we imagined. The process was smooth and professional. They handled the wiring, lighting, and minor repairs perfectly. I’d rate the work 5 out of 5 and highly recommend them to others.”</p>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-inner">
                            <h3 class="testi-name">Ava Thompson</h3>
                            <p class="testi-degi">Store Owner</p>
                            <p class="testi-text">“Great service from start to finish! They were on time, very professional, and the work was completed quickly. We needed help with lights and circuit issues, and everything was resolved smoothly. The final result was clean, safe, and affordable. Will definitely call them again.”</p>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-inner">
                            <h3 class="testi-name">Daniel Carter</h3>
                            <p class="testi-degi">Property Manager</p>
                            <p class="testi-text">“The project turned out better than expected! I really liked how they explained everything in detail before starting. They installed new lights, checked all the wiring, and made sure everything was safe. I’m completely satisfied and would strongly recommend their services to others.”</p>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        </div>
                    </div>
                    <div>
                        <div class="testi-inner">
                            <h3 class="testi-name">Sophia Martinez</h3>
                            <p class="testi-degi">Interior Designer</p>
                            <p class="testi-text">“They did a wonderful job! The lights and outlets were installed just how we wanted. Everything looks neat and works perfectly. They also finished the job quickly and cleaned up well. It’s great to find a team that truly cares about quality work and happy customers.”</p>
                            <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Counter Area
    ==============================-->
    <div>
        <div class="container-xl container-style3">
            <div class="counter-inner1 bg-theme" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/counter-bg-1-1.png">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-3 col-xxl-auto">
                        <div class="counter-style1">
                            <div class="counter-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/counter-i-1-1.svg" alt="icon"></div>
                            <p class="counter-number">2.5M</p>
                            <p class="counter-text">Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xxl-auto">
                        <div class="counter-style1">
                            <div class="counter-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/counter-i-1-2.svg" alt="icon"></div>
                            <p class="counter-number">100+</p>
                            <p class="counter-text">Experienced Staff</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xxl-auto">
                        <div class="counter-style1">
                            <div class="counter-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/counter-i-1-3.svg" alt="icon"></div>
                            <p class="counter-number">569</p>
                            <p class="counter-text">Award Wining</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xxl-auto">
                        <div class="counter-style1">
                            <div class="counter-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon/counter-i-1-4.svg" alt="icon"></div>
                            <p class="counter-number">220+</p>
                            <p class="counter-text">Success Full Project</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Accordion Area
    ==============================-->
    <section>
        <div class="container-fluid px-0">
            <div class="row gx-0">
                <div class="col-xl-6 col-xxl">
                    <div class="img-box3">
                        <div class="img-1" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about/accordion-1-1.png"></div>
                        <a href="https://www.youtube-nocookie.com/embed/ckOWcNLkbZc?si=TnoL4Kr3InHnMwPu" class="play-btn style2 popup-video"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-auto">
                    <div class="accordion-inner1">
                        <div class="title-area">
                            <span class="sec-subtitle">FAQ</span>
                            <h2 class="sec-title">Frequently Asked Questions</h2>
                        </div>
                        <div class="accordion accordion-style1" id="faqVersion1">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What should I do in an electrical emergency?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Signs that you may need to rewire your home include frequent electrical problems, such as blown fuses or tripped breakers, outdated wiring kinds discolored outlets, or a burning smell near outlets or switches.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What are the signs that I need to rewire my home?
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Signs that you may need to rewire your home include frequent electrical problems, such as blown fuses or tripped breakers, outdated wiring kinds discolored outlets, or a burning smell near outlets or switches.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What should I do in an electrical emergency?
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                                    <div class="accordion-body">
                                        <p>Signs that you may need to rewire your home include frequent electrical problems, such as blown fuses or tripped breakers, outdated wiring kinds discolored outlets, or a burning smell near outlets or switches.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="accordion-shape1" data-bg-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/bg/accordion-shape-1-1.png"></div>
                </div>
            </div>
        </div>
    </section><!--==============================
    Blog Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sec-subtitle">Blog & News</span>
                <h2 class="sec-title">Latest New and Blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-xl-4 order-1">
                    <div class="blog-style1 layout3">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog-1-1.png" alt="blog"></a>
                            <a href="blog.html" class="blog-date">11 May, 2025</a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-comments"></i>06 Comments</a>
                                <a href="blog.html"><i class="far fa-user"></i>Admin</a>
                            </div>
                            <h3 class="blog-title h5"><a href="blog-details.html" class="text-inherit">We can wiring repairs, circuit breaker replacement</a></h3>
                            <p class="blog-text">We prioritize emergency calls and aim to be on-site within an hour.</p>
                            <a href="blog-details.html" class="blog-btn">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 order-3 order-xl-2">
                    <div class="row">
                        <div class="col-lg-6 col-xl-12">
                            <div class="blog-style1 layout3">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-comments"></i>02 Comments</a>
                                        <a href="blog.html"><i class="far fa-user"></i>Admin</a>
                                    </div>
                                    <h3 class="blog-title h5"><a href="blog-details.html" class="text-inherit">Lighting Up Your World, One Fix at a Time</a></h3>
                                    <p class="blog-text">We prioritize emergency calls and aim to be on-site within an hour.</p>
                                    <a href="blog-details.html" class="blog-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-12">
                            <div class="blog-style1 layout3">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="blog.html"><i class="far fa-comments"></i>09 Comments</a>
                                        <a href="blog.html"><i class="far fa-user"></i>Admin</a>
                                    </div>
                                    <h3 class="blog-title h5"><a href="blog-details.html" class="text-inherit">We Restore the Power, You a Enjoy the Safety</a></h3>
                                    <p class="blog-text">We prioritize emergency calls and aim to be on-site within an hour.</p>
                                    <a href="blog-details.html" class="blog-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 order-2 order-xl-3">
                    <div class="blog-style1 layout3">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog/blog-1-2.png" alt="blog"></a>
                            <a href="blog.html" class="blog-date">15 Jan, 2025</a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="far fa-comments"></i>02 Comments</a>
                                <a href="blog.html"><i class="far fa-user"></i>Admin</a>
                            </div>
                            <h3 class="blog-title h5"><a href="blog-details.html" class="text-inherit">Fixing Connections Brighter Tomorrows</a></h3>
                            <p class="blog-text">We prioritize emergency calls and aim to be on-site within an hour.</p>
                            <a href="blog-details.html" class="blog-btn">Read More<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <?php endif; ?>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
