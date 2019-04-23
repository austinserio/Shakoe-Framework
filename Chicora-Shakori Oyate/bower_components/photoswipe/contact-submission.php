var pswpElement = document.querySelectorAll('.pswp')[0];

// build items array
var availApp = [
    {
        src: 'assets/AVAIL/Discovery-Home.jpg',
        w: 750,
        h: 1334
    },
    {
        src: 'assets/AVAIL/Nearby-Home.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Navigation.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Discovery.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Nearby.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Overview.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Review.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Profile.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Review.jpg',
        w: 750,
        h: 1334
    }
	
];

// build items array
var availWeb = [
    {
        src: 'assets/AVAIL/web/Home.jpg',
        w: 750,
        h: 750
    },
    {
        src: 'assets/AVAIL/web/Search.jpg',
        w: 850,
        h: 750
    },
	{
        src: 'assets/AVAIL/web/Search-Review.jpg',
        w: 850,
        h: 750
    },
	{
        src: 'assets/AVAIL/web/Establishment.jpg',
        w: 1000,
        h: 800
    },
	{
        src: 'assets/AVAIL/web/Personal-Profile.jpg',
        w: 1000,
        h: 750
    },
	{
        src: 'assets/AVAIL/web/Login.jpg',
        w: 1300,
        h: 700
    },
	{
        src: 'assets/AVAIL/web/Register.jpg',
        w: 1300,
        h: 700
    }
	
];

// build items array
var loudApp = [
    {
        src: 'assets/AVAIL/Discovery-Home.jpg',
        w: 750,
        h: 1334
    },
    {
        src: 'assets/AVAIL/Nearby-Home.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Navigation.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Discovery.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Nearby.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Overview.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Review.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Profile.jpg',
        w: 750,
        h: 1334
    },
	{
        src: 'assets/AVAIL/Review.jpg',
        w: 750,
        h: 1334
    }
	
];
// define options (if needed)
var options = {
    // optionName: 'option value'
    // for example:
    index: 0 // start at first slide
};

// Initializes and opens PhotoSwipe

var tiles = document.getElementsByClassName("tile")


$(this).click(function() {
	if ($( this ).hasClass( "tile" )) {
		$(this).click(function() {
				var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, availApp, options);
				gallery.init();
		});
	}
});


$("#avail-app").click(function() {
	var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, availApp, options);
	gallery.init();
});

$("#avail-web").click(function() {
	var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, availWeb, options);
	gallery.init();
});

$("#loud-app").click(function() {
	var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, loudApp, options);
	gallery.init();
});