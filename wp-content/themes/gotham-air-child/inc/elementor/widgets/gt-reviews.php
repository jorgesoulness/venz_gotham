<?php
if (!defined('ABSPATH')) {
	exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
class GT_Reviews_Widget extends Widget_Base {
	public function get_name() {
		return 'gt-reviews';
	}
	public function get_title() {
		return __('GT Reviews', 'gotham-air-child');
	}
	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}
	public function get_categories() {
		return ['gotham-air'];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __('Content', 'gotham-air-child'),
			]
		);
		$this->add_control(
			'shape_image',
			[
				'label' => __('Shape Image'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label' => __('Subtitle'),
				'type' => Controls_Manager::TEXT,
				'default' => 'Testimonial',
			]
		);
		$this->add_control(
			'title',
			[
				'label' => __('Title'),
				'type' => Controls_Manager::TEXTAREA,
				'default' => 'What Clients Say About Us',
			]
		);
		$this->add_control(
			'reviews_shortcode',
			[
				'label' => __('Reviews Shortcode'),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => '[trustindex no-registration=google]',
				'description' => __('Paste your Google Reviews shortcode here.', 'gotham-air-child'),
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<section class="position-relative space-top space-extra-bottom">
			<?php if (!empty($settings['shape_image']['url'])) : ?>
				<div class="testi-shape2 d-none d-hd-block">
					<img
						src="<?php echo esc_url($settings['shape_image']['url']); ?>"
						alt="shape"
					>
				</div>
			<?php endif; ?>
			<div class="container">
				<?php if (
					!empty($settings['subtitle']) ||
					!empty($settings['title'])
				) : ?>
					<div class="row justify-content-center text-center">
						<div class="col-xl-4">
							<div class="title-area">
								<?php if (!empty($settings['subtitle'])) : ?>
									<span class="sec-subtitle">
										<?php echo esc_html($settings['subtitle']); ?>
									</span>
								<?php endif; ?>
								<?php if (!empty($settings['title'])) : ?>
									<h2 class="sec-title">
										<?php echo esc_html($settings['title']); ?>
									</h2>
								<?php endif; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<?php if (!empty($settings['reviews_shortcode'])) : ?>
					<div class="testi-style2">
						<?php echo do_shortcode($settings['reviews_shortcode']); ?>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<?php
	}
}