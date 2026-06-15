<?php

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_FAQS_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-faqs';
    }
    public function get_title() {
        return __('GT Faqs', 'gotham-air-child');
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
                'label' => __('Content', 'gotham-air-child')
            ]
        );
        $this->add_control(
            'left_image',
            [
                'label' => __('Left Image'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'video_url',
            [
                'label' => __('Video URL'),
                'type' => Controls_Manager::URL,
                'placeholder' => 'https://youtube.com'
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
                'default' => 'FAQ'
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Frequently Asked Questions'
            ]
        );
        $this->add_control(
            'default_open',
            [
                'label' => __('Open FAQ By Default'),
                'type' => Controls_Manager::NUMBER,
                'default' => 1,
                'min' => 1
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
                'title_field' => '{{{ question }}}'
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        if (empty($settings['faqs'])) {
            return;
        }
        $accordion_id = 'faqVersion_' . $this->get_id();
?>
<section>
    <div class="container-fluid px-0">
        <div class="row gx-0">
            <div class="col-xl-6 col-xxl">
                <div class="img-box3">
                    <?php if (!empty($settings['left_image']['url'])) : ?>
                        <div
                            class="img-1"
                            data-bg-src="<?php echo esc_url($settings['left_image']['url']); ?>">
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($settings['video_url']['url'])) : ?>
                        <a
                            href="<?php echo esc_url($settings['video_url']['url']); ?>"
                            class="play-btn style2 popup-video">
                            <i class="fa fa-play"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xl-6 col-xxl-auto">
                <div class="accordion-inner1">
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
                    <div class="accordion accordion-style1" id="<?php echo esc_attr($accordion_id); ?>">
                        <?php foreach ($settings['faqs'] as $index => $faq) :
                            $item_number = $index + 1;
                            $heading_id = 'heading_' . $this->get_id() . '_' . $index;
                            $collapse_id = 'collapse_' . $this->get_id() . '_' . $index;
                            $is_open = ($item_number == $settings['default_open']);
                        ?>
                            <div class="accordion-item">
                                <div
                                    class="accordion-header"
                                    id="<?php echo esc_attr($heading_id); ?>">
                                    <button
                                        class="accordion-button <?php echo !$is_open ? 'collapsed' : ''; ?>"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#<?php echo esc_attr($collapse_id); ?>"
                                        aria-expanded="<?php echo $is_open ? 'true' : 'false'; ?>"
                                        aria-controls="<?php echo esc_attr($collapse_id); ?>">
                                        <?php echo esc_html($faq['question']); ?>
                                    </button>
                                </div>
                                <div
                                    id="<?php echo esc_attr($collapse_id); ?>"
                                    class="accordion-collapse collapse <?php echo $is_open ? 'show' : ''; ?>"
                                    aria-labelledby="<?php echo esc_attr($heading_id); ?>"
                                    data-bs-parent="#<?php echo esc_attr($accordion_id); ?>">
                                    <div class="accordion-body">
                                        <p><?php echo wp_kses_post($faq['answer']); ?> </p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php if (!empty($settings['shape_image']['url'])) : ?>
                <div class="col-auto">
                    <div class="accordion-shape1" data-bg-src="<?php echo esc_url($settings['shape_image']['url']); ?>"></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
    }
}