<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
class GT_Highlights_Widget extends \Elementor\Widget_Base {
	public function get_name() {
		return 'gt-highlights';
	}
	public function get_title() {
		return esc_html__( 'GT Highlights', 'gotham-air-child' );
	}
	public function get_icon() {
		return 'eicon-ticker';
	}
	public function get_categories() {
		return [ 'gotham-air' ];
	}
	protected function register_controls() {

		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Highlights', 'gotham-air-child' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'text',
			[
				'label'       => esc_html__( 'Text', 'gotham-air-child' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => esc_html__( 'Electrical Panel Upgrades', 'gotham-air-child' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'icon_class',
			[
				'label'       => esc_html__( 'Icon Class', 'gotham-air-child' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => 'fal fa-lightbulb-on',
				'label_block' => true,
			]
		);
		$this->add_control(
			'items',
			[
				'label'       => esc_html__( 'Items', 'gotham-air-child' ),
				'type'        => \Elementor\Controls_Manager::REPEATER,
				'fields'      => $repeater->get_controls(),
				'default'     => [
					[
						'text' => 'Electrical Panel Upgrades',
					],
					[
						'text' => 'Electrical Safety Inspections',
					],
					[
						'text' => 'Solar Panel Installations',
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Style', 'gotham-air-child' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Text Color', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::COLOR,
			]
		);
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::COLOR,
			]
		);
		$this->add_control(
			'background_color',
			[
				'label' => esc_html__( 'Background Color', 'gotham-air-child' ),
				'type'  => \Elementor\Controls_Manager::COLOR,
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( empty( $settings['items'] ) ) {
			return;
		}
		$text_color = ! empty( $settings['text_color'] ) ? $settings['text_color'] : '';
		$icon_color = ! empty( $settings['icon_color'] ) ? $settings['icon_color'] : '';
		$bg_color   = ! empty( $settings['background_color'] ) ? $settings['background_color'] : '';
		?>
		<div
			class="ticker-style1"
			<?php if ( $bg_color ) : ?>
				style="background-color: <?php echo esc_attr( $bg_color ); ?>;"
			<?php endif; ?>
		>
			<div class="ticker-slide">
				<?php foreach ( $settings['items'] as $item ) : ?>
					<span
						<?php if ( $text_color ) : ?>
							style="color: <?php echo esc_attr( $text_color ); ?>;"
						<?php endif; ?>
					>
						<?php echo esc_html( $item['text'] ); ?>
						<i
							class="<?php echo esc_attr( $item['icon_class'] ); ?>"
							<?php if ( $icon_color ) : ?>
								style="color: <?php echo esc_attr( $icon_color ); ?>;"
							<?php endif; ?>
						></i>
					</span>
				<?php endforeach; ?>
			</div>
		</div>
		<?php
	}
}