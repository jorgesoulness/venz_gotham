<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
    <div class="sticky-header-wrap sticky-wrap sticky-header">
      <div class="sticky-active">
        <div class="container position-relative">
          <div class="row align-items-center">
            <div class="col-5 col-md-3">
              <div class="logo">
                <a href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gotham_air_hori_logo.svg" alt="Gotham Air">
                </a>
              </div>
            </div>
            <div class="col-7 col-md-9 text-end position-static">
              <nav class="main-menu menu-sticky1 d-none d-lg-block">
                <ul>
                  <li class="menu-item-has-children">
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                      <li><a href="#">Home Style 1</a></li>
                      <li><a href="#">Home Style 2</a></li>
                      <li><a href="#">Home Style 3</a></li>
                    </ul>
                  </li>
                  <!-- <li>
                    <a href="#">About Us</a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Services</a>
                    <ul class="sub-menu">
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Service Details</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children mega-menu-wrap">
                    <a href="#">Pages</a>
                    <ul class="mega-menu">
                      <li><a href="#">Pagelist 1</a>
                        <ul>
                          <li><a href="#">Home Style 1</a></li>
                          <li><a href="#">Home Style 2</a></li>
                          <li><a href="#">Home Style 3</a></li>
                          <li><a href="#">About Us</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Pagelist 2</a>
                        <ul>
                          <li><a href="#">Services</a></li>
                          <li><a href="#">Service Details</a></li>
                          <li><a href="#">Team</a></li>
                          <li><a href="#">Team Details</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Pagelist 3</a>
                        <ul>
                          <li><a href="#">Pricing Plans</a></li>
                          <li><a href="#">Blog Grid</a></li>
                          <li><a href="#">Blog Standard</a></li>
                          <li><a href="#">Blog Details</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Pagelist 4</a>
                        <ul>
                          <li><a href="#">FAQ Page</a></li>
                          <li><a href="#">Project</a></li>
                          <li><a href="#">Project Details</a></li>
                          <li><a href="#">Contact Us</a></li>
                          <li><a href="#">Error Page</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                      <li><a href="#">Blog Grid</a></li>
                      <li><a href="#">Blog Standard</a></li>
                      <li><a href="#">Blog Details</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li> -->
                </ul>
              </nav>
              <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
      <button class="vs-btn preloaderCls">Cancel Preloader</button>
      <div class="preloader-inner">
        <div class="loader"></div>
      </div>
    </div>
  <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
      <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
          <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gotham_air_hori_logo.svg" alt="Gotham Air"></a>
        </div>
        <div class="vs-mobile-menu">
          <ul>
            <li class="menu-item-has-children">
              <a href="#">Home</a>
              <ul class="sub-menu">
                <li><a href="#">Home Style 1</a></li>
                <li><a href="#">Home Style 2</a></li>
                <li><a href="#">Home Style 3</a></li>
              </ul>
            </li>
            <!-- <li>
              <a href="#">About Us</a>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Services</a>
              <ul class="sub-menu">
                <li><a href="#">Services</a></li>
                <li><a href="#">Service Details</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Team</a>
              <ul class="sub-menu">
                <li><a href="#">Team</a></li>
                <li><a href="#">Team Details</a></li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="#">Pages</a>
              <ul class="sub-menu">
                <li><a href="#">Pricing Plans</a></li>
                <li><a href="#">Blog Grid</a></li>
                <li><a href="#">Blog Standard</a></li>
                <li><a href="#">Blog Details</a></li>
                <li><a href="#">FAQ Page</a></li>
                <li><a href="#">Project</a></li>
                <li><a href="#">Project Details</a></li>
                <li><a href="#">Error Page</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Contact Us</a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout2">
        <div class="header-top">
          <div class="container">
            <div class="row align-items-center justify-content-between">
              <div class="col-md-auto text-center text-md-start">
                <div class="header-links">
                  <ul>
                    <li><i class="fas fa-phone-alt"></i><a href="tel:+44123456789">+44 123456789</a></li>
                    <li><i class="fas fa-envelope"></i><a href="mailto:info@example.com">info@example.com</a></li>
                    <li class="d-none d-md-inline-block"><i class="far fa-map-marker-alt"></i>1901 Thornridge Cir.</li>
                  </ul>
                </div>
              </div>
              <div class="col-auto d-none d-md-block">
                <div class="social-style2">
                  <span class="social-title">Follow Us On:</span>
                  <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                  <a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="menu-area">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <div class="header-logo">
                            <a href="#">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gotham_air_hori_logo.svg" alt="Gotham Air">
                            </a>
                          </div>
                        </div>
                        <div class="col text-end text-xl-center">
                          <nav class="main-menu menu-style1 d-none d-lg-block">
                            <ul>
                              <li class="menu-item-has-children">
                                <a href="#">Home</a>
                                <ul class="sub-menu">
                                  <li><a href="#">Home Style 1</a></li>
                                  <li><a href="#">Home Style 2</a></li>
                                  <li><a href="#">Home Style 3</a></li>
                                </ul>
                              </li>
                              <!-- <li>
                                <a href="#">About Us</a>
                              </li>
                              <li class="menu-item-has-children">
                                <a href="#">Services</a>
                                <ul class="sub-menu">
                                  <li><a href="#">Services</a></li>
                                  <li><a href="#">Service Details</a></li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children mega-menu-wrap">
                                <a href="#">Pages</a>
                                <ul class="mega-menu">
                                  <li><a href="#">Pagelist 1</a>
                                    <ul>
                                      <li><a href="#">Home Style 1</a></li>
                                      <li><a href="#">Home Style 2</a></li>
                                      <li><a href="#">Home Style 3</a></li>
                                      <li><a href="#">About Us</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="#">Pagelist 2</a>
                                    <ul>
                                      <li><a href="#">Services</a></li>
                                      <li><a href="#">Service Details</a></li>
                                      <li><a href="#">Team</a></li>
                                      <li><a href="#">Team Details</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="#">Pagelist 3</a>
                                    <ul>
                                      <li><a href="#">Pricing Plans</a></li>
                                      <li><a href="#">Blog Grid</a></li>
                                      <li><a href="#">Blog Standard</a></li>
                                      <li><a href="#">Blog Details</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="#">Pagelist 4</a>
                                    <ul>
                                      <li><a href="#">FAQ Page</a></li>
                                      <li><a href="#">Project</a></li>
                                      <li><a href="#">Project Details</a></li>
                                      <li><a href="#">Contact Us</a></li>
                                      <li><a href="#">Error Page</a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                  <li><a href="#">Blog Grid</a></li>
                                  <li><a href="#">Blog Standard</a></li>
                                  <li><a href="#">Blog Details</a></li>
                                </ul>
                              </li>
                              <li>
                                <a href="#">Contact</a>
                              </li> -->
                            </ul>
                          </nav>
                          <button class="vs-menu-toggle d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                          <div class="header-btn">
                            <a href="#" class="vs-btn">get a quote<i class="far fa-long-arrow-right"></i></a>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>