<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<div class="" id="full-width-page-wrapper">
  <div class="section-header">
    <div class="plege-7-bg">
      <div class="pledge-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
      	<div class="agent-quote">
      		<?php if($post->post_name == "7-point-pledge"): ?>
      			<div class="top-quote"><?php echo get_post( get_post_thumbnail_id() )->post_excerpt ?></div>
      			<div class="plus-quote">
      			 <img src="/wp-content/uploads/2017/01/plus.jpg">
      			<?php echo get_post( get_post_thumbnail_id() )->post_content ?></div>
      		<?php endif ?>
      	</div>
      </div>

    </div>

  </div>
	
	<div class="text-center" style="text-align:center;height: 20px;">
		<?php if($post->post_name == "7-point-pledge"): ?>
			<img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/7pointstar.png" class="starburst" />
		<?php endif ?>
	</div>
	<?php if($post->post_name == "7-point-pledge"): ?>
		<div style="height:30px"></div>
	<?php endif ?>	
	<div class="<?php echo esc_html( $container ); ?>" id="content">
		<div class="container">
			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<header class="entry-header">

							</header><!-- .entry-header -->

							<div class="entry-content">

								<?php the_content(); ?>

								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								) );
								?>

							</div><!-- .entry-content -->

							<footer class="entry-footer">

								<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

							</footer><!-- .entry-footer -->

						</article><!-- #post-## -->
					</main><!-- #main -->

				</div><!-- #primary -->

			</div><!-- .row end -->
		</div><!-- .container end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

