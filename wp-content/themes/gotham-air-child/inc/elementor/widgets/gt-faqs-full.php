<?php
if (!defined('ABSPATH')) {
	exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_FAQS_FULL_Widget extends Widget_Base {
	public function get_name() {
		return 'gt-faqs';
	}
	public function get_title() {
		return __('GT FAQs', 'gotham-air-child');
	}
	public function get_icon() {
		return 'eicon-accordion';
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
		$faq_repeater = new Repeater();
		$faq_repeater->add_control(
			'question',
			[
				'label' => __('Question'),
				'type' => Controls_Manager::TEXT,
			]
		);
		$faq_repeater->add_control(
			'answer',
			[
				'label' => __('Answer'),
				'type' => Controls_Manager::TEXTAREA,
			]
		);
		$this->add_control(
			'faqs',
			[
				'label' => __('FAQs'),
				'type' => Controls_Manager::REPEATER,
				'fields' => $faq_repeater->get_controls(),
				'title_field' => '{{{ question }}}',
			]
		);
		$this->add_control(
			'active_item',
			[
				'label' => __('FAQ Open By Default'),
				'type' => Controls_Manager::NUMBER,
				'default' => 1,
				'min' => 1,
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if (empty($settings['faqs'])) {
			return;
		}
		$accordion_id = 'gtFaq_' . $this->get_id();
	?>
	<section class="space">
		<div class="container">
			<div class="row gy-4">
				<div class="col-12">
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
				</div>
				<div class="col-12">
					<div class="accordion accordion-style1 layout2" id="<?php echo esc_attr($accordion_id); ?>">
						<?php foreach ($settings['faqs'] as $index => $faq) :
							$item_number = $index + 1;
							$is_active = ($item_number == $settings['active_item']);
							$heading_id = 'heading_' . $this->get_id() . '_' . $item_number;
							$collapse_id = 'collapse_' . $this->get_id() . '_' . $item_number;
						?>
							<div class="accordion-item <?php echo $is_active ? 'active' : ''; ?>">
								<div class="accordion-header" id="<?php echo esc_attr($heading_id); ?>">
									<button
										class="accordion-button <?php echo !$is_active ? 'collapsed' : ''; ?>"
										type="button"
										data-bs-toggle="collapse"
										data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
										aria-expanded="<?php echo $is_active ? 'true' : 'false'; ?>"
										aria-controls="<?php echo esc_attr($collapse_id); ?>">
										<?php echo esc_html($faq['question']); ?>
									</button>
								</div>
								<div
									id="<?php echo esc_attr($collapse_id); ?>"
									class="accordion-collapse collapse <?php echo $is_active ? 'show' : ''; ?>"
									aria-labelledby="<?php echo esc_attr($heading_id); ?>"
									data-bs-parent="#<?php echo esc_attr($accordion_id); ?>">
									<div class="accordion-body">
										<?php if (!empty($faq['answer'])) : ?>
											<p><?php echo wp_kses_post($faq['answer']); ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
	}
}