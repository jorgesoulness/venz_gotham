<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class GT_Content_About_Us_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'gt-content-about-us';
	}
	public function get_title() {
		return esc_html__( 'GT Content About Us', 'gotham-air-child' );
	}
	public function get_icon() {
		return 'eicon-text';
	}
	public function get_categories() {
		return [ 'gotham-air' ];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'gotham-air-child' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'   => esc_html__( 'Subtitle', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'About us',
			]
		);
		$this->add_control(
			'title',
			[
				'label'   => esc_html__( 'Title', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Solutions That Keep You Switched',
			]
		);
		$this->add_control(
			'experience_text',
			[
				'label'   => esc_html__( 'Experience Text', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => '25+ Years of Experience',
			]
		);
		$this->add_control(
			'content_title',
			[
				'label'   => esc_html__( 'Content Title', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Our Mission & Vision',
			]
		);
		$this->add_control(
			'description',
			[
				'label'   => esc_html__( 'Description', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXTAREA,
				'rows'    => 8,
				'default' => '',
			]
		);
		$this->add_control(
			'author',
			[
				'label'   => esc_html__( 'Author Name', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Rodjaa Hartmann',
			]
		);
		$this->add_control(
			'button_text',
			[
				'label'   => esc_html__( 'Button Text', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'About Us',
			]
		);
		$this->add_control(
			'button_url',
			[
				'label'       => esc_html__( 'Button URL', 'gotham-air-child' ),
				'type'        => \Elementor\Controls_Manager::URL,
				'placeholder' => 'https://',
			]
		);
		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Image', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$target   = ! empty( $settings['button_url']['is_external'] ) ? ' target="_blank"' : '';
		$nofollow = ! empty( $settings['button_url']['nofollow'] ) ? ' rel="nofollow"' : '';
		?>
		<section class="space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-xl-8 text-center text-md-start">
						<?php if ( ! empty( $settings['subtitle'] ) || ! empty( $settings['title'] ) ) : ?>
							<div class="title-area">
								<?php if ( ! empty( $settings['subtitle'] ) ) : ?>
									<span class="sec-subtitle">
										<?php echo esc_html( $settings['subtitle'] ); ?>
									</span>
								<?php endif; ?>
								<?php if ( ! empty( $settings['title'] ) ) : ?>
									<h2 class="sec-title">
										<?php echo esc_html( $settings['title'] ); ?>
									</h2>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="about-box1">
							<?php if ( ! empty( $settings['experience_text'] ) ) : ?>
								<div class="about-media">
									<div class="title-rotate">
										<span class="text">
											<?php echo esc_html( $settings['experience_text'] ); ?>
										</span>
									</div>
								</div>
							<?php endif; ?>
							<div class="about-body">
								<?php if ( ! empty( $settings['content_title'] ) ) : ?>
									<h3 class="about-title h5">
										<?php echo esc_html( $settings['content_title'] ); ?>
									</h3>
								<?php endif; ?>
								<?php if ( ! empty( $settings['description'] ) ) : ?>
									<p class="about-text">
										<?php echo wp_kses_post( nl2br( $settings['description'] ) ); ?>
									</p>
								<?php endif; ?>
								<?php if ( ! empty( $settings['author'] ) ) : ?>
									<span class="about-author h5">
										<?php echo esc_html( $settings['author'] ); ?>
									</span>
								<?php endif; ?>
							</div>
						</div>
						<?php if (!empty( $settings['button_text'] )) : ?>
							<a href="#" class="vs-btn mb-5 mb-xl-0" data-bs-toggle="modal" data-bs-target="#contactModal">
								<?php echo esc_html( $settings['button_text'] ); ?>
								<i class="far fa-long-arrow-right"></i>
							</a>
						<?php endif; ?>
					</div>
					<div class="col col-xl-4 mb-4 mb-md-0">
						<?php if ( ! empty( $settings['image']['url'] ) ) : ?>
							<img src="<?php echo esc_url( $settings['image']['url'] ); ?>" alt="<?php echo esc_attr( $settings['title'] ); ?>" class="w-100">
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
}