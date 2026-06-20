<?php
if (!defined('ABSPATH')) {
	exit;
}
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
class GT_Posts_Blog_Widget extends Widget_Base {
	public function get_name() {
		return 'gt-posts-blog';
	}
	public function get_title() {
		return __('GT Posts Blog', 'gotham-air-child');
	}
	public function get_icon() {
		return 'eicon-post-list';
	}
	public function get_categories() {
		return ['gotham-air'];
	}
	public function get_script_depends() {
		return ['gt-posts-blog'];
	}
	protected function register_controls() {
		/*
		|--------------------------------------------------------------------------
		| Content
		|--------------------------------------------------------------------------
		*/
		$this->start_controls_section(
			'section_content',
			[
				'label' => __('Content', 'gotham-air-child'),
			]
		);
		$this->add_control(
			'subtitle',
			[
				'label' => __('Subtitle', 'gotham-air-child'),
				'type' => Controls_Manager::TEXT,
				'default' => 'Latest News',
			]
		);
		$this->add_control(
			'title',
			[
				'label' => __('Title', 'gotham-air-child'),
				'type' => Controls_Manager::TEXT,
				'default' => 'Latest Articles',
			]
		);
		$this->add_control(
			'description',
			[
				'label' => __('Description', 'gotham-air-child'),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$this->end_controls_section();
		/*
		|--------------------------------------------------------------------------
		| Query
		|--------------------------------------------------------------------------
		*/
		$this->start_controls_section(
			'section_query',
			[
				'label' => __('Query', 'gotham-air-child'),
			]
		);
		$post_types = get_post_types(
			[
				'public' => true,
			],
			'objects'
		);
		$post_type_options = [];
		foreach ($post_types as $post_type) {
			$post_type_options[$post_type->name] = $post_type->label;
		}
		$this->add_control(
			'post_type',
			[
				'label' => __('Post Type', 'gotham-air-child'),
				'type' => Controls_Manager::SELECT,
				'default' => 'post',
				'options' => $post_type_options,
			]
		);
		$this->add_control(
			'posts_per_page',
			[
				'label' => __('Posts Per Page', 'gotham-air-child'),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'min' => 1,
				'max' => 50,
			]
		);
		$this->add_control(
			'orderby',
			[
				'label' => __('Order By', 'gotham-air-child'),
				'type' => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => [
					'date' => 'Date',
					'title' => 'Title',
					'rand' => 'Random',
					'menu_order' => 'Menu Order',
				],
			]
		);
		$this->add_control(
			'order',
			[
				'label' => __('Order', 'gotham-air-child'),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => 'DESC',
					'ASC' => 'ASC',
				],
			]
		);
		$this->end_controls_section();
		/*
		|--------------------------------------------------------------------------
		| Load More
		|--------------------------------------------------------------------------
		*/
		$this->start_controls_section(
			'section_loadmore',
			[
				'label' => __('Load More', 'gotham-air-child'),
			]
		);
		$this->add_control(
			'enable_load_more',
			[
				'label' => __('Enable Load More', 'gotham-air-child'),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);
		$this->add_control(
			'load_more_text',
			[
				'label' => __('Button Text', 'gotham-air-child'),
				'type' => Controls_Manager::TEXT,
				'default' => 'Load More',
				'condition' => [
					'enable_load_more' => 'yes',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$query_args = [
			'post_type'      => $settings['post_type'],
			'post_status'    => 'publish',
			'posts_per_page' => $settings['posts_per_page'],
			'orderby'        => $settings['orderby'],
			'order'          => $settings['order'],
			'paged'          => 1,
		];
		$query = new WP_Query($query_args);
		$widget_id = $this->get_id();
		?>
		<section class="space-top space-extra-bottom gt-posts-blog-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-12">
					<?php if (
						!empty($settings['subtitle']) ||
						!empty($settings['title']) ||
						!empty($settings['description'])
					) : ?>
						<div class="row justify-content-center text-center">
							<div class="col-xl-8">
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
									<?php if (!empty($settings['description'])) : ?>
										<p class="sec-text">
											<?php echo wp_kses_post($settings['description']); ?>
										</p>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php endif; ?>
					</div>
					<div class="col-12 col-md-8">
						<div class="row gt-posts-blog-grid" id="gt-posts-blog-<?php echo esc_attr($widget_id); ?>">
							<?php
							$count = 0;
							if ($query->have_posts()) :
								while ($query->have_posts()) :
									$query->the_post();
									$count++;
									$reverse = ($count % 2 === 0);
									?>
									<div class="col-md-6 col-xl-6 blog-style2">
										<div class="blog-body">
											<?php if (!$reverse) : ?>
												<div class="blog-img">
													<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('large'); ?>
													</a>
												</div>
											<?php endif; ?>
											<div class="blog-content">
												<div class="blog-author">
													<div class="avater">
														<?php echo get_avatar(get_the_author_meta('ID'), 60); ?>
													</div>
													<div class="author-content">
														By
														<span class="name">
															<?php the_author(); ?>
														</span>
													</div>
												</div>
												<h3 class="blog-title h5">
													<a href="<?php the_permalink(); ?>">
														<?php the_title(); ?>
													</a>
												</h3>
												<div class="blog-meta">
													<a href="<?php the_permalink(); ?>" class="blog-date">
														<span class="day">
															<?php echo get_the_date('d'); ?>
														</span>
														<?php echo get_the_date('M'); ?>
													</a>
													<div class="inside-meta">
														<a href="<?php comments_link(); ?>">
															<i class="far fa-comments"></i>
															<?php echo get_comments_number(); ?>
														</a>
														<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
															<i class="far fa-user"></i>
															<?php the_author(); ?>
														</a>
													</div>
												</div>
											</div>
											<?php if ($reverse) : ?>
												<div class="blog-img">
													<a href="<?php the_permalink(); ?>">
														<?php the_post_thumbnail('large'); ?>
													</a>
												</div>
											<?php endif; ?>
										</div>
									</div>
								<?php
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</div>
						<?php if (
							$settings['enable_load_more'] === 'yes'
							&& $query->max_num_pages > 1
						) :
						?>
							<div class="text-center mt-5">
								<button
									class="vs-btn gt-load-more-posts"
									data-widget-id="<?php echo esc_attr($widget_id); ?>"
									data-page="1"
									data-max-pages="<?php echo esc_attr($query->max_num_pages); ?>"
									data-post-type="<?php echo esc_attr($settings['post_type']); ?>"
									data-posts-per-page="<?php echo esc_attr($settings['posts_per_page']); ?>"
									data-order="<?php echo esc_attr($settings['order']); ?>"
									data-orderby="<?php echo esc_attr($settings['orderby']); ?>"
								>
									<?php echo esc_html($settings['load_more_text']); ?>
								</button>
							</div>
						<?php endif; ?>
					</div>
					<div class="col-12 col-md-4">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
}