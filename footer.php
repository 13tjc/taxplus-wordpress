<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>



<style type="text/css">
/*.col-sm-6 {
    float: left; 
   width: 50%;
}*/
	
</style>





<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon" role="contentinfo">

					<div class="site-info">
						<div class="row-sm">
							<div class="inside">

								<div class="main_con">
									<div class="foot-center">


										<div class="xxfootimg">
											<div class="sm-icon">
												<a href="https://www.yelp.com/biz/tax-plus-los-angeles">
												<img src="/wp-content/uploads/2017/01/yelp.png"></a>
												
											</div>
											<div class="sm-icon">
												<a href="https://www.linkedin.com/company-beta/9519780">
												<img src="/wp-content/uploads/2017/01/linkedin.png"></a>
											</div>
											<div class="sm-icon">
												<a href="https://www.facebook.com/TaxPlusLosAngeles/?fref=ts&ref=br_tf">
												<img src="/wp-content/uploads/2017/01/facebook.png"></a>
											</div>
											<div class="sm-icon">
												<a href="https://plus.google.com/+TaxplusLosAngeles">
												<img src="/wp-content/uploads/2017/01/googleplus.png"></a>
											</div>
											<div class="top-foot" style="padding-top: 25px;"><a href="#contus">Contact</a></div>
											<div>310-398-3231</div>
											<div><a href="mailto:info@taxplus.com?subject=Contact">info@taxplus.com</a></div>
										</div>
										<div class="foot-c">
											<div class="top-foot"><a href="/staff/">About Us</a></div>
											<div><a href="/services/">Services</a></div>
											<div><a href="/7-point-pledge/">7 Point Pledge</a></div>
											<div><a href="/staff/">Staff</a></div>
										</div>
										<div class="foot-c">
											<div class="top-foot"><a href="/Resources/">Resources</a></div>
											<div><a href="/Resources/#to">Tax Organizers</a></div>
											<div><a href="/Resources/#ncf">New Client Forms</a></div>
											<div><a href="/Resources/#cif">Client Inerview Form</a></div>
											<div><a href="/Resources/#oft">Online Refund Tracker</a></div>
										</div>
										<div class="foot-c">
											<div class="top-foot"><a href="/testimonials/">Testimonials</a></div>
											<div class="top-foot"><a href="/news/">News</a></div>
										</div>

									</div>
								</div>




								<div class="col-xs-12 " >
									<div class="xxfoot" >
									<center>
										<a href="">Privacy Policy</a>| &#169; <?php echo date("Y"); ?> TaxPlus. All rights reserved.
									</center>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->


<script type="text/javascript">







$(document).ready(function(){


	// if($(window).trigger('resize').width() > 768) { 
		 
		$(window).on("scroll", function () {
		    if ($(this).scrollTop() > 100) {

		        $(".nav-bg-taxplus ").css("background", "white");
		        $(".scroll-logo").addClass("show-scroll-logo");
		         $(".scroll-logo").css("display", "inline", "width", "400px");
		        $("a.navbar-brand.custom-logo-link").hide();

		    } else {

		        $(".nav-bg-taxplus").css("background", "hsla(0, 0%, 100%, .78)");
		        $(".scroll-logo").removeClass("show-scroll-logo");
		        $("a.navbar-brand.custom-logo-link").show();
		        $(".scroll-logo").css("display", "none");
		        
		    }
		});

	// } else {
	// 		$(".scroll-logo").hide();
	// 		$("a.navbar-brand.custom-logo-link").hide();

	// }
if(window.location.hash) {
   $(".nav-bg-taxplus ").css("background", "white");
		        $(".scroll-logo").addClass("show-scroll-logo");
		         $(".scroll-logo").css("display", "inline", "width", "400px");
		        $("a.navbar-brand.custom-logo-link").hide();
} else {
  // Fragment doesn't exist
}



});
	
</script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
