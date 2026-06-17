<?php

if (!defined('ABSPATH')) {
    exit;
}
class GT_Services_Carousel_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'gt_services_carousel';
    }
    public function get_title() {
        return __('GT Services Carousel', 'gt-core');
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return ['gt-elements'];
    }
    public function get_keywords() {
        return ['services', 'carousel', 'slider', 'gt'];
    }
    protected function register_controls() {
        /*
        |--------------------------------------------------------------------------
        | Section Content
        |--------------------------------------------------------------------------
        */
        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Content', 'gt-core'),
            ]
        );
        $this->add_control(
            'bg_image',
            [
                'label' => __('Background Image', 'gt-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'subtitle',
            [
                'label' => __('Subtitle', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Services',
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'We Provide best Service',
            ]
        );
        $this->end_controls_section();
        /*
        |--------------------------------------------------------------------------
        | Carousel Settings
        |--------------------------------------------------------------------------
        */
        $this->start_controls_section(
            'carousel_settings',
            [
                'label' => __('Carousel Settings', 'gt-core'),
            ]
        );
        $this->add_control(
            'desktop_items',
            [
                'label' => __('Desktop Slides', 'gt-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3,
                'min' => 1,
                'max' => 6,
            ]
        );
        $this->add_control(
            'tablet_items',
            [
                'label' => __('Tablet Slides', 'gt-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 2,
                'min' => 1,
                'max' => 4,
            ]
        );
        $this->add_control(
            'show_dots',
            [
                'label' => __('Show Dots', 'gt-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'default' => 'yes',
            ]
        );
        $this->end_controls_section();
        /*
        |--------------------------------------------------------------------------
        | Services Repeater
        |--------------------------------------------------------------------------
        */
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'service_image',
            [
                'label' => __('Service Image', 'gt-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'service_shape',
            [
                'label' => __('Shape Image', 'gt-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'service_icon',
            [
                'label' => __('Service Icon', 'gt-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'service_title',
            [
                'label' => __('Title', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Home Electricity',
            ]
        );
        $repeater->add_control(
            'service_text',
            [
                'label' => __('Description', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => 'We handle a wide range of services including rewiring, outlet repairs, lighting.',
            ]
        );
        $repeater->add_control(
            'button_text',
            [
                'label' => __('Button Text', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'Read More',
            ]
        );
        $repeater->add_control(
            'button_link',
            [
                'label' => __('Button Link', 'gt-core'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => 'https://',
            ]
        );
        $this->start_controls_section(
            'services_section',
            [
                'label' => __('Services', 'gt-core'),
            ]
        );
        $this->add_control(
            'services',
            [
                'label' => __('Services List', 'gt-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ service_title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $bg = !empty($settings['bg_image']['url'])
            ? $settings['bg_image']['url']
            : '';
        $dots = $settings['show_dots'] === 'yes' ? 'true' : 'false';
        ?>
        <section class=" position-relative bg-secondary space-top space-extra-bottom" data-bg-src="<?php echo esc_url($bg); ?>">
            <div class="container">
                <div class="title-area text-center">
                    <?php if (!empty($settings['subtitle'])) : ?>
                        <span class="sec-subtitle2">
                            <?php echo esc_html($settings['subtitle']); ?>
                        </span>
                    <?php endif; ?>
                    <?php if (!empty($settings['title'])) : ?>
                        <h2 class="sec-title">
                            <?php echo esc_html($settings['title']); ?>
                        </h2>
                    <?php endif; ?>
                </div>
                <div class="row vs-carousel"
                     data-slide-show="<?php echo esc_attr($settings['desktop_items']); ?>"
                     data-md-slide-show="<?php echo esc_attr($settings['tablet_items']); ?>"
                     data-dots="true">
                    <?php foreach ($settings['services'] as $item) : ?>
                        <div class="col-xl-4">
                            <div class="service-style1">
                                <div class="service-img">
                                    <a href="<?php echo esc_url($item['button_link']['url']); ?>">
                                        <img src="<?php echo esc_url($item['service_image']['url']); ?>" alt="<?php echo esc_attr($item['service_title']); ?>">
                                    </a>
                                </div>
                                <div class="service-content">
                                    <div class="service-body">
                                        <?php if (!empty($item['service_shape']['url'])) : ?>
                                            <div class="service-shape">
                                                <img src="<?php echo esc_url($item['service_shape']['url']); ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                        <?php if (!empty($item['service_icon']['url'])) : ?>
                                            <div class="service-icon">
                                                <img src="<?php echo esc_url($item['service_icon']['url']); ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                        <h3 class="service-title h5">
                                            <a href="<?php echo esc_url($item['button_link']['url']); ?>"
                                               class="text-inherit">
                                                <?php echo esc_html($item['service_title']); ?>
                                            </a>
                                        </h3>
                                        <p class="service-text">
                                            <?php echo esc_html($item['service_text']); ?>
                                        </p>
                                        <a href="<?php echo esc_url($item['button_link']['url']); ?>" class="vs-btn">
                                            <?php echo esc_html($item['button_text']); ?>
                                            <i class="far fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php
    }
}