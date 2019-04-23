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
var neighborhood = [
    {
        src: 'assets/portfolio/neighborhood/home.jpg',
        w: 1742,
        h: 1014
    },
    {
        src: 'assets/portfolio/neighborhood/locations.jpg',
        w: 3360,
        h: 1978
    },
	{
        src: 'assets/portfolio/neighborhood/sponsors.jpg',
        w: 3360,
        h: 1976
    },
	{
        src: 'assets/portfolio/neighborhood/how-it-works.jpg',
        w: 3360,
        h: 1976
    }	
];

// build items array
var booklendr = [
	{
        src: 'assets/portfolio/booklendr/booklendr.jpg',
        w: 600,
        h: 600
    },
	{
        src: 'assets/portfolio/booklendr/login.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/booklendr/use.jpg',
        w: width,
        h: height
    },
    {
        src: 'assets/portfolio/booklendr/profile.jpg',
        w: width,
        h: height
    }
];

// build items array
var avail = [
    {
        src: 'assets/portfolio/avail/Splash.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/avail/Discovery-Home.jpg',
        w: width,
        h: height,
		//title: 'Lorem ipsum dolor sit ameit lorem ipsum <br> <small>AVAIL | Mobile App</small>'
    },
	{
        src: 'assets/portfolio/avail/Overview.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/avail/Nearby-Home.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/avail/Profile.jpg',
        w: width,
        h: height
    }
	
];

// build items array
var autobeats = [
    {
        src: 'assets/portfolio/autobeats/Autobeats.jpg',
        w: 2000,
        h: 1333,
		//title: 'Lorem ipsum dolor sit ameit lorem ipsum <br> <small>AVAIL | Mobile App</small>'
    },
    {
        src: 'assets/portfolio/autobeats/1.png',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/autobeats/2.png',
        w: width,
        h: height
    }
	
];

// build items array
var zolo = [
    {
        src: 'assets/portfolio/zolo/Home.jpg',
        w: width,
        h: height,
		//title: 'Lorem ipsum dolor sit ameit lorem ipsum <br> <small>AVAIL | Mobile App</small>'
    },
    {
        src: 'assets/portfolio/zolo/Search-1.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/zolo/Search-2.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/zolo/Result.jpg',
        w: width,
        h: height
    }
	
];

var bask = [
    {
        src: 'assets/portfolio/bask/1.jpg',
        w: 3360,
        h: 1952,
		//title: 'Lorem ipsum dolor sit ameit lorem ipsum <br> <small>AVAIL | Mobile App</small>'
    },
    {
        src: 'assets/portfolio/bask/2.jpg',
        w: 3840,
        h: 2278
    },
	{
        src: 'assets/portfolio/bask/4.jpg',
        w: 3360,
        h: 1952,
    },
	{
        src: 'assets/portfolio/bask/5.jpg',
        w: 3360,
        h: 1952,
    }
	
];

// build items array
var loudscore = [
	{
        src: 'assets/portfolio/loudscore/0.png',
        w: width,
        h: height,
		//title: 'Lorem ipsum dolor sit ameit lorem ipsum <br> <small>AVAIL | Mobile App</small>'
    },
	{
        src: 'assets/portfolio/loudscore/3.jpg',
        w: width,
        h: height
    },
    {
        src: 'assets/portfolio/loudscore/1.jpg',
        w: width,
        h: height,
		//title: 'Lorem ipsum dolor sit ameit lorem ipsum <br> <small>AVAIL | Mobile App</small>'
    },
    {
        src: 'assets/portfolio/loudscore/2.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/loudscore/4.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/loudscore/5.jpg',
        w: width,
        h: height
    },
	{
        src: 'assets/portfolio/loudscore/6.jpg',
        w: width,
        h: height
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

$(".tile").click(function() {
	var title = $(this).find("p").eq(0).text().toLowerCase();
	for (var i = 0; i < tiles.length; i++) {
			switch (title) {
				case "neighborhood":
					var gallery1 = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, neighborhood, options);
					gallery1.init();
					break;
				case "booklendr":
					var gallery2 = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, booklendr, options);
					gallery2.init();
					break;
				case "avail":
					var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, avail, options);
					gallery.init();
					break;
				case "autobeats":
					var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, autobeats, options);
					gallery.init();
					break;
				case "zolo":
					var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, zolo, options);
					gallery.init();
					break;
				case "bask":
					var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, bask, options);
					gallery.init();
					break;
				case "loudscore":
					var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, loudscore, options);
					gallery.init();
			}
			
	}
});
