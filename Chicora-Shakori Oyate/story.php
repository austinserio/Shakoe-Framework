<?php /*
Template Name: Chicoran History
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
<style>
	a.hamburger {
		color: #000 !important;
	}
</style>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!--post body-->
<div class="col-xs-12 newspaper-hero" data-parallax="scroll" data-bleed="" data-image-src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($feat_post), 'thumbnail' ); ?>">
		<div id="post-hero-content" class="col-xs-12 vertical-align">

		<!-- Story Header -->
		<div id="title-container">
				<div class="col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2 wow fadeIn" data-wow-delay="2s" id="nav-header">
				<div class="nav-line nav-line-inv vertical-align wow fadeIn" data-wow-delay="4s" style="float: left; left: 0; position: absolute; margin-left: -6%;"></div>
				<div class="nav-line nav-line-inv vertical-align wow fadeIn" data-wow-delay="4s" style="float: right;"></div>	  	
				</div>
		  <div id="nav-title">
				<p class="wow fadeIn nav-title-inv" data-wow-delay="3s">our story</p>
		  </div>
		</div>
		<h1 class="wow fadeInUp" data-wow-delay="2.5s"><?php the_title(); ?></h1>
		<h3 id="subtitle" class="wow fadeIn" data-wow-delay="3s" style="margin: 2vh 0px 4vh; text-transform: lowercase;"><?php echo get_field('subtitle')?></h3>
		<div class="col-xs-12">
			<a href="#" id="map"><span class="btn-minimal animated fadeIn" style="color: #000; font-size: 15px; letter-spacing: 2.25px; display: table; margin: 0 auto; border: 3px solid black"><span class="animated fadeIn" data-wow-delay="2s" id="language">EXPLORE</span></span></a>
		</div>
	</div>
</div>

<div class="newspaper-container col-xs-12">

	<!--Newspaper Inv Section -->
	<div class="newspaper-inv col-xs-12">
		 <div class="col-sm-10 col-sm-offset-1 col-xs-12 newspaper-section-container">
			<div class="col-sm-6 newspaper-section-title">
				<p class="wow fadeInRight" data-wow-duration="1s">Who</p>
				<p class="wow fadeInRight" data-wow-duration="1.5s" data-wow-delay=".5s">Are The</p>
				<p class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">Shakori?</p>
			</div>
			<div class="col-sm-6 newspaper-content-inv">
				<p class="wow slideInUp" data-wow-duration="2s"><?php echo get_field('who_are_the_shakori')?></p>
			</div>
		</div>
	</div>


	<!--Newspaper Standard Section -->
	<div class="newspaper col-xs-12">
		 <div class="col-sm-10 col-sm-offset-1 col-xs-12 newspaper-section-container">
			<div class="col-sm-6 newspaper-section-title newspaper-section-title-inv visible-sm visible-xs">
				<p class="wow fadeInLeft" data-wow-duration="1s">Early</p>
				<p class="wow fadeInLeft" data-wow-duration="1.5s">History.</p>
			</div>

			<div class="col-sm-6 newspaper-content">
				<p class="wow slideInUp" data-wow-duration="2s"><?php echo get_field('early_history')?></p>
			</div>

			<!-- Mobile Title -->
			<div class="col-sm-6 newspaper-section-title newspaper-section-title-inv visible-md visible-lg" style="text-align: right;">
				<p class="wow fadeInLeft" data-wow-duration="1s">Early</p>
				<p class="wow fadeInLeft" data-wow-duration="1.5s">History.</p>
			</div>
		</div>
	</div>

	<!--Newspaper Inv Section -->
	<div class="newspaper-inv col-xs-12">
		 <div class="col-sm-10 col-sm-offset-1 col-xs-12 newspaper-section-container">
			<div class="col-sm-6 newspaper-section-title">
				<p class="wow fadeInRight" data-wow-duration="1s">The</p>
				<p class="wow fadeInRight" data-wow-duration="1.5s">Land</p>
				<p class="wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s">Called</p>
				<p class="wow fadeInRight" data-wow-duration="2.5s" data-wow-delay="1s">Chicora.</p>
			</div>
			<div class="col-sm-6 newspaper-content-inv">
				<p class="wow slideInUp" data-wow-duration="2s"><?php echo get_field('the_land_called_chicora')?></p>
			</div>
		</div>
	</div>

	<!--Newspaper Standard Section -->
	<div class="newspaper col-xs-12">
		 <div class="col-sm-10 col-sm-offset-1 col-xs-12 newspaper-section-container">
			<div class="col-sm-6 newspaper-section-title newspaper-section-title-inv visible-sm visible-xs">
				<p class="wow fadeInLeft" data-wow-duration="1s">Survival</p>
				<p class="wow fadeInLeft" data-wow-duration="1.5s">of the</p>
				<p class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s">Shakori.</p>
			</div>

			<div class="col-sm-6 newspaper-content">
				<p class="wow slideInUp" data-wow-duration="2s"><?php echo get_field('survival_of_the_shakori')?></p>
			</div>

			<!-- Mobile Title -->
			<div class="col-sm-6 newspaper-section-title newspaper-section-title-inv visible-md visible-lg" style="text-align: right;">
				<p class="wow fadeInLeft" data-wow-duration="1s">Survival</p>
				<p class="wow fadeInLeft" data-wow-duration="1.5s">of the</p>
				<p class="wow fadeInLeft" data-wow-duration="2s" data-wow-delay=".5s">Shakori.</p>
			</div>
		</div>
	</div>

</div>



<!-- remove wordpress automated stylings -->
<script>
	$(document).ready(function(){
		$('.size-full').css('height', 'auto');
	});
</script>



<!--end post -->
<?php endwhile; ?>
<?php endif; ?>

<!-- PhotoSwipe -->
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe. 
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

        <!-- Container that holds slides. 
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>

        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">

            <div class="pswp__top-bar">

                <!--  Controls are self-explanatory. Order can be changed. -->

                <div class="pswp__counter"></div>

                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                <button class="pswp__button pswp__button--share" title="Share"></button>

                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                      <div class="pswp__preloader__cut">
                        <div class="pswp__preloader__donut"></div>
                      </div>
                    </div>
                </div>
            </div>

            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div> 
            </div>

            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>

            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>

            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>

        </div>

    </div>

</div>

<script>
$(document).ready(function() {
	var pswpElement = document.querySelectorAll('.pswp')[0];
	var mobile = false;
	var width;
	var height;


	resize();

	$(document).ready(function() {
		resize();
	});

	$(window).resize(function() {
		resize();
	});

	function resize() {
			//check client screen width
		if (window.innerWidth < 768) {
			mobile = true;
			width = 262;
			height = 467;
		}
		
		else {
			mobile = false;
			width = 524;
			height = 934;
		}
	}

	// build items array
	var galleryElements = [

				            {
						        src: '<?php bloginfo(template_url) ?>/assets/img/chicoranmap.jpg',
						        w: '5614',
						        h: '3892',
						    },
	];

	//serves up clicked picture
	var picIndex = 0;



	// define options (if needed)
	var options = {
	    // optionName: 'option value'
	    // for example:
	    index: picIndex // start at first slide
	};

	// Initializes and opens PhotoSwipe
	$("#map").click(function() {
				var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, galleryElements, options);

				gallery.init();	


		picIndex = $(this).index();
		console.log(picIndex);
		gallery.goTo(parseInt(picIndex))

	});
})

</script>


<?php get_footer(); ?>