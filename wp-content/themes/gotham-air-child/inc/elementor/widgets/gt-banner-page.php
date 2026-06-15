<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class GT_Banner_Page_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'gt-banner-page';
	}
	public function get_title() {
		return esc_html__( 'GT Banner Page', 'gotham-air-child' );
	}
	public function get_icon() {
		return 'eicon-banner';
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
				'label'   => esc_html__( 'Background Image', 'gotham-air-child' ),
				'type'    => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => get_stylesheet_directory_uri() . '/assets/img/breadcumb/breadcumb-bg.jpg',
				],
			]
		);
		$this->add_control(
			'page_title',
			[
				'label'       => esc_html__( 'Page Title', 'gotham-air-child' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => esc_html__( 'About Us', 'gotham-air-child' ),
				'placeholder' => esc_html__( 'Enter title...', 'gotham-air-child' ),
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$background_image = ! empty( $settings['background_image']['url'] )
			? $settings['background_image']['url']
			: '';
		$page_title = ! empty( $settings['page_title'] )
			? $settings['page_title']
			: get_the_title();
		?>
		<div class="breadcumb-wrapper background-image" data-bg-src="<?php echo esc_url( $background_image ); ?>">
			<div class="container z-index-common">
				<div class="breadcumb-content">
					<h1 class="breadcumb-title">
						<?php echo esc_html( $page_title ); ?>
					</h1>
				</div>
			</div>
		</div>
		<?php
	}
}