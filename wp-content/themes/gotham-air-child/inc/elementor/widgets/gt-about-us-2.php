<?php
if (!defined('ABSPATH')) {
	exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_About_Us_2_Widget extends Widget_Base {
	public function get_name() {
		return 'gt-about-us-2';
	}
	public function get_title() {
		return __('GT About Us 2', 'gotham-air-child');
	}
	public function get_icon() {
		return 'eicon-image-box';
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
		/*
		|--------------------------------------------------------------------------
		| Images
		|--------------------------------------------------------------------------
		*/
		$this->add_control(
			'shape_image',
			[
				'label' => __('Shape Image'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'image_1',
			[
				'label' => __('Image 1'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'image_2',
			[
				'label' => __('Image 2'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'image_3',
			[
				'label' => __('Image 3'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'image_4',
			[
				'label' => __('Image 4'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		$this->add_control(
			'image_5',
			[
				'label' => __('Image 5'),
				'type' => Controls_Manager::MEDIA,
			]
		);
		/*
		|--------------------------------------------------------------------------
		| Content
		|--------------------------------------------------------------------------
		*/
		$this->add_control(
			'subtitle',
			[
				'label' => __('Subtitle'),
				'type' => Controls_Manager::TEXT,
				'default' => 'About Us',
			]
		);
		$this->add_control(
			'title',
			[
				'label' => __('Title'),
				'type' => Controls_Manager::TEXTAREA,
				'default' => 'We Restore the Power you Enjoy the Safety',
			]
		);
		$this->add_control(
			'description',
			[
				'label' => __('Description'),
				'type' => Controls_Manager::TEXTAREA,
			]
		);
		/*
		|--------------------------------------------------------------------------
		| Features
		|--------------------------------------------------------------------------
		*/
		$feature_repeater = new Repeater();
		$feature_repeater->add_control(
			'feature_text',
			[
				'label' => __('Feature'),
				'type' => Controls_Manager::TEXT,
			]
		);
		$this->add_control(
			'features',
			[
				'label' => __('Features'),
				'type' => Controls_Manager::REPEATER,
				'fields' => $feature_repeater->get_controls(),
				'title_field' => '{{{ feature_text }}}',
			]
		);
		/*
		|--------------------------------------------------------------------------
		| Button
		|--------------------------------------------------------------------------
		*/
		$this->add_control(
			'button_text',
			[
				'label' => __('Button Text'),
				'type' => Controls_Manager::TEXT,
				'default' => 'About Us',
			]
		);
		$this->add_control(
			'button_link',
			[
				'label' => __('Button Link'),
				'type' => Controls_Manager::URL,
			]
		);
		$this->add_control(
			'button_class',
			[
				'label' => __('Button Style'),
				'type' => Controls_Manager::SELECT,
				'default' => 'style2',
				'options' => [
					'style1' => 'Style 1',
					'style2' => 'Style 2',
					'style3' => 'Style 3',
				]
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		?>
		<section class="position-relative space">
			<?php if (!empty($settings['shape_image']['url'])) : ?>
				<div class="about-shape1 d-none d-hd-block">
					<img src="<?php echo esc_url($settings['shape_image']['url']); ?>" alt="">
				</div>
			<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-xl-6 mb-30 mb-lg-0 pb-3 pb-lg-0">
						<div class="img-box1">
							<?php if (!empty($settings['image_1']['url'])) : ?>
								<div class="img1">
									<img src="<?php echo esc_url($settings['image_1']['url']); ?>" alt="">
								</div>
							<?php endif; ?>
							<?php if (!empty($settings['image_2']['url'])) : ?>
								<div class="img2">
									<img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="">
								</div>
							<?php endif; ?>
							<?php if (!empty($settings['image_3']['url'])) : ?>
								<div class="img3">
									<img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="">
								</div>
							<?php endif; ?>
							<?php if (!empty($settings['image_4']['url'])) : ?>
								<div class="img4">
									<img src="<?php echo esc_url($settings['image_4']['url']); ?>" alt="">
								</div>
							<?php endif; ?>
							<?php if (!empty($settings['image_5']['url'])) : ?>
								<div class="img5">
									<img src="<?php echo esc_url($settings['image_5']['url']); ?>" alt="">
								</div>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-6 col-xl-6">
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
						<?php if (!empty($settings['description'])) : ?>
							<p class="sec-text">
								<?php echo wp_kses_post($settings['description']); ?>
							</p>
						<?php endif; ?>
						<?php if (!empty($settings['features'])) : ?>
							<div class="row align-items-center">
								<div class="col-md-8 col-lg-12">
									<div class="list-style2">
										<ul class="list-unstyled">
											<?php foreach ($settings['features'] as $feature) : ?>
												<?php if (!empty($feature['feature_text'])) : ?>
													<li>
														<img src="<?php echo get_stylesheet_directory_uri(''); ?>/assets/img/icon/arrow-right-box.svg" alt="arrow right">
														<?php echo esc_html($feature['feature_text']); ?>
													</li>
												<?php endif; ?>
											<?php endforeach; ?>
										</ul>
									</div>
								</div>
							</div>
						<?php endif; ?>
						<?php if (!empty($settings['button_text'])) : ?>
							<div class="row justify-content-start gy-4">
								<div class="col-md-auto">
									<a
										href="<?php echo !empty($settings['button_link']['url']) ? esc_url($settings['button_link']['url']) : '#'; ?>"
										class="vs-btn <?php echo esc_attr($settings['button_class']); ?>">
										<?php echo esc_html($settings['button_text']); ?>
										<i class="far fa-long-arrow-right"></i>
									</a>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
}