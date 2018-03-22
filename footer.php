<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Velvet
 */

?>

<style>
	.padding-footer {
		padding: 30px 0;
	}
	
	.margin-bottom-20 {
		margin-bottom: 20px;
	}
	
	#goldaddress {
		color: gold;
	}
</style>

<footer id="main-footer">
	<section class="padding-footer">
		<div class="container">
			<img src="https://d3oaxt0bwkjnjn.cloudfront.net/web/images/logo-iahsp-footer.png" class="center-block img-responsive margin-bottom-20" alt="International Association of Home Staging Professionals" />
			<p class="text-center">
				The International Association of Home Staging Professionals IAHSP<sup>&reg;</sup> is dedicated to advancing the education of the professional 
				Home Stager and Realtor<sup>&reg;</sup> as they prepare homes for sale. IAHSP<sup>&reg;</sup> members strive to serve the public to the best of their ability 
				built upon the principles, practices, and education of approved Home Staging courses and designations.
			</p>
			<address class="font-opensans">
				<ul class="list-inline text-center">
					<li>
						<i id="goldaddress" class="fa fa-map-marker fa-lg"></i><span>&nbsp;&nbsp;<font color="gray"> 11757 W Ken Caryl Ave., F402, Littleton, CO 80127</font></span>
					</li>
					<li>
						<i id="goldaddress" class="fa fa-phone fa-lg"></i><span>&nbsp;&nbsp;<font color="gray">+1 800-392-7161</font></span>
					</li>
					<li>
						<i id="goldaddress" class="fa fa-envelope-o fa-lg"></i>&nbsp;&nbsp;<span><a href="mailto:help@iahsp.com"><font color="gray">help@iahsp.com</font></a></span>
					</li>
				</ul>
			</address>

			<div class="text-center">
				<a href="https://www.facebook.com/InternationalAssociationofHomeStagingProfessionals/" target="_blank" class="social rounded fa fa-facebook" target="_blank"></a>
				<a href="https://plus.google.com/111999019043473881716" target="_blank" class="social rounded fa fa-google-plus"></a>
				<a href="https://iahspblog.com/" target="_blank" class="social rounded fa fa-wordpress"></a>
			</div>
		</div>
	</section>

	<!-- copyright , scrollTo Top -->
	<div class="footer-bar">
		<div class="container">
			<span class="copyright text-white">Copyright &copy; 2016 IAHSP&reg; . All Rights Reserved.</span>
			<a class="toTop text-white" href="#topNav">BACK TO TOP <i class="fa fa-arrow-circle-up"></i></a>
		</div>
	</div>
	<!-- copyright , scrollTo Top -->			
</footer>

<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/jquery.appear.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/jquery.isotope.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/masonry.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/stellar/jquery.stellar.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/knob/js/jquery.knob.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/styleswitcher/styleswitcher.js"></script>
<!-- <script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/mediaelement/build/mediaelement-and-player.min.js"></script> -->
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/slider.revolution.v4/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/plugins/slider.revolution.v4/js/jquery.themepunch.revolution.js"></script>
<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/js/slider_revolution.js"></script>

<script type="text/javascript" src="https://d3oaxt0bwkjnjn.cloudfront.net/web/template/HTML/assets/js/scripts.js"></script>

<!-- IAHSP -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>
</body>
</html>
