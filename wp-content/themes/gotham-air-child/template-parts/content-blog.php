<?php
/**
 * Template part for displaying posts/blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gotham_Air_Child
 */

?>

<div class="breadcumb-wrapper" data-bg-src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/about_banner_edit.jpg'); ?>">
	<div class="container z-index-common">
		<div class="breadcumb-content">
			<h1 class="breadcumb-title">
				Blog
			</h1>
		</div>
	</div>
	<div class="breadcumb-overlay"></div>
</div>
<section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="vs-blog blog-single has-post-thumbnail">
					<?php if (has_post_thumbnail()) : ?>
						<div class="blog-img">
							<?php the_post_thumbnail('full'); ?>
							<a href="<?php the_permalink(); ?>" class="blog-date">
								<?php echo get_the_date('d M, Y'); ?>
							</a>
						</div>
					<?php endif; ?>
					<div class="blog-content">
						<div class="blog-meta">
							<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
								<i class="far fa-user"></i>
								<?php the_author(); ?>
							</a>
						</div>
						<h2 class="blog-title">
							<?php the_title(); ?>
						</h2>
						<?php the_content(); ?>
					</div>
					<div class="share-links clearfix">
						<div class="row justify-content-between">
							<div class="col-xl-auto">
								<span class="share-links-title">
									Share:
								</span>
								<ul class="social-links">
									<li>
										<a
											href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
											target="_blank"
										>
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a
											href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>"
											target="_blank"
										>
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a
											href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>"
											target="_blank"
										>
											<i class="fab fa-linkedin-in"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>