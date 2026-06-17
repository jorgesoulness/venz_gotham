<?php
if (!defined('ABSPATH')) {
    exit;
}
class GT_Detail_Service_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'gt_detail_service';
    }
    public function get_title() {
        return __('GT Detail Service', 'gt-core');
    }
    public function get_icon() {
        return 'eicon-text-area';
    }
    public function get_categories() {
        return ['gotham-air'];
    }
    public function get_keywords() {
        return ['service', 'detail', 'project', 'content'];
    }
    protected function register_controls() {
        /*
        |--------------------------------------------------------------------------
        | Content
        |--------------------------------------------------------------------------
        */
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'gt-core'),
            ]
        );
        $this->add_control(
            'section_id',
            [
                'label' => __('Section ID', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => 'about-project',
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __('Title', 'gt-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => 'About The Project Overview',
            ]
        );
        $this->add_control(
            'content',
            [
                'label' => __('Content', 'gt-core'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => '
                    <p>Addressing electrical issues in homes such as outlet repairs, circuit breakers, wiring issues, lighting installation, and electrical panel upgrades.</p>
                    <p>Larger-scale electrical work for businesses, including troubleshooting electrical issues, upgrading electrical panels, wiring maintenance, and emergency services.</p>
                    <p>Specialized cleaning of carpets using steam cleaning, shampooing, or dry cleaning methods to remove dirt, stains, and allergens.</p>
                ',
            ]
        );
        $this->end_controls_section();
        /*
        |--------------------------------------------------------------------------
        | Layout
        |--------------------------------------------------------------------------
        */
        $this->start_controls_section(
            'layout_section',
            [
                'label' => __('Layout', 'gt-core'),
            ]
        );
        $this->add_control(
            'remove_top_space',
            [
                'label' => __('Remove Top Space', 'gt-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
            ]
        );
        $this->add_control(
            'remove_bottom_space',
            [
                'label' => __('Remove Bottom Space', 'gt-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
            ]
        );
        $this->end_controls_section();
    }
    protected function render() {
        $settings = $this->get_settings_for_display();
        $classes = ['project-details-wrapper'];
        if (
            $settings['remove_top_space'] === 'yes' &&
            $settings['remove_bottom_space'] === 'yes'
        ) {
            $classes[] = '';
        } elseif ($settings['remove_top_space'] === 'yes') {
            $classes[] = 'space-bottom';
        } elseif ($settings['remove_bottom_space'] === 'yes') {
            $classes[] = 'space-top';
        } else {
            $classes[] = 'space';
        }
        ?>
        <section
            <?php if (!empty($settings['section_id'])) : ?>
                id="<?php echo esc_attr($settings['section_id']); ?>"
            <?php endif; ?>
            class="<?php echo esc_attr(implode(' ', $classes)); ?>">
            <div class="container">
                <div class="row gx-40 flex-column-reverse flex-lg-row">
                    <div class="col">
                        <?php if (!empty($settings['title'])) : ?>
                            <h2 class="mt-n2 h1">
                                <?php echo esc_html($settings['title']); ?>
                            </h2>
                        <?php endif; ?>
                        <?php echo wp_kses_post($settings['content']); ?>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}