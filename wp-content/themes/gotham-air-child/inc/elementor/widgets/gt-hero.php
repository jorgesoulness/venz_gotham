<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class GT_Hero_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'gt-hero';
	}
	public function get_title() {
		return esc_html__( 'GT Hero', 'gotham-air-child' );
	}
	public function get_icon() {
		return 'eicon-slider-full-screen';
	}
	public function get_categories() {
		return [ 'gotham-air' ];
	}
	public function get_script_depends() {
		return [ 'gt-hero' ];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'hero_content',
			[
				'label' => esc_html__( 'Hero Slides', 'gotham-air-child' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'background_image',
			[
				'label' => esc_html__( 'Background Image', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
				'overlay_color',
				[
						'label' => esc_html__( 'Overlay Color', 'gotham-air-child' ),
						'type'  => \Elementor\Controls_Manager::COLOR,
						'default' => '#000000',
				]
		);
		$repeater->add_control(
				'overlay_opacity',
				[
						'label' => esc_html__( 'Overlay Opacity', 'gotham-air-child' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
						'size_units' => ['%'],
						'range' => [
								'%' => [
										'min' => 0,
										'max' => 100,
								],
						],
						'default' => [
								'unit' => '%',
								'size' => 40,
						],
				]
		);
		$repeater->add_control(
			'shape_image',
			[
				'label' => esc_html__( 'Shape Image', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
			'subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'title_line_1',
			[
				'label' => esc_html__( 'Title Line 1', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'title_line_2',
			[
				'label' => esc_html__( 'Title Line 2', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXTAREA,
			]
		);
		$repeater->add_control(
			'button_text',
			[
				'label' => esc_html__( 'Button Text', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXT,
				'default' => 'Learn More',
			]
		);
		$repeater->add_control(
			'button_url',
			[
				'label' => esc_html__( 'Button URL', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::URL,
			]
		);
		$repeater->add_control(
			'video_url',
			[
				'label' => esc_html__( 'Video URL', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXT,
			]
		);
		$this->add_control(
			'slides',
			[
				'label' => esc_html__( 'Slides', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ title_line_1 }}}',
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( empty( $settings['slides'] ) ) {
			return;
		}
		?>
		<section class="vs-hero-wrapper hero-layout1 position-relative">
			<div class="vs-hero-carousel" data-height="740" data-container="1900" data-slidertype="responsive">
				<?php foreach ( $settings['slides'] as $slide ) : ?>
					<div class="ls-slide" data-ls="duration:8000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
						<img width="1921" height="750" src="<?php echo esc_url( $slide['background_image']['url'] ); ?>" class="ls-bg" alt="" decoding="async">
						<?php if ( ! empty( $slide['shape_image']['url'] ) ) : ?>
              <img width="1164" height="756" src="<?php echo esc_url( $slide['shape_image']['url'] ); ?>" class="ls-l ls-hide-phone ls-img-layer" alt="" decoding="async" style="top:-9px; left:-7px; width:1159px; height:753px;" data-ls="static:forever;">
						<?php endif; ?>
						<?php
						$opacity = !empty($slide['overlay_opacity']['size'])
							? ($slide['overlay_opacity']['size'] / 100)
							: 0.4;
						?>
						<ls-layer
								style="
										background: <?php echo esc_attr($slide['overlay_color']); ?>;
										position: absolute;
										width:100%;
										height:100%;
										top:0;
										left:0;
										opacity:<?php echo esc_attr($opacity); ?>;
								"
								class="ls-l"
								data-ls="static:forever;">
						</ls-layer>
						<div style="font-family:Raleway; color:#ffffff; font-size:18px; font-weight:700; text-transform:uppercase; left:300px; top:185px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:-150; durationin:1500; delayin:300; offsetxout:-150;">
							<div class="slider-line">
								<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/hero/hero-line-2-1.png" alt="line" class="me-2">
								<?php echo esc_html( $slide['subtitle'] ); ?>
							</div>
						</div>
            <div style="font-family:Raleway; color:#ffffff; font-size:30px; font-weight:700; text-transform:uppercase; left:300px; top:159px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:-150; durationin:1500; delayin:300; offsetxout:-150;">
              <div class="slider-line"><?php echo esc_html( $slide['subtitle'] ); ?></div>
            </div>
            <h1 style="color:#ffffff; font-size:74px; font-weight:700; font-family:Raleway; left:300px; top:223px;" class="ls-l ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500;">
              <?php echo esc_html( $slide['title_line_1'] ); ?>
            </h1>
            <h1 style="color:#ffffff; font-weight:700; font-family:Raleway; left:100px; top:119px; font-size:100px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-150; durationin:1500;">
              <?php echo esc_html( $slide['title_line_1'] ); ?>
            </h1>
            <h1 style="color:#ffffff; font-size:74px; font-weight:700; font-family:Raleway; left:300px; top:303px;" class="ls-l ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:200;">
              <?php echo esc_html( $slide['title_line_2'] ); ?>
            </h1>
            <h1 style="color:#ffffff; font-size:100px; font-weight:700; font-family:Raleway; left:100px; top:242px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:200;">
              <?php echo esc_html( $slide['title_line_2'] ); ?>
            </h1>
            <ls-layer style="color:#ffffff; font-family:DM Sans; font-size:18px; top:400px; left:300px; line-height:30px; margin-bottom: 20px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-150; durationin:1500; delayin:400;">
              <?php echo wp_kses_post( nl2br( $slide['description'] ) ); ?>
            </ls-layer>
						<?php if ( ! empty( $slide['button_text'] ) ) : ?>
              <ls-layer style="padding-top:0; padding-bottom:0; padding-right:2.48em; padding-left:2.48em;  line-height: 56px; font-family:DM Sans; font-weight:700; background-color:#fff; left:300px; top:505px; text-align:center; text-transform:uppercase; color:#D23024; font-size:16px;" class="ls-l ls-hide-tablet ls-hide-phone ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                <?php echo esc_html( $slide['button_text'] ); ?> <i class="far fa-long-arrow-right"></i>
                <a href="<?php echo esc_url( $slide['button_url']['url'] ); ?>" class="inner-hero-link"><span class="sr-only">link</span></a>
              </ls-layer>
              <ls-layer style="padding-top:0; padding-bottom:0; padding-right:2.48em; padding-left:2.48em; line-height: 100px; font-family:DM Sans; font-weight:700; background-color:#fff; left:300px; top:464px; text-align:center; text-transform:uppercase; color:#D23024; font-size:26px;" class="ls-l ls-hide-desktop ls-hide-phone ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                <?php echo esc_html( $slide['button_text'] ); ?> <i class="far fa-long-arrow-right"></i>
                <a href="<?php echo esc_url( $slide['button_url']['url'] ); ?>" class="inner-hero-link"><span class="sr-only">link</span></a>
              </ls-layer>
              <ls-layer style="padding-top:0; padding-bottom:0; padding-right:1em; padding-left:1em; line-height: 140px; font-family:DM Sans; font-weight:700; background-color:#fff; left:100px; top:446px; text-align:center; text-transform:uppercase; color:#D23024; font-size:60px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-button-layer" data-ls="offsetyin:80; durationin:1500; delayin:500; hover:true; hoverbgcolor:#16171A; hovercolor:#ffffff;">
                <?php echo esc_html( $slide['button_text'] ); ?>
                <a href="<?php echo esc_url( $slide['button_url']['url'] ); ?>" class="inner-hero-link"><span class="sr-only">link</span></a>
              </ls-layer>
						<?php endif; ?>
						<?php if ( ! empty( $slide['video_url'] ) ) : ?>
              <ls-layer style="left:1492px; top:325px;" class="ls-l ls-hide-phone ls-html-layer">
                <a href="<?php echo esc_url( $slide['button_url']['url'] ); ?>" class="ls-l ls-hide-tablet ls-hide-phone ls-button-layer"><?php echo esc_html( $slide['button_text'] ); ?> <i class="far fa-long-arrow-right"></i></a>
              </ls-layer>
              <ls-layer style="left:1535px; top:242px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer">
                <a href="<?php echo esc_url( $slide['video_url'] ); ?>" class="play-btn style2 popup-video"><i class="fa fa-play"></i></a>
              </ls-layer>
						<?php endif; ?>
            <ls-layer style="top:500px; left:650px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
              <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
            </ls-layer>
            <ls-layer style="top:452px; left:830px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
              <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
            </ls-layer>
            <ls-layer style="top:439px; left:930px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetxin:100; delayin:900; offsetxout:100;">
              <a href="tel:123456789" class="ls-icon-btn"><i class="fal fa-phone-alt"></i></a>
            </ls-layer>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
		<?php
	}
}