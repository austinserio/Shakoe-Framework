<?php get_header(); ?>

<style type="text/css">
	.content-container {
		margin-bottom: 150px;
	}
</style>

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


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
<!--post body-->
<div class="col-xs-12 hero parallax-window" id="post-hero" data-parallax="scroll" data-bleed="25" data-image-src="<?php echo $url ?>">
		<div id="post-hero-content" class="col-xs-12 vertical-align">

		<!-- Story Header -->
		<div id="title-container">
				<div class="col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2 wow fadeIn" data-wow-delay="2s" id="nav-header">
				<div class="nav-line vertical-align wow fadeIn" data-wow-delay="2s" style="float: left; left: 0; position: absolute; margin-left: -6%;"></div>
				<div class="nav-line vertical-align wow fadeIn" data-wow-delay="2s" style="float: right;"></div>	  	
				</div>
		  <div id="nav-title">
				<p class="wow fadeIn" data-wow-delay="2s">event</p>
		  </div>
		</div>
		<h1 class="wow fadeInUp" data-wow-delay="1.5s"><?php the_title(); ?></h1>
		<h3 id="subtitle" class="wow fadeIn" data-wow-delay="2s" style="margin: 2vh 0px 4vh; text-transform: capitalize;"><?php echo get_field('subtitle')?></h3>
	</div>
</div>

<!-- Category Bar -->
<div class="col-xs-12 category">
		<div class="col-md-6 col-sm-12">
			<h1 class="vertical-align"><?php global $post;
	$postcat = get_the_category( $post->ID );

	// try print_r($postcat) ;  

	if ($postcat[0]->name == "Events"){
		echo esc_html( "When?" );
	}

	else if ( ! empty( $postcat ) ) {
	    echo esc_html( $postcat[0]->name );   
	} 


	?></h1>
		</div>
		<div class="col-md-6 col-sm-12">
			<h3> <?php global $post;
	$postcat = get_the_category( $post->ID );

	// try print_r($postcat) ;  
	if ($postcat[0]->name == "Events"){
		echo ( "<p class=\"date date-single\">" );
		echo get_field('date');
		echo ( "</p>" );
		echo ( "<p class=\"time time-single\">" );
		echo get_field('time');
		echo (" - ");
		echo get_field('end_time');
		echo ( "</p>" );
	}
	else if ( ! empty( $postcat ) ) {
	    echo esc_html( $postcat[0]->description );   
	} ?></h3>
		</div>
</div>

<div class="content-container col-xs-12">
	 <!--Content Section -->
	<div class="col-xs-12">
		<div id="post-subheader" class="section-subheader"><span class="horizontal-center">event details</span></div>
		<div id="single-title-container" class="col-xs-10 col-xs-offset-1">
			<h2 class="post-title"><?php the_title(); ?></h2>
		</div>
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 content-body">
			<div class="english-post">
					 <?php the_content(); ?>
			</div>
			<div class="spanish-post">
				 	<?php echo get_field('spanish_content'); ?>
			</div>
		</div>
		</div>

	<?php
		$images = get_field('gallery');
		$imgCount = count($images);
		if ($imgCount == 0) {
			echo "<script>console.log(".$imgCount.")</script>";
		}
	?>

	<?php 
		$images = get_field('gallery');
		if ( $images ): ?>
		
	 <!--Content Section -->
	<div class="col-xs-12">
		<div class="section-subheader"><span class="horizontal-center" style="padding-top: 50px;">photos</span></div>
		<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 content-body">

				 <!-- Photo Gallery Loop -->
				 <?php 


				if( $images ): ?>
				        <?php foreach( $images as $image ): ?>
				            <div class="col-sm-6 col-xs-12 gallery-photo">
				                <div style="background: url(<?php echo $image['url']; ?>)" />
				                </div>
				           </div>
				        <?php endforeach; ?>
				<?php endif; ?>
		</div>
	</div>
			<?php endif; ?>	

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
	<!-- Photo Gallery Loop -->
				 <?php 

				$images = get_field('gallery');

				if( $images ): ?>
				        <?php foreach( $images as $image ): ?>

				            {
						        src: '<?php echo $image['url']; ?>',
						        w: '<?php echo $image['width']; ?>',
						        h: '<?php echo $image['height']; ?>',
						        title: '<?php $id = $image['ID']; $post_caption = get_post($id)->post_excerpt; $trimmed_cap = trim($post_caption); echo (string)$trimmed_cap ?>'
						    },
				        <?php endforeach; ?>
				<?php endif; ?>	
	];

	//serves up clicked picture
	var picIndex;



	// define options (if needed)
	var options = {
	    // optionName: 'option value'
	    // for example:
	    index: picIndex // start at first slide
	};

	// Initializes and opens PhotoSwipe

	var tiles = document.getElementsByClassName("gallery-photo")

	$(".gallery-photo").click(function() {
		for (var i = 0; i < tiles.length; i++) {
				var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, galleryElements, options);

						gallery.init();	
		}


		picIndex = $(this).index();
		console.log(picIndex);
		gallery.goTo(parseInt(picIndex))

	});
})

</script>

<!-- remove wordpress automated stylings -->
<script>
	$(document).ready(function(){
		$('.size-full').css('height', 'auto');
	});
</script>



<!--end post -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>