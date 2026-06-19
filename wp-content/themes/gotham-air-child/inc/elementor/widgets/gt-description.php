<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class GT_Description_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'gt-description';
	}
	public function get_title() {
		return esc_html__( 'GT Description', 'gotham-air-child' );
	}
	public function get_icon() {
		return 'eicon-text-area';
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
			'background_image',
			[
				'label' => esc_html__( 'Background Image', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_stylesheet_directory_uri() . '/assets/img/bg/sr-bg-3-1.png',
				],
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label'   => esc_html__( 'Subtitle', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Services',
			]
		);
		$this->add_control(
			'title',
			[
				'label'   => esc_html__( 'Title', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'We Provide Best Service',
			]
		);
		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::TEXTAREA,
				'rows'  => 6,
				'default' => '',
			]
		);
		$this->add_control(
			'button_text',
			[
				'label'   => esc_html__( 'Button Text', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Make Appointment',
			]
		);
		$this->add_control(
			'button_url',
			[
				'label' => esc_html__( 'Button URL', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::URL,
			]
		);
		$this->add_control(
			'button_text_two',
			[
				'label'   => esc_html__( 'Button Text', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::TEXT,
				'default' => 'Make Appointment',
			]
		);
		$this->add_control(
			'button_url_two',
			[
				'label' => esc_html__( 'Button URL', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::URL,
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$target   = ! empty( $settings['button_url']['is_external'] ) ? ' target="_blank"' : '';
		$nofollow = ! empty( $settings['button_url']['nofollow'] ) ? ' rel="nofollow"' : '';
		?>
		<section class="space-top space-extra-bottom background-image" style="background-image: url('<?php echo esc_url( $settings['background_image']['url'] ); ?>');">
			<div class="container">
				<?php if ( ! empty( $settings['subtitle'] ) || ! empty( $settings['title'] ) ) : ?>
					<div class="title-area text-center">
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
				<div class="row gx-100 align-items-center justify-content-center">
					<div class="col-lg-10 text-center">
						<div class="title-area">
							<?php if ( ! empty( $settings['description'] ) ) : ?>
								<p class="sec-text">
									<?php echo wp_kses_post( nl2br( $settings['description'] ) ); ?>
								</p>
							<?php endif; ?>
							<?php if (
								! empty( $settings['button_text'] ) &&
								! empty( $settings['button_url']['url'] )
							) : ?>
								<a
									href="<?php echo esc_url( $settings['button_url']['url'] ); ?>"
									class="vs-btn"
									<?php echo $target . $nofollow; ?>
								>
									<?php echo esc_html( $settings['button_text'] ); ?>
									<i class="far fa-long-arrow-right"></i>
								</a>
							<?php endif; ?>
							<?php if (
								! empty( $settings['button_text'] ) &&
								! empty( $settings['button_url']['url'] )
							) : ?>
								<a
									href="<?php echo esc_url( $settings['button_url']['url'] ); ?>"
									class="vs-btn"
									<?php echo $target . $nofollow; ?>
								>
									<?php echo esc_html( $settings['button_text'] ); ?>
									<i class="far fa-long-arrow-right"></i>
								</a>
							<?php endif; ?>
							<?php if (
								! empty( $settings['button_text_two'] ) &&
								! empty( $settings['button_url_two']['url'] )
							) : ?>
								<a
									href="<?php echo esc_url( $settings['button_url_two']['url'] ); ?>"
									class="vs-btn"
									<?php echo $target . $nofollow; ?>
								>
									<?php echo esc_html( $settings['button_text_two'] ); ?>
									<i class="far fa-long-arrow-right"></i>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
}