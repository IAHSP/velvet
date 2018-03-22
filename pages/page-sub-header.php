<?php
/*
    Template Name: Full Page with Sub Header
*/

/* ================================================================================
    WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();

get_header(); ?>

<div id="wrapper" class="bg-color-white">
	<!-- Page Title -->
    <header id="page-title">
        <div class="container">
            <h1><strong><?php echo get_the_title(); ?></strong></h1>
        </div>
    </header>
    
	<!-- Body -->
	<section class="bg-color-white">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo apply_filters( "the_content", $objThePost->post_content ); ?>
				</div><!-- /col -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /bg-color-white -->
</div><!-- /#wrapper -->

<?php get_footer();

