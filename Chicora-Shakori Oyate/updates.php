<?php /*
Template Name: Chicoran Updates
Theme Name: CHICORA
Author: Austin Serio
Author URI: http://austinserio.com/
Description: A theme created for the Shakori people of Chicora.
Version: 1.0
Tags: south carolina, sc, shakori, chicora, paul quattalbaum, winyah bay, conway, sc, native, southeastern, missippian
Text Domain: CHICORA

*/

?>

 <?php get_header(); ?>

 <!-- Get Category -->
<?php query_posts('category_name=updates&showposts=1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--featured article-->
<?php
	$usr_post = get_field('featured_post_url'); 
	$feat_post = url_to_postid($usr_post);
	$new_post = get_post($feat_post);
	$url = wp_get_attachment_url( get_post_thumbnail_id($feat_post), 'thumbnail' ); 

	$postcat = get_the_category( $feat_post );
	$category = $postcat[0]->name;
?>

<meta property="og:description" content="<?php $postcat[0]->description ?>" />
<meta property="og:image" content="<?php bloginfo(template_url) ?>/assets/img/branding.png" />

<div class="col-xs-12 hero parallax-window" id="post-hero" data-parallax="scroll" data-bleed="" data-image-src="<?php echo $url ?>">
		<div id="post-hero-content" class="col-xs-12 vertical-align">

		<!-- Story Header -->
		<div id="title-container wow fadeIn">
				<div class="col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2 wow fadeIn" id="nav-header">
				<div class="nav-line vertical-align wow fadeIn" data-wow-delay="3s" style="float: left; left: 0; position: absolute; margin-left: -6%;"></div>
				<div class="nav-line vertical-align wow fadeIn" data-wow-delay="3s" style="float: right;"></div>	  	
				</div>
		  <div id="nav-title" class="wow fadeIn" data-wow-delay="3s">
				<p>featured update</p>
		  </div>
		</div>
		<h1 class="wow fadeInUp" data-wow-delay="3s"><?php echo $new_post->post_title; ?></h1>
		<h3 id="subtitle" class="wow fadeIn" data-wow-delay="3.5s" style="margin: 2vh 0px 4vh; text-transform: capitalize;"><?php echo get_field('subtitle', $feat_post)?></h3>
		<div class="col-xs-12">
			<a href="<?php echo post_permalink($feat_post) ?>"><span class="btn-minimal animated fadeIn" style="color: #fff; font-size: 15px; letter-spacing: 2.25px; display: table; margin: 0 auto;"><span class="animated fadeIn" data-wow-delay="3s" id="language">VIEW</span></span></a>
		</div>

	</div>
	<div class="buffer"></div>
</div>


<?php endwhile; endif; ?>
 
<?php wp_reset_query(); ?>



<!-- Get Category -->
<?php query_posts(array('category_name' => $category)); ?>

<!-- Category Bar -->
<div class="col-xs-12 category">
		<div class="col-md-6 col-sm-12">
			<h1 class="vertical-align"><?php 
	if ( ! empty( $postcat ) ) {
	    echo esc_html( $postcat[0]->name );   
	} ?></h1>
		</div>
		<div class="col-md-6 col-sm-12">
			<h3> <?php $postcat[0]->name = $category;

	// try print_r($postcat) ;  

	if ( ! empty( $postcat ) ) {
	    echo esc_html( $postcat[0]->description );   
	} ?></h3>
		</div>
</div>

 <!--Content Section -->
<div class="col-xs-12 content-container">
	<div id="post-subheader" class="section-subheader"><span class="horizontal-center">recent activity</span></div>
	<h2 class="post-title" style="text-transform: lowercase;"><?php echo esc_html( $postcat[0]->name ); ?></h2>
	<div id="category-body" class="col-md-10 col-sm-12 col-sm-offset-0 content-body wow fadeInUp">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $post_bg_url = wp_get_attachment_url( get_post_thumbnail_id($post), 'thumbnail' ); ?>
			<a href="<?php the_permalink(); ?>">
				<div class="col-xs-12 col-md-offset-1 post-listing wow zoomIn" style="background: url(<?php echo $post_bg_url ?>) no-repeat;">
		   			<h1 class="vertical-align listing-header" style="padding: 0 15px;"><?php the_title(); ?></h1>
				</div>
			</a>
		<?php endwhile; endif; ?>

	</div>
</div>



<?php get_footer(); ?>