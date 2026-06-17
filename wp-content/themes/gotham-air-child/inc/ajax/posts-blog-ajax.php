<?php
if (!defined('ABSPATH')) {
	exit;
}
function gt_load_more_posts() {
	check_ajax_referer(
		'gt_posts_blog_nonce',
		'nonce'
	);
	$page = isset($_POST['page'])
		? intval($_POST['page'])
		: 1;
	$post_type = isset($_POST['post_type'])
		? sanitize_text_field($_POST['post_type'])
		: 'post';
	$posts_per_page = isset($_POST['posts_per_page'])
		? intval($_POST['posts_per_page'])
		: 6;
	$order = isset($_POST['order'])
		? sanitize_text_field($_POST['order'])
		: 'DESC';
	$orderby = isset($_POST['orderby'])
		? sanitize_text_field($_POST['orderby'])
		: 'date';
	$page++;
	$args = [
		'post_type'      => $post_type,
		'post_status'    => 'publish',
		'posts_per_page' => $posts_per_page,
		'paged'          => $page,
		'orderby'        => $orderby,
		'order'          => $order,
	];
	$query = new WP_Query($args);
	ob_start();
	if ($query->have_posts()) :
		$count = 0;
		while ($query->have_posts()) :
			$query->the_post();
			$count++;
			$reverse = ($count % 2 === 0);
			?>
			<div class="col-md-6 col-xl-4 blog-style2">
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
	endif;
	wp_reset_postdata();
	$html = ob_get_clean();
	wp_send_json_success([
		'html' => $html,
		'page' => $page,
	]);
	wp_die();
}