<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_Team_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-team';
    }
    public function get_title() {
        return __('GT Team', 'gotham-air-child');
    }
    public function get_icon() {
        return 'eicon-person';
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
                'default' => 'Team Members'
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Meet Our Team of Expert Staff'
            ]
        );
        $this->add_control(
            'slides_desktop',
            [
                'label' => __('Desktop Slides'),
                'type' => Controls_Manager::NUMBER,
                'default' => 4,
            ]
        );
        $this->add_control(
            'slides_lg',
            [
                'label' => __('Large Slides'),
                'type' => Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $this->add_control(
            'slides_md',
            [
                'label' => __('Tablet Slides'),
                'type' => Controls_Manager::NUMBER,
                'default' => 2,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'image',
            [
                'label' => __('Photo'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'name',
            [
                'label' => __('Name'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'position',
            [
                'label' => __('Position'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'profile_link',
            [
                'label' => __('Profile Link'),
                'type' => Controls_Manager::URL,
            ]
        );
        $repeater->add_control(
            'facebook',
            [
                'label' => __('Facebook'),
                'type' => Controls_Manager::URL,
            ]
        );
        $repeater->add_control(
            'linkedin',
            [
                'label' => __('LinkedIn'),
                'type' => Controls_Manager::URL,
            ]
        );
        $repeater->add_control(
            'twitter',
            [
                'label' => __('Twitter / X'),
                'type' => Controls_Manager::URL,
            ]
        );
        $repeater->add_control(
            'instagram',
            [
                'label' => __('Instagram'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'members',
            [
                'label' => __('Members'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ name }}}'
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        if (empty($settings['members'])) {
            return;
        }
        ?>
        <section class="position-relative space-top space-extra-bottom">
            <?php if (!empty($settings['shape_image']['url'])) : ?>
                <div class="team-shape1 d-none d-hd-block">
                    <img src="<?php echo esc_url($settings['shape_image']['url']); ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-8 col-lg-7 col-xl-6">
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
                <div
                    class="row vs-carousel"
                    data-arrows="true"
                    data-slide-show="<?php echo esc_attr($settings['slides_desktop']); ?>"
                    data-lg-slide-show="<?php echo esc_attr($settings['slides_lg']); ?>"
                    data-md-slide-show="<?php echo esc_attr($settings['slides_md']); ?>"
                    data-xs-dots="true"
                >
                    <?php foreach ($settings['members'] as $member) : ?>
                        <div class="col-xl-3">
                            <div class="team-style1">
                                <div class="team-img">
                                    <?php if (!empty($member['profile_link']['url'])) : ?>
                                        <a href="<?php echo esc_url($member['profile_link']['url']); ?>">
                                    <?php endif; ?>
                                    <?php if (!empty($member['image']['url'])) : ?>
                                        <img src="<?php echo esc_url($member['image']['url']); ?>" alt="<?php echo esc_attr($member['name']); ?>">
                                    <?php endif; ?>
                                    <?php if (!empty($member['profile_link']['url'])) : ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="team-social">
                                        <?php if (!empty($member['facebook']['url'])) : ?>
                                            <a href="<?php echo esc_url($member['facebook']['url']); ?>" target="_blank">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($member['linkedin']['url'])) : ?>
                                            <a href="<?php echo esc_url($member['linkedin']['url']); ?>" target="_blank">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($member['twitter']['url'])) : ?>
                                            <a href="<?php echo esc_url($member['twitter']['url']); ?>" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (!empty($member['instagram']['url'])) : ?>
                                            <a href="<?php echo esc_url($member['instagram']['url']); ?>" target="_blank">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <?php if (!empty($member['name'])) : ?>
                                        <h3 class="team-name">
                                            <?php if (!empty($member['profile_link']['url'])) : ?>
                                                <a class="text-inherit" href="<?php echo esc_url($member['profile_link']['url']); ?>">
                                            <?php endif; ?>
                                            <?php echo esc_html($member['name']); ?>
                                            <?php if (!empty($member['profile_link']['url'])) : ?>
                                                </a>
                                            <?php endif; ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($member['position'])) : ?>
                                        <span class="team-degi">
                                            <?php echo esc_html($member['position']); ?>
                                        </span>
                                    <?php endif; ?>
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