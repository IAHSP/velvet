<?php
/*
    Template Name: Full Page
*/

get_header(); ?>

<div id="wrapper" class="bg-color-white" style="margin-top: 40px">
	<!-- Body -->
	<section class="bg-color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<style>
						header.entry-header { display: none; }
					</style>
					<?php while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile; ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /bg-color-white -->
</div><!-- /#wrapper -->

<?php get_footer();
