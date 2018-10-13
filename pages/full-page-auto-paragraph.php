<?php
/*
    Template Name: Full Page with Auto Formatting
*/

get_header(); ?>

<style>
  header.entry-header { display: none; }
  
  h3 {
    margin: 1.5em 0 0 0;
  }
</style>

<div id="wrapper" class="bg-color-white" style="margin-top: 40px">
	<!-- Header -->
	
	<!-- Body -->
	<section class="bg-color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
          <!-- ====================================================
            Featured Image
          ==================================================== -->
          <div>
            <?php the_post_thumbnail("medium", array("class" => "center-block")); ?>
          </div>
          
          <!-- ====================================================
            Body Contents
          ==================================================== -->
          <div>
            <?php while ( have_posts() ) : the_post();
              echo wpautop(get_the_content(), true);
            endwhile; ?>
          </div>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /bg-color-white -->
</div><!-- /#wrapper -->

<?php get_footer();
