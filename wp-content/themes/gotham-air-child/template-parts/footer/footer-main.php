<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/*
|--------------------------------------------------------------------------
| Footer Settings
|--------------------------------------------------------------------------
*/
$footer_top_bg = get_theme_mod(
	'gt_footer_top_bg',
	get_stylesheet_directory_uri() . '/assets/img/bg/footer-bg-3-1.png'
);
$footer_bottom_bg = get_theme_mod(
	'gt_footer_bottom_bg',
	get_stylesheet_directory_uri() . '/assets/img/bg/footer-bg-3-2.png'
);
$cta_title = get_theme_mod(
	'gt_footer_cta_title',
	'READY TO GET STARTED?'
);
$newsletter_shortcode = get_theme_mod(
	'gt_footer_newsletter_shortcode',
	''
);
/*
|--------------------------------------------------------------------------
| Titles
|--------------------------------------------------------------------------
*/
$services_title = get_theme_mod(
	'gt_footer_services_title',
	'Services'
);
$quicklinks_title = get_theme_mod(
	'gt_footer_quicklinks_title',
	'Quick Links'
);
$hours_title = get_theme_mod(
	'gt_footer_hours_title',
	'Working Hours'
);
$certificate_title = get_theme_mod(
	'gt_footer_certificate_title',
	'Certifications'
);
/*
|--------------------------------------------------------------------------
| Hours
|--------------------------------------------------------------------------
*/
$hours = [];
for ( $i = 1; $i <= 4; $i++ ) {
	$day  = get_theme_mod( 'gt_footer_hours_day_' . $i );
	$time = get_theme_mod( 'gt_footer_hours_time_' . $i );
	if ( ! empty( $day ) || ! empty( $time ) ) {
		$hours[] = [
			'day'  => $day,
			'time' => $time,
		];
	}
}
/*
|--------------------------------------------------------------------------
| Social
|--------------------------------------------------------------------------
*/
$facebook  = get_theme_mod( 'gt_footer_facebook' );
$instagram = get_theme_mod( 'gt_footer_instagram' );
$linkedin  = get_theme_mod( 'gt_footer_linkedin' );
$google   = get_theme_mod( 'gt_footer_google' );
$youtube   = get_theme_mod( 'gt_footer_youtube' );
/*
|--------------------------------------------------------------------------
| Copyright
|--------------------------------------------------------------------------
*/
$copyright_text = get_theme_mod(
	'gt_footer_copyright_text',
	'Copyright © ' . date('Y') . ' Gotham Air. All Rights Reserved.'
);
$developer_text = get_theme_mod(
	'gt_footer_developer_text',
	'Designed By'
);
$developer_name = get_theme_mod(
	'gt_footer_developer_name',
	'Venz Media'
);
$developer_url = get_theme_mod(
	'gt_footer_developer_url',
	'#'
);
$certificate_image = get_theme_mod(
	'gt_footer_certificate_image',
	''
);
/*
|--------------------------------------------------------------------------
| Internal Footer
|--------------------------------------------------------------------------
*/
$internal_logo = get_theme_mod(
	'gt_footer_internal_logo',
	get_stylesheet_directory_uri() . '/assets/img/logo-red-white.svg'
);
$internal_phone_title = get_theme_mod(
	'gt_footer_internal_phone_title',
	'Call any time 24/7'
);
$internal_phone = get_theme_mod(
	'gt_footer_internal_phone',
	''
);
$internal_phone_icon = get_theme_mod(
	'gt_footer_internal_phone_icon',
	get_stylesheet_directory_uri() . '/assets/img/call-i.svg'
);
?>
<?php if(is_front_page() || is_page(8)): ?>
<footer class="footer-wrapper footer-layout3 bg-title">
<?php else: ?>
<footer class="footer-wrapper footer-layout3 bg-title background-image" style="background-image: url('<?php echo get_stylesheet_directory_uri(""); ?>/assets/img/bg/footer-bg-1-1.png');">
<?php endif; ?>
  <?php if(is_front_page() || is_page(8)): ?>
  <!-- FOOTER TOP -->
	<div class="footer-top" data-bg-src="<?php echo esc_url( $footer_top_bg ); ?>">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-auto text-center">
					<?php if ( ! empty( $cta_title ) ) : ?>
						<h2 class="sec-title text-white mb-lg-0">
							<?php echo esc_html( $cta_title ); ?>
						</h2>
					<?php endif; ?>
				</div>
				<div class="col-lg-auto">
					<?php
					if ( ! empty( $newsletter_shortcode ) ) {
						echo do_shortcode( $newsletter_shortcode );
					}
					?>
				</div>
			</div>
		</div>
	</div>
  <?php else: ?>
  <!-- FOOTER CONTENT INTERNOR -->
  <div class="container">
    <div class="footer-top">
      <div class="row align-items-center justify-content-center justify-content-md-between text-center text-md-start gy-4">
        <div class="col-md-4 col-lg-auto">
          <a href="<?php echo esc_url( home_url('/') ); ?>" class="logoFooter">
            <img src="<?php echo esc_url( $internal_logo ); ?>" alt="<?php bloginfo('name'); ?>">
          </a>
        </div>
        <?php if ( ! empty( $internal_phone ) ) : ?>
        <div class="col-auto">
          <div class="media-style2">
            <div class="media-icon">
              <img src="<?php echo esc_url( $internal_phone_icon ); ?>" alt="Phone Icon">
            </div>
            <div class="media-body">
              <p class="media-title">
                <?php echo esc_html( $internal_phone_title ); ?>
              </p>
              <p class="media-text">
                <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $internal_phone); ?>" class="text-reset">
                  <?php echo esc_html( $internal_phone ); ?>
                </a>
              </p>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <div class="col-md-auto">
          <div class="social-style1">
            <?php if ( $facebook ) : ?>
              <a href="<?php echo esc_url( $facebook ); ?>" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            <?php endif; ?>
            <?php if ( $google ) : ?>
              <a href="<?php echo esc_url( $google ); ?>" target="_blank">
                <i class="fab fa-google-plus"></i>
              </a>
            <?php endif; ?>
            <?php if ( $linkedin ) : ?>
              <a href="<?php echo esc_url( $linkedin ); ?>" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            <?php endif; ?>
            <?php if ( $instagram ) : ?>
              <a href="<?php echo esc_url( $instagram ); ?>" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            <?php endif; ?>
            <?php if ( $youtube ) : ?>
              <a href="<?php echo esc_url( $youtube ); ?>" target="_blank">
                <i class="fab fa-youtube"></i>
              </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
	<!-- WIDGET AREA -->
	<div class="widget-area">
		<div class="container">
			<div class="row justify-content-between">
				<!-- SERVICES -->
				<div class="col-sm-6 col-lg-3 col-xl-auto">
					<div class="widget widget_nav_menu footer-widget">
						<h3 class="widget_title">
							<?php echo esc_html( $services_title ); ?>
						</h3>
						<div class="menu-all-pages-container footer-menu">
							<?php
							wp_nav_menu([
								'theme_location' => 'menu-services',
								'container'      => false,
								'menu_class'     => 'menu',
								'fallback_cb'    => false,
							]);
							?>
						</div>
					</div>
				</div>
				<!-- QUICK LINKS -->
				<div class="col-sm-6 col-lg-2 col-xl-auto">
					<div class="widget widget_pages  footer-widget">
						<h3 class="widget_title">
							<?php echo esc_html( $quicklinks_title ); ?>
						</h3>
						<?php
						wp_nav_menu([
							'theme_location' => 'menu-footer',
							'container'      => false,
							'fallback_cb'    => false,
						]);
						?>
					</div>
				</div>
				<!-- HOURS -->
				<div class="col-md-6 col-lg-4 col-xl-auto">
					<div class="widget footer-widget">
						<h3 class="widget_title">
							<?php echo esc_html( $hours_title ); ?>
						</h3>
						<div class="footer-table">
							<table>
								<?php foreach ( $hours as $row ) : ?>
									<tr>
										<td>
											<?php echo esc_html( $row['day'] ); ?>
										</td>
										<td>
											<?php echo esc_html( $row['time'] ); ?>
										</td>
									</tr>
								<?php endforeach; ?>
							</table>
						</div>
					</div>
				</div>
				<!-- certificated -->
				<div class="col-md-6 col-lg-3 col-xl-auto">
					<div class="widget footer-widget">
						<h4 class="widget_title">
							<?php echo esc_html( $certificate_title ); ?>
						</h4>
						<?php if ( ! empty( $certificate_image ) ) : ?>
							<div class="footer-certificate">
								<img
									src="<?php echo esc_url( $certificate_image ); ?>"
									alt="<?php echo esc_attr( $certificate_title ); ?>"
								>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- COPYRIGHT -->
	<?php if(is_front_page() || is_page(8)): ?>
	<div class="copyright-wrap" data-bg-src="<?php echo esc_url( $footer_bottom_bg ); ?>">
	<?php else: ?>
	<div class="copyright-wrap">
	<?php endif; ?>
		<div class="container">
			<div class="row align-items-center justify-content-between flex-row-reverse gy-2 text-center text-md-start">
				<div class="col-md-auto">
					<div class="copyright-menu">
						<?php
						wp_nav_menu([
							'theme_location' => 'menu-copyright',
							'container'      => false,
							'fallback_cb'    => false,
						]);
						?>
					</div>
				</div>
				<div class="col-md-auto">
					<p class="copyright-text">
						<?php echo esc_html( $copyright_text ); ?>
						<?php if ( ! empty( $developer_name ) ) : ?>
							<?php echo esc_html( $developer_text ); ?>
							<a href="<?php echo esc_url( $developer_url ); ?>" target="_blank" rel="noopener">
								<?php echo esc_html( $developer_name ); ?>
							</a>
						<?php endif; ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>