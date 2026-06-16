<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
class GT_Map_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-map';
    }
    public function get_title() {
        return __('GT Map', 'gotham-air-child');
    }
    public function get_icon() {
        return 'eicon-google-maps';
    }
    public function get_categories() {
        return ['gotham-air'];
    }
    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Map Settings', 'gotham-air-child'),
            ]
        );
        $this->add_control(
            'map_embed',
            [
                'label' => __('Google Maps Embed URL', 'gotham-air-child'),
                'type' => Controls_Manager::TEXTAREA,
                'rows' => 8,
                'description' => __('Paste only the URL from the iframe src attribute.', 'gotham-air-child'),
            ]
        );
        $this->add_control(
            'map_height',
            [
                'label' => __('Height (px)', 'gotham-air-child'),
                'type' => Controls_Manager::NUMBER,
                'default' => 700,
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        if (empty($settings['map_embed'])) {
            return;
        }
        $height = !empty($settings['map_height'])
            ? intval($settings['map_height'])
            : 700;
        ?>
        <div class="contact-map">
          <iframe src="<?php echo esc_url($settings['map_embed']); ?>" width="600" height="<?php echo esc_attr($height); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php
    }
}