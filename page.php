<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Velvet
 */

get_header(); ?>

<style>
  header.entry-header { display: none; }
  
  h2 { margin: 40px 0 40px 0; }
  h3 { margin: 40px 0 20px 0; }
</style>

<div id="wrapper" class="bg-color-white" style="margin-top: 40px">
	<!-- Header -->
	
	<!-- Body -->
	<section class="bg-color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
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
            <?php
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;

              endwhile; // End of the loop.
            ?>
          </div>
				</div><!-- /col -->
        
        <div class="col-md-3">
          <?php get_sidebar(); ?>
        </div><!-- /.col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /bg-color-white -->
</div><!-- /#wrapper -->







<style>
  header.entry-header { display: none; }
</style>

<!-- Body -->
<section class="bg-color-white">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        
      </div><!-- /col -->
      
      
    </div><!-- /row -->
  </div><!-- /container -->
</section><!-- /bg-color-white -->
</div><!-- /#wrapper -->

<?php get_footer();
