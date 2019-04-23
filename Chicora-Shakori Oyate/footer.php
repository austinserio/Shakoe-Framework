<div id="footer" class="col-xs-12 social-footer">
    <div class="col-md-1"></div>
    <div class="col-md-3 hidden-sm hidden-xs share-head">
        <p>SOCIAL</p>
    </div>
    <div class="col-md-4 col-xs-12">
        <div class="col-xs-6 social-network">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php global $wp; echo home_url( $wp->request )?>"><p>facebook</p></a>
        </div>
        <div class="col-xs-6 social-network">
            <a href="https://twitter.com/share?url=<?php global $wp; echo home_url( $wp->request )?>"><p>twitter</p></a>
        </div>
    </div>
</div>

<div class="col-xs-12 footer-content">
    <div class="col-md-6 col-xs-12">
        <div class="googlemaps">
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=900&amp;hl=en&amp;q=390+State+Hwy+548,+Conway,+SC&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
        </div>
    </div>
    <div class="col-md-6 col-xs-12 about-footer">
        <div class="col-xs-12"><span id="about">contact</span></div>
        <div class="col-md-8 col-xs-11" id="about-caption">
            <p><i class="fas fa-user"></i><span class="symbol-div">|</span>Chief Vernon Thompkins</p>
            <p><i class="fas fa-map-marker-alt"></i><span class="symbol-div">|</span>390 Highway 548, Conway, South Carolina 29526</p>
            <p><i class="fas fa-envelope"></i><span class="symbol-div">|</span>vernon44thompkins@gmail.com</p>
            <p><i class="fas fa-phone"></i><span class="symbol-div">|</span>843-283-7554</p>
        </div>
        <div class="col-xs-12 more-footer"><a href="mailto:vernon44thompkins@gmail.com"><span>EMAIL</span></div>
    </div>
</div>
<div class="footer-nav col-xs-12">
    <div class="col-md-3 col-xs-4 footer-link vertical-align"><p><span></span><span>chicoran shakori oyate</span></p></div>
    <div class="col-xs-3 footer-link hidden-sm hidden-xs vertical-align"><a href="/events"><span>EVENTS</span></a></div>
    <div class="col-md-3 col-xs-4 footer-link vertical-align"><a href="/updates"><span>UPDATES</span></a></div>
    <div class="col-md-3 col-xs-4 footer-link vertical-align"><a href="/story"><span>STORY</span></a></div>
</div>

<script type="application/javascript" src="<?php bloginfo(template_url) ?>/bower_components/parallax/parallax.min.js"></script>
<script src="<?php bloginfo(template_url) ?>/bower_components/fatNav/dist/jquery.fatNav.js"></script>

<script>$.fatNav();</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('p:empty').remove();
});
</script>

<!-- Preloader -->
<script>
$(document).ready(function() {
//Preloader
$(window).on("load", function() {
preloaderFadeOutTime = 500;
function hidePreloader() {
var preloader = $('#loading');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
});

$(".wow").data("wow delay", 500);

$(document).ready(function() {
    $(".ytp-large-play-button").remove();
    $(".ytp-button").remove();
})
</script>

<!-- iOS Web App Support -->
<script>
    var a=document.getElementsByTagName("a");
	for(var i=0;i<a.length;i++)
	{
	    a[i].onclick=function()
	    {
	        window.location=this.getAttribute("href");
	        return false
	    }
	}
</script>




</body>
</html>