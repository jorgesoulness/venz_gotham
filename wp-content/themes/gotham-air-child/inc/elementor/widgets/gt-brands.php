<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_Brands_Widget extends Widget_Base {
	public function get_name() {
		return 'gt-brands';
	}
	public function get_title() {
		return __( 'GT Brands', 'gotham-air-child' );
	}
	public function get_icon() {
		return 'eicon-slider-push';
	}
	public function get_categories() {
		return [ 'gotham-air' ];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Brands', 'gotham-air-child' ),
			]
		);
		$this->add_control(
			'bg_image',
			[
				'label' => __( 'Background Image', 'gotham-air-child' ),
				'type'  => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'slide_show',
			[
				'label'   => __( 'Desktop Slides', 'gotham-air-child' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 6,
			]
		);
		$this->add_control(
			'ml_slide_show',
			[
				'label'   => __( 'XL Slides', 'gotham-air-child' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 5,
			]
		);
		$this->add_control(
			'lg_slide_show',
			[
				'label'   => __( 'LG Slides', 'gotham-air-child' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 4,
			]
		);
		$this->add_control(
			'md_slide_show',
			[
				'label'   => __( 'MD Slides', 'gotham-air-child' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 3,
			]
		);
		$this->add_control(
			'sm_slide_show',
			[
				'label'   => __( 'SM Slides', 'gotham-air-child' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 2,
			]
		);
		$this->add_control(
			'xs_slide_show',
			[
				'label'   => __( 'XS Slides', 'gotham-air-child' ),
				'type'    => Controls_Manager::NUMBER,
				'default' => 2,
			]
		);
		$repeater = new Repeater();
		$repeater->add_control(
			'brand_image',
			[
				'label' => __( 'Brand Image', 'gotham-air-child' ),
				'type'  => Controls_Manager::MEDIA,
			]
		);
		$repeater->add_control(
			'brand_link',
			[
				'label' => __( 'Brand Link', 'gotham-air-child' ),
				'type'  => Controls_Manager::URL,
			]
		);
		$this->add_control(
			'brands',
			[
				'label'       => __( 'Brands', 'gotham-air-child' ),
				'type'        => Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'title_field' => 'Brand',
			]
		);
		$this->end_controls_section();
	}

	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( empty( $settings['brands'] ) ) {
			return;
		}
		?>
		<div class="brand-style1">
			<div class="brand-container">
				<div
					class="brand-inner background-image"
					<?php if ( ! empty( $settings['bg_image']['url'] ) ) : ?>
						data-bg-src="<?php echo esc_url( $settings['bg_image']['url'] ); ?>"
					<?php endif; ?>
				>
					<div
						class="row vs-carousel"
						data-slide-show="<?php echo esc_attr( $settings['slide_show'] ); ?>"
						data-ml-slide-show="<?php echo esc_attr( $settings['ml_slide_show'] ); ?>"
						data-lg-slide-show="<?php echo esc_attr( $settings['lg_slide_show'] ); ?>"
						data-md-slide-show="<?php echo esc_attr( $settings['md_slide_show'] ); ?>"
						data-sm-slide-show="<?php echo esc_attr( $settings['sm_slide_show'] ); ?>"
						data-xs-slide-show="<?php echo esc_attr( $settings['xs_slide_show'] ); ?>"
					>
						<?php foreach ( $settings['brands'] as $brand ) : ?>
							<?php if ( empty( $brand['brand_image']['url'] ) ) continue; ?>
							<div class="col-xl-auto">
								<?php if ( ! empty( $brand['brand_link']['url'] ) ) : ?>
									<a
										href="<?php echo esc_url( $brand['brand_link']['url'] ); ?>"
										<?php echo ! empty( $brand['brand_link']['is_external'] ) ? 'target="_blank"' : ''; ?>
										<?php echo ! empty( $brand['brand_link']['nofollow'] ) ? 'rel="nofollow"' : ''; ?>
									>
										<img
											src="<?php echo esc_url( $brand['brand_image']['url'] ); ?>"
											alt="brand"
										>
									</a>
								<?php else : ?>
									<img
										src="<?php echo esc_url( $brand['brand_image']['url'] ); ?>"
										alt="brand"
									>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

}