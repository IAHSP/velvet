<?php
/*
    Template Name: Full Page with Auto Formatting
*/

get_header(); ?>

<div id="wrapper" class="bg-color-white" style="margin-top: 40px">
	<!-- Header -->
	
	<!-- Body -->
	<section class="bg-color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<style>
						header.entry-header { display: none; }
					</style>
					<?php while ( have_posts() ) : the_post();
						echo wpautop(get_the_content(), true);
					endwhile; ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /bg-color-white -->
</div><!-- /#wrapper -->

<?php get_footer();
