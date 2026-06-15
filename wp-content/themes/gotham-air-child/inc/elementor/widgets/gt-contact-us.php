<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GT_Contact_Us_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-contact-us';
    }
    public function get_title() {
        return __('GT Contact Us', 'gotham-air-child');
    }
    public function get_icon() {
        return 'eicon-mail';
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
            'title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Contact Information',
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
        | Contact Boxes
        |--------------------------------------------------------------------------
        */
        $contact_repeater = new Repeater();
        $contact_repeater->add_control(
            'icon_class',
            [
                'label' => __('Icon Class'),
                'type' => Controls_Manager::TEXT,
                'default' => 'fal fa-map-marker-alt',
            ]
        );
        $contact_repeater->add_control(
            'item_title',
            [
                'label' => __('Title'),
                'type' => Controls_Manager::TEXT,
            ]
        );
        $contact_repeater->add_control(
            'item_content',
            [
                'label' => __('Content'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->add_control(
            'contact_items',
            [
                'label' => __('Contact Items'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $contact_repeater->get_controls(),
                'title_field' => '{{{ item_title }}}',
            ]
        );
        /*
        |--------------------------------------------------------------------------
        | Social Area
        |--------------------------------------------------------------------------
        */
        $this->add_control(
            'social_title',
            [
                'label' => __('Social Title'),
                'type' => Controls_Manager::TEXT,
                'default' => 'Follow The Social Media:',
            ]
        );
        $this->add_control(
            'social_description',
            [
                'label' => __('Social Description'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $social_repeater = new Repeater();
        $social_repeater->add_control(
            'icon_class',
            [
                'label' => __('Icon Class'),
                'type' => Controls_Manager::TEXT,
                'default' => 'fab fa-facebook-f',
            ]
        );
        $social_repeater->add_control(
            'social_link',
            [
                'label' => __('Link'),
                'type' => Controls_Manager::URL,
            ]
        );
        $this->add_control(
            'socials',
            [
                'label' => __('Social Networks'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $social_repeater->get_controls(),
            ]
        );
        /*
        |--------------------------------------------------------------------------
        | Form
        |--------------------------------------------------------------------------
        */
        $this->add_control(
            'form_shortcode',
            [
                'label' => __('Form Shortcode'),
                'type' => Controls_Manager::TEXTAREA,
                'placeholder' => '[contact-form-7 id="123"]',
            ]
        );
        /*
        |--------------------------------------------------------------------------
        | Map
        |--------------------------------------------------------------------------
        */
        $this->add_control(
            'map_embed',
            [
                'label' => __('Google Map Iframe'),
                'type' => Controls_Manager::TEXTAREA,
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <section class="space-top space-extra-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="title-area mb-xl-2 pb-xl-2">
                            <?php if (!empty($settings['title'])) : ?>
                                <h2 class="sec-title">
                                    <?php echo esc_html($settings['title']); ?>
                                </h2>
                            <?php endif; ?>
                            <?php if (!empty($settings['description'])) : ?>
                                <p class="pe-xxl-4">
                                    <?php echo wp_kses_post($settings['description']); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($settings['contact_items'])) : ?>
                            <div class="row pe-xxl-5 mb-xl-1">
                                <?php foreach ($settings['contact_items'] as $item) : ?>
                                    <div class="col-xl-6">
                                        <div class="media-style5">
                                            <?php if (!empty($item['icon_class'])) : ?>
                                                <div class="media-icon">
                                                    <i class="<?php echo esc_attr($item['icon_class']); ?>"></i>
                                                </div>
                                            <?php endif; ?>
                                            <div class="media-body">
                                                <?php if (!empty($item['item_title'])) : ?>
                                                    <h3 class="media-title">
                                                        <?php echo esc_html($item['item_title']); ?>
                                                    </h3>
                                                <?php endif; ?>
                                                <?php if (!empty($item['item_content'])) : ?>
                                                    <p class="media-info">
                                                        <?php echo nl2br(esc_html($item['item_content'])); ?>
                                                    </p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($settings['social_title'])) : ?>
                            <h4 class="fw-semibold h5">
                                <?php echo esc_html($settings['social_title']); ?>
                            </h4>
                        <?php endif; ?>
                        <?php if (!empty($settings['social_description'])) : ?>
                            <p class="mb-3 pb-1">
                                <?php echo esc_html($settings['social_description']); ?>
                            </p>
                        <?php endif; ?>
                        <?php if (!empty($settings['socials'])) : ?>
                            <div class="social-style3">
                                <?php foreach ($settings['socials'] as $social) : ?>
                                    <a href="<?php echo esc_url($social['social_link']['url']); ?>">
                                        <i class="<?php echo esc_attr($social['icon_class']); ?>"></i>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xl-6">
                        <?php if (!empty($settings['form_shortcode'])) : ?>
                            <?php echo do_shortcode($settings['form_shortcode']); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php if (!empty($settings['map_embed'])) : ?>
            <div class="contact-map">
                <?php echo $settings['map_embed']; ?>
            </div>
        <?php endif; ?>
        <?php
    }
}