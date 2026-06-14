<?php
if (!defined('ABSPATH')) {
    exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Repeater;
use Elementor\Group_Control_Typography;
use Elementor\Utils;
class GT_About_Us_Widget extends Widget_Base {
    public function get_name() {
        return 'gt-about-us';
    }
    public function get_title() {
        return __('GT About Us', 'gotham-air-child');
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
          'main_image',
          [
              'label' => __('Main Image'),
              'type' => Controls_Manager::MEDIA,
          ]
      );
      $this->add_control(
          'image_2',
          [
              'label' => __('Image 2'),
              'type' => Controls_Manager::MEDIA,
          ]
      );
      $this->add_control(
          'image_3',
          [
              'label' => __('Image 3'),
              'type' => Controls_Manager::MEDIA,
          ]
      );
      $this->add_control(
          'subtitle',
          [
              'label' => __('Subtitle'),
              'type' => Controls_Manager::TEXT,
              'default' => 'About us',
          ]
      );
      $this->add_control(
          'title',
          [
              'label' => __('Title'),
              'type' => Controls_Manager::TEXTAREA,
              'default' => 'We Restore the Power you Enjoy the Safety',
          ]
      );
      $this->add_control(
          'description',
          [
              'label' => __('Description'),
              'type' => Controls_Manager::TEXTAREA,
          ]
      );
      $button_repeater = new Repeater();
      $button_repeater->add_control(
          'button_text',
          [
              'label' => __('Text'),
              'type' => Controls_Manager::TEXT,
          ]
      );
      $button_repeater->add_control(
          'button_link',
          [
              'label' => __('Link'),
              'type' => Controls_Manager::URL,
          ]
      );
      $button_repeater->add_control(
          'button_class',
          [
              'label' => __('Style'),
              'type' => Controls_Manager::SELECT,
              'default' => 'style2',
              'options' => [
                  'style1' => 'Style 1',
                  'style2' => 'Style 2',
              ]
          ]
      );
      $this->add_control(
          'buttons',
          [
              'label' => __('Buttons'),
              'type' => Controls_Manager::REPEATER,
              'fields' => $button_repeater->get_controls(),
              'title_field' => '{{{ button_text }}}',
          ]
      );
      $this->add_control(
          'author_image',
          [
              'label' => __('Author Image'),
              'type' => Controls_Manager::MEDIA,
          ]
      );
      $this->add_control(
          'author_name',
          [
              'label' => __('Author Name'),
              'type' => Controls_Manager::TEXT,
          ]
      );
      $this->add_control(
          'author_position',
          [
              'label' => __('Author Position'),
              'type' => Controls_Manager::TEXT,
          ]
      );
      $feature_repeater = new Repeater();
      $feature_repeater->add_control(
          'feature_icon',
          [
              'label' => __('Icon'),
              'type' => Controls_Manager::MEDIA,
          ]
      );
      $feature_repeater->add_control(
          'feature_title',
          [
              'label' => __('Title'),
              'type' => Controls_Manager::TEXT,
          ]
      );
      $feature_repeater->add_control(
          'feature_text',
          [
              'label' => __('Text'),
              'type' => Controls_Manager::TEXTAREA,
          ]
      );
      $this->add_control(
          'features',
          [
              'label' => __('Features'),
              'type' => Controls_Manager::REPEATER,
              'fields' => $feature_repeater->get_controls(),
              'title_field' => '{{{ feature_title }}}',
          ]
      );
      $this->end_controls_section();
    } // <-- cierre de register_controls()
    protected function render() {
    $settings = $this->get_settings_for_display();
?>
<section class="position-relative space-top space-extra-bottom">
  <?php if (!empty($settings['shape_image']['url'])) : ?>
  <div class="about-shape1 d-none d-hd-block">
      <img src="<?php echo esc_url($settings['shape_image']['url']); ?>" alt="">
  </div>
  <?php endif; ?>
  <div class="container">
    <div class="row gx-85">
      <div class="col-lg-6">
        <div class="img-box2">
          <?php if (!empty($settings['main_image']['url'])) : ?>
          <div class="img-1">
              <div class="line"></div>
              <img src="<?php echo esc_url($settings['main_image']['url']); ?>" alt="">
          </div>
          <?php endif; ?>
          <?php if (!empty($settings['image_2']['url'])) : ?>
          <div class="img-2">
              <img src="<?php echo esc_url($settings['image_2']['url']); ?>" alt="">
          </div>
          <?php endif; ?>
          <?php if (!empty($settings['image_3']['url'])) : ?>
          <div class="img-3">
              <img src="<?php echo esc_url($settings['image_3']['url']); ?>" alt="">
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="title-area mb-30">
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
          <?php if (!empty($settings['description'])) : ?>
          <p class="sec-text">
            <?php echo wp_kses_post($settings['description']); ?>
          </p>
          <?php endif; ?>
          <div class="row gy-3">
            <?php if (!empty($settings['buttons'])) : ?>
            <?php foreach ($settings['buttons'] as $button) : ?>
            <div class="col-auto">
              <a href="<?php echo esc_url($button['button_link']['url']); ?>"
                class="vs-btn <?php echo esc_attr($button['button_class']); ?>">
                <?php echo esc_html($button['button_text']); ?>
                <i class="far fa-long-arrow-right"></i>
              </a>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
            <?php if (!empty($settings['author_name'])) : ?>
            <div class="col-auto">
              <div class="author-style1">
                <?php if (!empty($settings['author_image']['url'])) : ?>
                <div class="author-img">
                  <img src="<?php echo esc_url($settings['author_image']['url']); ?>" alt="">
                </div>
                <?php endif; ?>
                <div class="author-body">
                  <h4 class="author-name">
                  <?php echo esc_html($settings['author_name']); ?>
                  </h4>
                  <span class="author-degi">
                  <?php echo esc_html($settings['author_position']); ?>
                  </span>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <?php if (!empty($settings['features'])) : ?>
          <div class="feature-box1">
            <div class="row gx-0">
              <?php foreach ($settings['features'] as $feature) : ?>
              <div class="col-sm-6 feature-style1">
                <?php if (!empty($feature['feature_icon']['url'])) : ?>
                <div class="feature-icon">
                  <img src="<?php echo esc_url($feature['feature_icon']['url']); ?>" alt="">
                </div>
                <?php endif; ?>
                <h3 class="feature-title">
                <?php echo esc_html($feature['feature_title']); ?>
                </h3>
                <p class="feature-text">
                <?php echo esc_html($feature['feature_text']); ?>
                </p>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
}