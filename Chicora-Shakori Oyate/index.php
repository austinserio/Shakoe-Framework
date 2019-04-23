<?php /*
Template Name: Chicoran Home
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


<meta property="og:description" content="" />
<meta property="og:image" content="<?php bloginfo(template_url) ?>/assets/img/branding.png" />

<div class="videoParent">
<div id="home-hero" class="col-xs-12">
	<div id="home-hero-content" class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 vertical-align">
		<div id="home-hero-top">
			<p class="italic-subheader col-sm-12 col-sm-offset-0 col-xs-10 col-xs-offset-1">Conway, South Carolina</p>
			<p><span>Chicoran Shakori Oyate</span></p>
		</div>
		<div id="home-hero-bottom">
			<div class="col-md-6 col-xs-12">
				<a href="#footer"><span class="btn-minimal span-center">INFORMATION</span></a>
			</div>
			<div class="col-md-4 col-md-offset-2 col-xs-12"><p id="hero-caption">We are the Chicoran Shakori Oyate people of South Carolina and we stand strong.</p></div>
		</div>
	</div>

	<div class="video-background">
    <div class="video-foreground">
      <iframe src="https://www.youtube.com/embed/MsTBkoJu1S0?controls=0&showinfo=0&rel=0&autoplay=1&loop=1&mute=1;start=03&end=500&playlist=MsTBkoJu1S0" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>


<!-- Get Category -->
<?php query_posts('category_name=events&showposts=1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!--Content Section || Desktop Event Info-->
<div class="col-md-5 col-xs-12 visible-md visible-lg event" style="padding: 0;">
	<div class="event-thumbnail" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php the_post_thumbnail_url(); ?>)">
		
		<div class="event-info-container vertical-align">
			<p class="date"><?php echo get_field('date'); ?></p>
			<p class="time"><?php echo get_field('time'); ?> - <?php echo get_field('end_time'); ?></p>
			<div class="event-btn-container">
				<a href="<?php the_permalink() ?>"><span class="btn-minimal span-center" style="padding-top: 15px;">VIEW EVENT</span></a>
			</div>
		</div>

	</div>
</div>

<div class="col-md-7 col-xs-12 home-event">
	<div class="col-xs-12">
		<div class="section-subheader"><span id="event-home-header" class="horizontal-center">event</span></div>
		<h2 class="wow fadeInUp" data-wow-duration="1.5s"><?php the_title(); ?></h2>
		<div class="col-sm-10 col-sm-offset-1 content-body wow fadeIn" data-wow-duration="2.5s">
			<p><?php $content = get_the_content(); echo mb_strimwidth($content, 0, 375, '...'); ?></p>
		</div>
	</div>
</div>

<!--Content Section || Mobile Event Info-->
<div class="col-md-5 col-xs-12 visible-sm visible-xs event" style="padding: 0;">
	<div class="event-thumbnail" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php the_post_thumbnail_url(); ?>)">
		
		<div class="event-info-container vertical-align">
			<p class="date wow fadeInUp" data-wow-duration="0.5s"><?php echo get_field('date'); ?></p>
			<p class="time wow fadeInUp" data-wow-duration="1.5s"><?php echo get_field('time'); ?> - <?php echo get_field('end_time'); ?></p>
			<div class="event-btn-container wow fadeIn" data-wow-duration="1s">
				<a href="<?php the_permalink() ?>"><span class="btn-minimal span-center" style="padding-top: 15px;">VIEW EVENT</span></a>
			</div>
		</div>

	</div>
</div>

<?php endwhile; endif; ?>
 
<?php wp_reset_query(); ?>

<script>
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 		$("#home-hero").addClass(" home-hero-fallback")
	}
</script>

<?php get_footer(); ?>