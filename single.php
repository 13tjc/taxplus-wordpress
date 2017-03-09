<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style type="text/css">
  .section-header {
    background: #e5b897;
   /* min-height: 400px;*/
}
 .hidden-xs-down {
    display: inline-block!important;
    width: 100%;
  }
  .section-header-news {
    
     padding: 0px; 
}
.hidden-xs-down img{
    width:100%;
  }
  @media only screen and (min-width:426px) and (max-width: 767px)  {
  .col-sm-8 {
     width: 100%;
}
  .hidden-xs-down img {
    
    min-width: 100%;
}
.hidden-xs-down {
    
    width: 100%;
}
}
@media only screen and (min-width:768px) and (max-width: 10000px)  {
   .section-header-news {
    
     padding: 40px; 
}
.hidden-xs-down {
    display: inline-block!important;
     width: 33.33333%;
}
.hidden-xs-down img{
      width: 100%;
      float: left
}


}
</style>

<div class="" id="full-width-page-wrapper">
  <div class="staff-header">

  </div>
  <div class="section-header-news">

    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8">
          <div class="" >
            <h3>Insights and tips. From our Tax Plus Team.</h3>
<p>A little knowledge can go a long way toward helping you maximize your tax advantages. That’s why our TaxPlus professionals regularly write and share articles of interest to our client base. If you like what you see, follow us on social media to read more.</p>
          </div>
        </div>
        <div class="hidden-xs-down col-sm-4">
          <img src="/wp-content/uploads/2016/12/news-team.png" class="img-responsive">
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
                
                  $recent_args = array( 'post_type' => 'post', 'posts_per_page' => 5);
                  $the_recent = new WP_Query( $recent_args ); 
                ?>



                <div class="row vertical-margin-buffer">
                  <div class="col-xs-12 col-sm-8">
                    <?php while ( have_posts() ) : the_post(); ?>




				

                          <div class="cont-main">
                          <h2 class=""><?php the_title(); ?></h2>
                          <div class="the-date"><p><br><?php the_time('F jS, Y') ?></p></div>
                            <p>

                              <?php the_content();?>
                                        
                            </p>
                          </div>


                          <div class="cont-res">
                           <h1 class=""><?php the_title(); ?></h1>
                          <div class="the-date"><p><br><?php the_time('F jS, Y') ?></p></div>
                            <div class="sww">
                              <p>
                                <?php 
                                  $content = get_the_content(); 
                                  echo mb_strimwidth($content, 0, 400, '<div class="swx"><a href="#svv">... [ + ]</a></div>');
                                ?>
                              </p>
                            </div>

                            <div class="swb" id="svv">
                              <p> 
                                <?php  $contents = get_the_content();  echo $contents; ?>
                              </p>
                            </div>
                          </div> 

						<?php //understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;
					?>

				<?php endwhile; // end of the loop. ?>
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

<?php get_footer(); ?>
<script type="text/javascript">
$(".swb").hide();
  $(function() {
    
  $(".swx").click(function() {
    $(".swb").show();
     $(".sww").hide();
    
  });
});
</script>


