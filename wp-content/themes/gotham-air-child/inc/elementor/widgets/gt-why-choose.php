<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_Why_Choose_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-why-choose';
    }
    public function get_title() {
        return __('GT Why Choose', 'gotham-air-child');
    }
    public function get_icon() {
        return 'eicon-featured-image';
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
                'default' => 'why we Choose us',
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => 'Get your Electrical Solutions With Our Profession',
            ]
        );
        $this->add_control(
            'description',
            [
                'label' => __('Description'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $feature_repeater = new Repeater();
        $feature_repeater->add_control(
            'icon',
            [
                'label' => __('Icon'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $feature_repeater->add_control(
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $feature_repeater->add_control(
            'description',
            [
                'label' => __('Description'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'features',
            [
                'label' => __('Features'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $feature_repeater->get_controls(),
                'title_field' => '{{{ title }}}',
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
        ?>
        <section class="bg-title position-relative space-top space-extra-bottom" <?php echo $bg; ?>>
            <div class="container z-index-common">
                <div class="row">
                    <div class="col-md-9 col-lg-7 col-xl-8 text-center text-md-start">
                        <div class="title-area">
                            <?php if (!empty($settings['subtitle'])) : ?>
                                <span class="sec-subtitle3">
                                    <?php echo esc_html($settings['subtitle']); ?>
                                </span>
                            <?php endif; ?>
                            <?php if (!empty($settings['title'])) : ?>
                                <h2 class="sec-title text-white col-xl-10">
                                    <?php echo esc_html($settings['title']); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if (!empty($settings['description'])) : ?>
                                <p class="sec-text" style="color:#ffffff;">
                                    <?php echo wp_kses_post($settings['description']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (!empty($settings['features'])) : ?>
                        <div class="col-xl-12">
                            <div class="feature-style2">
                                <!-- <div class="dot-shape"></div> -->
                                <?php foreach ($settings['features'] as $feature) : ?>
                                    <div class="feature-item">
                                        <?php if (!empty($feature['icon']['url'])) : ?>
                                            <div class="feature-icon">
                                                <img
                                                    src="<?php echo esc_url($feature['icon']['url']); ?>"
                                                    alt=""
                                                >
                                            </div>
                                        <?php endif; ?>
                                        <div class="feature-content">
                                            <?php if (!empty($feature['title'])) : ?>
                                                <h3 class="feature-title h5">
                                                    <?php echo esc_html($feature['title']); ?>
                                                </h3>
                                            <?php endif; ?>
                                            <?php if (!empty($feature['description'])) : ?>
                                                <p class="feature-text">
                                                    <?php echo esc_html($feature['description']); ?>
                                                </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <?php
    }
}