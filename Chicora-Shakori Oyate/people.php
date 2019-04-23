<?php /*
Template Name: Chicoran Governing Body & Administration
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

 <!-- Get Category Information -->
<?php query_posts('category_name=governance&showposts=1'); ?>
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

<?php endwhile; endif; ?>
 
<?php wp_reset_query(); ?>

<div class="videoParent">
<div id="people-hero" class="col-xs-12">
	<div id="people-hero-content" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 vertical-align">
		<div id="people-hero-top">
			<p class="italic-subheader col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1" style="padding: 0">community engaged</p>
			<p><span>GOVERNING BODY & ADMINISTRATION</span></p>
		</div>
		<div id="people-hero-bottom">
			<div class="col-md-6 col-xs-12">
				<a href="#papers"><span class="btn-minimal span-center">PAPERWORK</span></a>
			</div>
			<div class="col-md-4 col-md-offset-2 col-xs-12"><p id="hero-caption">passionate about our heritage and our future.</p></div>
		</div>
	</div>

	<div class="video-background">
    <div class="video-foreground">
      <iframe src="https://www.youtube.com/embed/q5HgE9w9aC4?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1;start=054&end=0640&playlist=q5HgE9w9aC4" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>


<!-- Queries Selected Category -->
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
	<h2 class="people-title">COUNCIL OF ELDERS.</h2>
	<div id="category-body" class="col-lg-10 col-lg-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 wow fadeInUp" style="padding-bottom: 25px;">

		<?php $delay_count = 0; ?>

		<?php

			// check if the repeater field has rows of data
			if( have_rows('tribal_elders') ):

			 	// loop through the rows of data
			    while ( have_rows('tribal_elders') ) : the_row(); ?>


			<!-- The Elders --> 
				<div class="col-md-3 col-md-offset-1 col-xs-10 col-xs-offset-1 event-listing wow zoomIn" data-wow-delay="<?php echo $delay_count ?>s">
						<div class="col-xs-12 col-xs-offset-0 elder-img-container">
							<div class="profile-img horizontal-center vertical-align" style="background-image: url(<?php echo the_sub_field('elder_profile_picture'); ?>);">
							</div>
					</div>
					<div class="col-xs-12" style="padding: 0; margin-top: -4.5vh;">
						<div class="col-xs-12">
		   					<h3 class="event-header"><?php the_sub_field('elder_name'); ?></h3>
		   				</div>
		   				<div class="col-xs-12 event-divider">
		   					<p> </p>
		   				</div>
		   				<div class="col-xs-10 col-xs-offset-1"><p class="event-text"><?php echo $content = the_sub_field('elder_bio'); ?></p></div>
						</div>


				</div>


<?php endwhile;

			else :

			    // no rows found

			endif;

		?>




	</div>
</div>

<!-- Donations & Paperwork | Placeholder -->
<div id="papers" class="col-xs-12 resources-container">
	<div class="col-xs-12 resources" id="paperwork">			
		<div class="event-btn-container vertical-align">
				<a href="<?php bloginfo(template_url) ?>/assets/forms/enrollment.pdf"><span class="resource-btn span-center">APPLY</span></a>
		</div>
	</div>
</div>


<!-- Donations & Paperwork | When Donate is Ready
<div class="col-xs-12 resources-container">
	<div class="col-sm-6 col-xs-12 resources" id="paperwork">			
		<div class="event-btn-container vertical-align">
				<a href="#"><span class="resource-btn span-center">APPLY</span></a>
		</div>
	</div>

	<div class="col-sm-6 col-xs-12 resources" id="donations">
			<div class="event-btn-container vertical-align">
				<a href="#"><span class="resource-btn span-center">DONATE</span></a>
			</div>
	</div>
</div>

-->

 <!--Content Section -->
<div class="col-xs-12 content-container">
	<h2 class="people-title">TRIBAL COUNCIL.</h2>
	<div id="category-body" class="col-lg-10 col-lg-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 wow fadeInUp" style="padding-bottom: 25px;">

		<?php $delay_count = 0; ?>

		<?php

			// check if the repeater field has rows of data
			if( have_rows('tribal_council') ):

			 	// loop through the rows of data
			    while ( have_rows('tribal_council') ) : the_row(); ?>


			<!-- The Elders --> 
				<div class="col-md-3 col-md-offset-1 col-xs-10 col-xs-offset-1 event-listing wow zoomIn" data-wow-delay="<?php echo $delay_count ?>s">
						<div class="col-xs-12 col-xs-offset-0 elder-img-container">
							<div class="profile-img horizontal-center vertical-align" style="background-image: url(<?php echo the_sub_field('elder_profile_picture'); ?>);">
							</div>
					</div>
					<div class="col-xs-12" style="padding: 0; margin-top: -4.5vh;">
						<div class="col-xs-12">
		   					<h3 class="event-header"><?php the_sub_field('elder_name'); ?></h3>
		   				</div>
		   				<div class="col-xs-12 event-divider">
		   					<p> </p>
		   				</div>
		   				<div class="col-xs-10 col-xs-offset-1"><p class="event-text"><?php the_sub_field('elder_desc'); ?></p></div>
						</div>


				</div>


<?php endwhile;

			else :

			    // no rows found

			endif;

		?>




	</div>
</div>


<?php get_footer(); ?>