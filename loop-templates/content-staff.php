<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<div class="" id="full-width-page-wrapper">
  <div class="staff-header">

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
                  $args = array( 'post_type' => 'staffm', 'posts_per_page' => 10,'orderby' => 'menu_order', 'order'   => 'ASC', );
                  $the_query = new WP_Query( $args ); 
                ?>
                <div class="staff-area">
                  <?php if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                      <div class="row staff-member">
                        <div class="col-sm-3 col-xs-12">
                          <img src="<?php the_post_thumbnail_url(); ?>"  class="img-responsive"/>
                        </div>
                        <div class="col-sm-9 col-xs-12">
                          <h3 class="no-top-margin"><?php the_title(); ?></h3>
                          <div class=""><?php the_content(); ?></div>
                        </div>
                        <hr />
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
