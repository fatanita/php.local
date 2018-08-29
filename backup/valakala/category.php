<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>

<style type="text/css">
	.main-pageinner{
		background-color: #f2f2f2 !important;
		direction: rtl;
		padding-bottom: 27px;
	}
	.main-pageinner .container{
		background-color: #fff;
		padding: 20px 42px;
		line-height: 2;
	}
	.breadcrumb {
	    margin-bottom: 4px !important;
	    background-color: unset !important;
	}
	.main-pageinner .breadcrumb .container{
		padding: 10px 42px !important;
	    box-shadow: 0 0 5px rgba(85, 85, 85, 0.14);
	    border-radius: 5px;		
	}	
	ul#crumbs li i{
		padding: 0 12px !important;
	}
	.breadcrumb ul#crumbs{
		margin-bottom: 3px !important;
	}

	.main-pageinner .breadcrumb .container::before {
	    content: "\f260";
	    float: right;
	    display: inline-block;
	    font: normal normal normal 18px/1.2 FontAwesome;
	    font-size: 18px;
	    line-height: 1.2;
	    font-size: inherit;
	    text-rendering: auto;
	    -webkit-font-smoothing: antialiased;
	    -moz-osx-font-smoothing: grayscale;
	    padding-left: 10px;
	    font-size: 18px;
	    line-height: 1.2;
	    padding-top: 5px;
	}
	.main-pageinner .breadcrumb .container li a {
    	color: #777;
	}
	.main-pageinner .breadcrumb .container li a:hover {
	    color: #7fcc3c;
	}
	.site-main a{
		color: #000;
	}
</style>
<div class="main-pageinner">
	<div class="breadcrumb">
		<div class="container"><?php the_breadcrumb(); ?></div>
	</div>	
	<div class="container">
		<div id="center_column" class="center_column col-xs-12 col-lg-12">
			<div class="block row">
			 	<div class="block_content proz">
			 		<div class="rte">
						<main id="main" class="site-main" role="main">
							<h3 class="page-heading"><?php echo __('News archive','walakala');?></h3>			
							<?php
								$my_query = new WP_Query('showposts=20&cat=15');
								while ($my_query->have_posts()):
								$my_query->the_post();
								$do_not_duplicate = $post->ID;?>
								<a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time('d M Y'); ?><?php //the_post_thumbnail(); ?></br>
							<?php endwhile; ?>
						</main><!-- .site-main -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>


