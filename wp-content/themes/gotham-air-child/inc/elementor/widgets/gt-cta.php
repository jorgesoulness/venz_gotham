<?php

if (!defined('ABSPATH')) {
    exit;
}

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class GT_CTA_Widget extends Widget_Base {

    public function get_name() {
        return 'gt-cta';
    }

    public function get_title() {
        return __('GT CTA', 'gotham-air-child');
    }

    public function get_icon() {
        return 'eicon-call-to-action';
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
                'default' => 'booking & Appointment'
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Get your Electrical Solutions With Our Profession'
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Description'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );

        $this->add_control(
            'progress_title',
            [
                'label' => __('Progress Title'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Project Solution'
            ]
        );

        $this->add_control(
            'progress_percent',
            [
                'label' => __('Progress Percent'),
                'type' => Controls_Manager::NUMBER,
                'default' => 95,
                'min' => 0,
                'max' => 100
            ]
        );

        $this->add_control(
            'phone_label',
            [
                'label' => __('Phone Label'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Call Any Time'
            ]
        );

        $this->add_control(
            'phone_number',
            [
                'label' => __('Phone Number'),
                'type' => Controls_Manager::TEXT,
                'default' => '(808) 555-0111'
            ]
        );

        $this->add_control(
            'form_title',
            [
                'label' => __('Form Title'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Book Electrical Solutions'
            ]
        );

        $this->add_control(
            'form_shortcode',
            [
                'label' => __('Form Shortcode'),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => 4
            ]
        );
        $this->add_control(
            'video_bg_image',
            [
                'label' => __('Video Background Image'),
                'type'  => Controls_Manager::MEDIA,
            ]
        );

        $this->add_control(
            'video_url',
            [
                'label'   => __('Video URL'),
                'type'    => Controls_Manager::URL,
                'default' => [
                    'url' => 'https://www.youtube.com/watch?v=',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $bg = '';
        if (!empty($settings['background_image']['url'])) {
            $bg = 'data-bg-src="' . esc_url($settings['background_image']['url']) . '"';
        }
        $percent = intval($settings['progress_percent']);
?>
<section class="space-top">
    <div class="container container-style3">
        <div class="cta-box1" <?php echo $bg; ?>>
            <div class="row align-items-center">
                <div class="col-xl-7">
                    <div class="title-area">
                        <?php if (!empty($settings['subtitle'])) : ?>
                            <span class="sec-subtitle2">
                                <?php echo esc_html($settings['subtitle']); ?>
                            </span>
                        <?php endif; ?>
                        <?php if (!empty($settings['title'])) : ?>
                            <h2 class="sec-title text-white">
                                <?php echo esc_html($settings['title']); ?>
                            </h2>
                        <?php endif; ?>
                        <?php if (!empty($settings['description'])) : ?>
                            <p class="sec-text text-white">
                                <?php echo wp_kses_post($settings['description']); ?>
                            </p>
                        <?php endif; ?>
                        <div class="progress-style1">
                            <h3 class="progress-title"><?php echo esc_html($settings['progress_title']); ?></h3>
                            <div class="progress-status">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    style="width: <?php echo $percent; ?>%;"
                                    aria-valuenow="<?php echo $percent; ?>"
                                    aria-valuemin="0"
                                    aria-valuemax="100">
                                    <span class="progress-number">
                                        <?php echo $percent; ?>%
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($settings['phone_number'])) : ?>
                            <div class="media-style4">
                                <div class="media-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="media-body">
                                    <span class="media-label"><?php echo esc_html($settings['phone_label']); ?></span>
                                    <p class="media-text">
                                        <a href="tel:<?php echo preg_replace('/[^0-9+]/', '', $settings['phone_number']); ?>" class="text-reset">
                                            <?php echo esc_html($settings['phone_number']); ?>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="form-style1">
                        <?php if (!empty($settings['form_title'])) : ?>
                            <h3 class="form_title"><?php echo esc_html($settings['form_title']); ?></h3>
                        <?php endif; ?>
                        <?php
                        if (!empty($settings['form_shortcode'])) {
                            echo do_shortcode(
                                wp_kses_post($settings['form_shortcode'])
                            );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Box -->
<?php
$video_bg = !empty($settings['video_bg_image']['url'])
    ? 'data-bg-src="' . esc_url($settings['video_bg_image']['url']) . '"'
    : '';
?>
<div class="cta-box2" <?php echo $video_bg; ?>>
    <?php if (!empty($settings['video_url']['url'])) : ?>
        <a href="<?php echo esc_url($settings['video_url']['url']); ?>" class="play-btn popup-video">
          <i class="fa fa-play"></i>
        </a>
    <?php endif; ?>
</div>
<?php
    }
}