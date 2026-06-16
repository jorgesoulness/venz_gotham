<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_Our_Values_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-our-values';
    }
    public function get_title() {
        return __('GT Our Values', 'gotham-air-child');
    }
    public function get_icon() {
        return 'eicon-process';
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
                'default' => 'Who We Are',
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Our Working Process',
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => __('Description'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'items',
            [
                'label' => __('Process Items'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="position-relative space-top space-extra-bottom">
            <?php if (!empty($settings['shape_image']['url'])) : ?>
                <div class="process-shape1 d-none d-hd-block">
                    <img src="<?php echo esc_url($settings['shape_image']['url']); ?>" alt="">
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="title-area text-center">
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
                <?php if (!empty($settings['items'])) : ?>
                    <div class="row">
                        <?php foreach ($settings['items'] as $index => $item) : ?>
                            <div class="col-md-6 col-xl-3">
                                <div class="process-style1">
                                    <div class="process-number">
                                        <?php echo str_pad(($index + 1), 2, '0', STR_PAD_LEFT); ?>
                                    </div>
                                    <?php if (!empty($item['icon']['url'])) : ?>
                                        <div class="process-icon">
                                            <img src="<?php echo esc_url($item['icon']['url']); ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($item['title'])) : ?>
                                        <h3 class="process-name">
                                            <?php echo esc_html($item['title']); ?>
                                        </h3>
                                    <?php endif; ?>
                                    <?php if (!empty($item['description'])) : ?>
                                        <p class="process-text">
                                            <?php echo esc_html($item['description']); ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <?php
    }
}