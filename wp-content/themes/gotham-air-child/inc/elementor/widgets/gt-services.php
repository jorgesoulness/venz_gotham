<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_Services_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-services';
    }
    public function get_title() {
        return __('GT Services', 'gotham-air-child');
    }
    public function get_icon() {
        return 'eicon-slider-push';
    }
    public function get_categories() {
        return ['gotham-air'];
    }
    public function get_script_depends() {
        return ['gt-services'];
    }
    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'gotham-air-child')
            ]
        );
        $this->add_control(
            'background_image',
            [
                'label' => __('Background Image'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $this->add_control(
            'subtitle',
            [
                'label' => __('Subtitle'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Services'
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT,
                'default' => 'We Provide Best Service'
            ]
        );
        $bullet_repeater = new Repeater();
        $bullet_repeater->add_control(
            'text',
            [
                'label' => __('Item'),
                'type' => Controls_Manager::TEXT
            ]
        );
        $service_repeater = new Repeater();
        $service_repeater->add_control(
            'service_image',
            [
                'label' => __('Main Image'),
                'type' => Controls_Manager::MEDIA
            ]
        );
        $service_repeater->add_control(
            'thumb_image',
            [
                'label' => __('Thumb Image'),
                'type' => Controls_Manager::MEDIA
            ]
        );
        $service_repeater->add_control(
            'service_icon',
            [
                'label' => __('Icon'),
                'type' => Controls_Manager::MEDIA
            ]
        );
        $service_repeater->add_control(
            'service_title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT
            ]
        );
        $service_repeater->add_control(
            'service_description',
            [
                'label' => __('Description'),
                'type' => Controls_Manager::TEXTAREA
            ]
        );
        $service_repeater->add_control(
            'service_link',
            [
                'label' => __('Link'),
                'type' => Controls_Manager::URL
            ]
        );
        $service_repeater->add_control(
            'service_button_text',
            [
                'label' => __('Button Text'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Read More'
            ]
        );
        $service_repeater->add_control(
            'service_features',
            [
                'label' => __('Features'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $bullet_repeater->get_controls(),
                'title_field' => '{{{ text }}}'
            ]
        );
        $this->add_control(
            'services',
            [
                'label' => __('Services'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $service_repeater->get_controls(),
                'title_field' => '{{{ service_title }}}'
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $bg = !empty($settings['background_image']['url'])
            ? 'data-bg-src="' . esc_url($settings['background_image']['url']) . '"'
            : '';
        ?>
        <section class="space-top space-extra-bottom serviceSec" <?php echo $bg; ?>>
            <div class="container">
                <div class="title-area text-center text-xl-start">
                    <?php if (!empty($settings['subtitle'])) : ?>
                        <span class="sec-subtitle2"><?php echo esc_html($settings['subtitle']); ?></span>
                    <?php endif; ?>
                    <?php if (!empty($settings['title'])) : ?>
                        <h2 class="sec-title text-white">
                            <?php echo esc_html($settings['title']); ?>
                        </h2>
                    <?php endif; ?>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-8 z-index-common">
                        <div class="service-slider-one">
                            <?php foreach ($settings['services'] as $index => $service) : ?>
                                <div>
                                    <div class="service-style2">
                                        <?php if (!empty($service['service_image']['url'])) : ?>
                                            <div class="service-img">
                                                <img src="<?php echo esc_url($service['service_image']['url']); ?>" alt="">
                                            </div>
                                        <?php endif; ?>
                                        <div class="service-content">
                                            <div class="service-top">
                                                <?php if (!empty($service['service_icon']['url'])) : ?>
                                                    <div class="service-icon">
                                                        <img src="<?php echo esc_url($service['service_icon']['url']); ?>" alt="">
                                                    </div>
                                                <?php endif; ?>
                                                <span class="service-number">
                                                    <?php echo str_pad(($index + 1), 2, '0', STR_PAD_LEFT); ?>
                                                </span>
                                            </div>
                                            <h3 class="service-title h5">
                                                <?php echo esc_html($service['service_title']); ?>
                                            </h3>
                                            <p class="service-text">
                                                <?php echo esc_html($service['service_description']); ?>
                                            </p>
                                            <?php if (!empty($service['service_features'])) : ?>
                                                <ul class="list-unstyled service-list">
                                                    <?php foreach ($service['service_features'] as $feature) : ?>
                                                        <li>
                                                            <i class="far fa-check"></i>
                                                            <?php echo esc_html($feature['text']); ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <?php if (!empty($service['service_link']['url'])) : ?>
                                              <a
                                                  href="<?php echo esc_url($service['service_link']['url']); ?>"
                                                  class="arrow-btn"
                                                  <?php if (!empty($service['service_link']['is_external'])) : ?>
                                                      target="_blank"
                                                  <?php endif; ?>
                                                  <?php if (!empty($service['service_link']['nofollow'])) : ?>
                                                      rel="nofollow"
                                                  <?php endif; ?>
                                              >
                                                  <?php echo esc_html(
                                                      !empty($service['service_button_text'])
                                                          ? $service['service_button_text']
                                                          : 'Read More'
                                                  ); ?>
                                                  <i class="fal fa-long-arrow-right"></i>
                                              </a>
                                          <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="thumb-style1 service-slider-two">
                            <?php foreach ($settings['services'] as $service) : ?>
                                <div>
                                    <div class="thumb-item">
                                        <div class="thumb-img">
                                            <img
                                                src="<?php echo esc_url(
                                                    !empty($service['thumb_image']['url'])
                                                        ? $service['thumb_image']['url']
                                                        : $service['service_image']['url']
                                                ); ?>"
                                                alt=""
                                            >
                                        </div>
                                        <h3 class="thumb-title h6">
                                            <?php echo esc_html($service['service_title']); ?>
                                        </h3>
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