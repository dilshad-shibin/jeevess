

$(document).ready(function(){
	
	$(window).on('load', function() {
  $('#status').fadeOut(); 
  $('#preloader').delay(350).fadeOut('slow');  
  $('body').delay(350).css({'overflow':'visible'});
});

setTimeout(function() {
  $('.enquiry_sidebar').removeClass('enq-show');
}, 700); 

	$('.qebtn').click(function(){
		$('body').toggleClass('custom-pop-active');	
	});
      
    $('.enq_closs').click(function(){
		$('body').removeClass('custom-pop-active');
		
	});

});

   $(document).ready(function() {
        $('.cus-select').select2();
    });

 $('#datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
    });

!(function (v) {
    "use strict";
  
        jQuery(document).ready(function () {
            
      (function () {
                    var e = v(".promo-slider");
                    if (e.length) {
                        var r = v(".promo-slider__count"),
                            i = v(".slider__prev"),
                            s = v(".slider__next");
                        e.on("init afterChange", function (e, i, s, t) {
                            var o = (s || 0) + 1;
                            r.text(o + "/" + i.slideCount);
                        }),
                            e.slick({ fade: !0, adaptiveHeight: !0, infinite: !0, speed: 1200,pauseOnHover: false, autoplay: true,
            autoplaySpeed: 3000, prevArrow: i, nextArrow: s });
                    }
                })()
           
                
        });
})(jQuery);

!(function (v) {
    "use strict";
  
        jQuery(document).ready(function () {
            
      (function () {
                    var e = v(".promo-slider2");
                    if (e.length) {
                        var r = v(".promo-slider__count"),
                            i = v(".slider__prev"),
                            s = v(".slider__next");
                        e.on("init afterChange", function (e, i, s, t) {
                            var o = (s || 0) + 1;
                            r.text(o + "/" + i.slideCount);
                        }),
                            e.slick({ fade: !0, adaptiveHeight: !0, infinite: !0, speed: 1200,pauseOnHover: false, autoplay: true,
            autoplaySpeed: 3000, prevArrow: i, nextArrow: s });
                    }
                })()
           
                
        });
})(jQuery);

if ($('#vihara-slider').length) {
        $('#vihara-slider').slick({
            autoplay: true,
            fade:true,
           pauseOnHover: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 2000,
            speed: 800,
            dots: false,
            arrows: true,
			prevArrow:'.navid1 .prev',
            nextArrow:'.navid1 .next',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						adaptiveHeight: true,
						dots: false
                    }
                },
				{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
						
						
                    }
                },
				{
                    breakpoint: 570,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }


if ($('#related-blog-slider').length) {
        $('#related-blog-slider').slick({
            autoplay: true,
           pauseOnHover: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplaySpeed: 3000,
            speed: 800,
            dots: false,
            arrows: true,
			prevArrow:'.navid2 .prev',
            nextArrow:'.navid2 .next',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
						adaptiveHeight: true,
						dots: false
                    }
                },
				{
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
						
						
                    }
                },
				{
                    breakpoint: 570,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }


$(document).ready(function(){

	$('#readid1').click(function(){
		
		$('#readid1').toggleClass('readmore-active');
        
	});
    $('#readid2').click(function(){
		
		$('#readid2').toggleClass('readmore-active');
        
	});

}); 

 $('.totop').tottTop({
            scrollTop: 100
        });  


   $('a.mm-original-link').click( function(e) {e.preventDefault(); return false; } );




