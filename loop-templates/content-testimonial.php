<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style type="text/css">
	.section-header {
    background: #e5b897;
}
</style>
<div class="" id="full-width-page-wrapper">
  <div class="section-header">
    <div class="plege-7-bg" style="">
      <div class="pledge-wrapper" style="background: url('<?php the_post_thumbnail_url(); ?>') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;"></div>
    </div>

  </div>
	<div class="<?php echo esc_html( $container ); ?>" id="content" style="margin-top:50px;">
		<div class="container">
			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<div class="entry-content">

								<?php the_content(); ?>

								<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
									'after'  => '</div>',
								) );
								?>
                <?php 
                  $args = array( 'post_type' => 'testimonial', 'posts_per_page' => 10,'orderby' => 'menu_order', 'order'   => 'ASC', );
                  $the_query = new WP_Query( $args ); 
                ?>
                <div class="row vertical-margin-buffer">
                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div class="col-xs-12 col-sm-3 col-md-4">
                        <div class="testimonial-wrapper">
                          <div class="testimonial-quote">
                            <?php the_content(); ?>
                          </div>
                          <div class="by-who">- <?php the_title(); ?></div>
                        </div>
                      </div>
                    <?php endwhile ?>  
                  <?php endif ?>
                </div>
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
