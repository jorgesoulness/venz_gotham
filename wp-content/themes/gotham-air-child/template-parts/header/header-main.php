<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$header_logo = get_theme_mod( 'gt_header_logo' );
$sticky_logo = get_theme_mod( 'gt_header_sticky_logo' );
$mobile_logo = get_theme_mod( 'gt_header_mobile_logo' );

$phone   = get_theme_mod( 'gt_top_phone' );
$email   = get_theme_mod( 'gt_top_email' );
$address = get_theme_mod( 'gt_top_address' );

$facebook  = get_theme_mod( 'gt_facebook' );
$twitter   = get_theme_mod( 'gt_twitter' );
$linkedin  = get_theme_mod( 'gt_linkedin' );
$instagram = get_theme_mod( 'gt_instagram' );

$btn_text = get_theme_mod(
	'gt_header_button_text',
	'Get A Quote'
);

$btn_url = get_theme_mod(
	'gt_header_button_url',
	'#'
);
?>
	<div class="sticky-header-wrap sticky-wrap sticky-header">
    <div class="sticky-active">
      <div class="container position-relative">
        <div class="row align-items-center">
          <div class="col-5 col-md-3">
            <div class="logo">
              <a href="<?php echo site_url(''); ?>">
              <?php if ( $sticky_logo ) : ?>
                <img src="<?php echo esc_url( $sticky_logo ); ?>" alt="<?php bloginfo('name'); ?>">
              <?php endif; ?>
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
                <li>
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
                </li>
              </ul>
            </nav>
            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      <div class="mobile-logo">
        <a href="<?php echo site_url(''); ?>">
        <?php if ( $mobile_logo ) : ?>
          <img src="<?php echo esc_url( $mobile_logo ); ?>" alt="<?php bloginfo('name'); ?>">
        <?php endif; ?>
        </a>
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
          <li>
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
          </li>
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
                <?php if ( $phone ) : ?>
                <li>
                  <i class="fas fa-phone-alt"></i>
                  <a href="tel:<?php echo esc_attr( preg_replace('/[^0-9+]/', '', $phone ) ); ?>">
                    <?php echo esc_html( $phone ); ?>
                  </a>
                </li>
                <?php endif; ?>
                <?php if ( $email ) : ?>
                <li>
                  <i class="fas fa-envelope"></i>
                  <a href="mailto:<?php echo esc_attr( $email ); ?>">
                    <?php echo esc_html( $email ); ?>
                  </a>
                </li>
                <?php endif; ?>
                <?php if ( $address ) : ?>
                <li class="d-none d-md-inline-block">
                  <i class="far fa-map-marker-alt"></i>
                  <?php echo esc_html( $address ); ?>
                </li>
                <?php endif; ?>
              </ul>
            </div>
          </div>
          <div class="col-auto d-none d-md-block">
            <div class="social-style2">
              <span class="social-title">Follow Us On:</span>
              <?php if ( $facebook ) : ?>
              <a href="<?php echo esc_url( $facebook ); ?>">
                <i class="fab fa-facebook-f"></i>
              </a>
              <?php endif; ?>
              <?php if ( $twitter ) : ?>
              <a href="<?php echo esc_url( $twitter ); ?>">
                <i class="fab fa-twitter"></i>
              </a>
              <?php endif; ?>
              <?php if ( $linkedin ) : ?>
              <a href="<?php echo esc_url( $linkedin ); ?>">
                <i class="fab fa-linkedin"></i>
              </a>
              <?php endif; ?>
              <?php if ( $instagram ) : ?>
              <a href="<?php echo esc_url( $instagram ); ?>">
                <i class="fab fa-instagram"></i>
              </a>
              <?php endif; ?>
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
                <a href="<?php echo site_url(''); ?>">
                <?php if ( $header_logo ) : ?>
                  <img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php bloginfo('name'); ?>">
                <?php endif; ?>
                </a>
              </div>
            </div>
            <div class="col text-end text-xl-center">
              <nav class="main-menu menu-style1 d-none d-lg-block">
                <!-- <ul>
                  <li class="menu-item-has-children">
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                      <li><a href="#">Home Style 1</a></li>
                      <li><a href="#">Home Style 2</a></li>
                      <li><a href="#">Home Style 3</a></li>
                    </ul>
                  </li>
                  <li>
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
                  </li>
                </ul> -->
                <?php
                  wp_nav_menu([
                    'theme_location' => 'menu-main',
                    'container'      => false,
                    'menu_class'     => '',
                    'walker'         => new GT_Nav_Walker(),
                  ]);
                ?>
              </nav>
              <button class="vs-menu-toggle d-lg-none"><i class="fal fa-bars"></i></button>
            </div>
            <div class="col-auto d-none d-xl-block">
              <div class="header-btn">
                <a href="<?php echo esc_url( $btn_url ); ?>" class="vs-btn">
                  <?php echo esc_html( $btn_text ); ?>
                  <i class="far fa-long-arrow-right"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>