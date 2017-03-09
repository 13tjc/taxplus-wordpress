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
 .hidden-xs-down {
    display: inline-block!important;
  }
</style>

<div class="" id="full-width-page-wrapper">
  <div class="staff-header">

  </div>
  <div class="section-header-news">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div class="" style="padding: 0 0px 0 0;">
            <?php the_content(); ?>
          </div>
        </div>
        <div class="hidden-xs-down col-sm-4">
          <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" />
        </div>
      </div>
    </div>
  </div>
	<div class="<?php echo esc_html( $container ); ?>" id="content" style="margin-top:50px;">
		<div class="container">
			<div class="row">

				<div class="col-md-12 content-area" id="primary">

					<main class="site-main" id="main" role="main">
						<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

							<div class="entry-content">
                <?php 
                  $args = array( 'post_type' => 'post', 'posts_per_page' => 1);
                  $the_query = new WP_Query( $args ); 
                  $recent_args = array( 'post_type' => 'post', 'posts_per_page' => 5, 'offset' => 1);
                  $the_recent = new WP_Query( $recent_args ); 
                ?>
                <div class="row vertical-margin-buffer">
                  <div class="col-xs-12 col-sm-8">
                    <?php if ( $the_query->have_posts() ) : ?>
                      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                          <h2 class=""><?php the_title(); ?></h2>
                          <div class="the-date"><p><br><?php the_time('F jS, Y') ?></p></div>
                          <div class="cont-main">
                            <p>

                              <?php the_content();?>
                                        
                            </p>
                          </div>


                          <div class="cont-res">
                            <div class="sww">
                              <p>
                                <?php 
                                  $content = get_the_content(); 
                                  echo mb_strimwidth($content, 0, 400, '<div class="swx"><a href="#">... [ + ]</a></div>');
                                ?>
                              </p>
                            </div>

                            <div class="swb" >
                              <p> 
                                <?php  $contents = get_the_content();  echo $contents; ?>
                              </p>
                            </div>
                          </div> 
                              
                            
                      <?php endwhile ?>  
                    <?php endif ?>
                  </div>
                  <div class="hidden-xs-down col-sm-4">
                    <div class="more-news-heading">
                      More News
                    </div>
                    <?php if ( $the_recent->have_posts() ) : ?>
                      <?php while ( $the_recent->have_posts() ) : $the_recent->the_post(); ?>
                          <div class="more-news">
                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                          </div>
                          <hr>
                      <?php endwhile ?>  
                    <?php endif ?>
                  </div>
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
<script type="text/javascript">
$(".swb").hide();
  $(function() {
    
  $(".swx").click(function() {
    $(".swb").show();
     $(".sww").hide();
    
  });
});
</script>






