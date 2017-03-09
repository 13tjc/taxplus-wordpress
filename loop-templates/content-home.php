<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<?php 
  $args = array( 'post_type' => 'slide', 'posts_per_page' => 10, 'orderby' => 'menu_order', 'order'   => 'ASC', );
  $the_query = new WP_Query( $args );
?>
<div class="" id="full-width-page-wrapper">
  <div class="section-header" style="position: relative;">
    <ul class="bxslider" style="">
      <?php if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

     <a href="/7-point-pledge/">
          <div class="bx-slide-items">
         
            <li style="">

             
                <?php if(get_post_meta(get_the_ID(), 'slide_text_side', TRUE) == "right"): ?>

                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" style=""/>
                  <div class="slider-overlay slider-right">
                    <div class=""><?php the_content(); ?></div>
                    <div class="plus-quote">
                      <div class="plus-img">
                      <img src="/wp-content/uploads/2017/01/plus.jpg">
                      </div>
                      <?php echo get_post_meta(get_the_ID(), 'quote_name', TRUE); ?>
                    </div>
                  </div>

                <?php elseif(get_post_meta(get_the_ID(), 'slide_text_side', TRUE) == "left"): ?>

                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" style="float: right"/>
                  <div class="slider-overlay slider-left">
                    <div class=""><?php the_content(); ?></div>
                    <div class="plus-quote">
                    <div class="plus-img">
                      <img src="/wp-content/uploads/2017/01/plus.jpg">
                    </div>
                      <?php echo get_post_meta(get_the_ID(), 'quote_name', TRUE); ?>
                      
                    </div>
                  </div>

                <?php endif ?>
             

            </li>
        

        </div>  
    </a>
        <?php endwhile ?>  
      <?php endif ?>
    </ul>
    <div class="red-bar">
      <div class="container">
        <div class="row">
          <div class="col-xs-12"><h2 class="">The proven expertise you expect from a tax partner.</h2></div>
          <a href="/services/#top">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="service-icon"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/TAX-PLANNING.png" /></div>
              <div class="service-text">Tax Planning & Prep</div>
            </div>
          </a>
          <a href="/services/#tpp">
            <div class="col-xs-12 col-sm-4 col-md-2">       
              <div class="service-icon"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/RESOLUTION.png" /></div>
              <div class="service-text">Tax Resolution</div>
            </div>
          </a>
          <a href="/services/#fc">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="service-icon"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/FINANCIAL-CONSULTING.png" /></div>
              <div class="service-text">Financial Consulting</div>
            </div>
          </a>
          <a href="/services/#bk">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="service-icon"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/BOOKKEEPING.png" /></div>
              <div class="service-text">Book Keeping</div>
            </div>
          </a>
          <a href="/services/#bf">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="service-icon"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/ENTITY.png" /></div>
              <div class="service-text">Business Formation</div>
            </div>
          </a>
          <a href="/services/#nt">
            <div class="col-xs-12 col-sm-4 col-md-2">
              <div class="service-icon"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/NOTARY.png" /></div>
              <div class="service-text">Notary</div>
            </div>
          </a>        
        </div>
      </div>
    </div>
  </div><!-- .end header -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <main class="site-main piece-of-mind" id="main" role="main">
          <?php
              $arggs = array(
                  'post_type' => 'page',
                  'pagename' => 'home',                  
              );
              $t_query = new WP_Query( $arggs );
          ?>
     
          <?php if ( $t_query->have_posts() ) : while ( $t_query->have_posts() ) : $t_query->the_post();   ?>     

            <h2><?php the_field('intro_headline'); ?></h2>
            <div><?php the_field('homepage_paragraph'); ?></div>

          <?php endwhile; 
              endif;
              wp_reset_postdata(); 
          ?>
        </main>
      </div>
    </div>   
  </div>
  <div class="pledge-area">
    <a href="/7-point-pledge/">
      <img src="<?php echo get_site_url() ?>/wp-content/uploads/2016/12/7pointstar.png" class="starburst" />
    </a>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="pledge-text">
            <div class="col-xs-12"><h2 style="margin-bottom: 30px;">Our pledge to you.</h2></div>
            <div class="col-xs-12 col-sm-3">
              <div class="pledge-unit">
                <div class="numberCircle">1</div>
                <div class="pledge-point">Professional staff with extensive tax expertise.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3">
              <div class="pledge-unit">
                <div class="numberCircle">2</div>
                <div class="pledge-point">Highly individualized tax planning and preparation.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3">
              <div class="pledge-unit">
                <div class="numberCircle">3</div>
                <div class="pledge-point">Fast electronic filing and refund deposits.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-3">
              <div class="pledge-unit">
                <div class="numberCircle">4</div>
                <div class="pledge-point">Quick response to any IRS inquiry.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="pledge-unit">
                <div class="numberCircle">5</div>
                <div class="pledge-point">Personal audit representation.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="pledge-unit">
                <div class="numberCircle">6</div>
                <div class="pledge-point">Confidentiality and security.</div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="pledge-unit">
                <div class="numberCircle">7</div>
                <div class="pledge-point">Year-round personal service and planning.</div>
              </div>
            </div>
            <div class="col-xs-12">
              <a href="/7-point-pledge">
                <div class="btn learn-btn">
                  Learn more
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-area" id="contus">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <?php
              $arggs = array(
                  'post_type' => 'page',
                  'pagename' => 'home',                  
              );
              $t_query = new WP_Query( $arggs );
          ?>
          <?php if ( $t_query->have_posts() ) : while ( $t_query->have_posts() ) : $t_query->the_post();   ?>     

            <h2 class="red-text" ><?php the_field('contact_headline'); ?></h2>
            <div><?php the_field('contact_paragraph'); ?></div>

          
        </div>
      </div>
      <div class="row" style="margin-top:70px;">
        <div class="col-xs-12 col-sm-3">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.693285967385!2d-118.44298498541788!3d34.000411127908485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2baf573f229bf%3A0x520660611b4fc5b7!2s12803+Venice+Blvd%2C+Los+Angeles%2C+CA+90066!5e0!3m2!1sen!2sus!4v1482350443206" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-xs-12 col-sm-6">
          <?php echo do_shortcode( '[pirate_forms]' ) ?>
        </div>
        <div class="col-xs-12 col-sm-3" style="text-align:left;text-transform: none">
          <h3 style="text-transform: none">TaxPlus</h3>
          <p>
            <?php the_field('address'); ?></br>
            <?php the_field('city'); ?>
          </p>
          <p>
            P: <?php the_field('phone_number'); ?></br>
            F: <?php the_field('fax'); ?></br>
            E: <?php the_field('email'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
<?php endwhile;  endif;
              wp_reset_postdata(); 
          ?>
  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->
</div><!-- Wrapper end -->

<script>
  var $ = jQuery.noConflict();
  $(document).ready(function(){
    $('.bxslider').bxSlider({
      adaptiveHeight: false,
      controls: false,
      auto: true,
      pause: 12000,
      speed:1000
    });
  });
</script>
<style>
  .bx-wrapper .bx-viewport{
    left:0px;
    border:none;
    box-shadow: none;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    background: url(<?php echo get_site_url() ?>/wp-content/uploads/2017/01/homepage_bkg_01.jpg) no-repeat center center; */
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  .bx-wrapper {
    max-height: 700px;
    display: block;
    overflow: hidden;
    margin: 0 auto;
   }
</style>
