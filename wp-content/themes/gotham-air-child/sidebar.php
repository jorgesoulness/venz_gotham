<aside class="sidebar-area">
	<div class="widget widget_search">
		<form
			role="search"
			method="get"
			class="search-form"
			action="<?php echo esc_url(home_url('/')); ?>"
		>
			<input
				type="search"
				placeholder="Search Here"
				name="s"
				value="<?php echo get_search_query(); ?>"
			>
			<button type="submit">
				<i class="far fa-search"></i>
			</button>
		</form>
	</div>
	<?php if(is_page(53) || is_archive()): ?>
		<?php
		$parent = get_term_by(
				'slug',
				'blog',
				'category'
		);
		if ( $parent ) :
			$children = get_categories([
				'parent'     => $parent->term_id,
				'hide_empty' => true,
			]);
		?>
		<div class="widget widget_categories">
			<h3 class="widget_title">Categories</h3>
			<ul>
				<li>
					<a href="<?php echo esc_url( get_category_link( $parent->term_id ) ); ?>">
						<?php echo esc_html( $parent->name ); ?>
					</a>
				</li>
				<?php foreach ( $children as $child ) : ?>
				<li>
					<a href="<?php echo esc_url( get_category_link( $child->term_id ) ); ?>">
						<?php echo esc_html( $child->name ); ?>
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>
	<?php endif; ?>
	<?php if(is_single()): ?>
	<div class="widget">
		<h3 class="widget_title">
			Recent Articles
		</h3>
		<div class="recent-post-wrap">
			<?php
			$recent_posts = new WP_Query([
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 3,
				'post__not_in' => [get_the_ID()]
			]);
			if ($recent_posts->have_posts()) :
				while ($recent_posts->have_posts()) :
					$recent_posts->the_post();
			?>
				<div class="recent-post">
					<div class="media-img">
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
						</a>
					</div>
					<div class="media-body">
						<h4 class="post-title">
							<a
								class="text-inherit"
								href="<?php the_permalink(); ?>"
							>
								<?php the_title(); ?>
							</a>
						</h4>
						<div class="recent-post-meta">
							<a href="<?php the_permalink(); ?>">
								<i class="fal fa-calendar-alt"></i>
								<?php echo get_the_date('d M Y'); ?>
							</a>
						</div>
					</div>
				</div>
			<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
	<?php endif; ?>
</aside>