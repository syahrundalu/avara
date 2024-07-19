(function ($) {
	
	"use strict"
	;

	

	// Page loading animation
	$(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });


	$(window).scroll(function() {
	  var scroll = $(window).scrollTop();
	  var box = $('.header-text').height();
	  var header = $('header').height();

	  if (scroll >= box - header) {
	    $("header").addClass("background-header");
	  } else {
	    $("header").removeClass("background-header");
	  }
	})

	$('.owl-banner').owlCarousel({
	  center: true,
      items:1,
      loop:true,
      nav: true,
	  dots:true,
	  navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
      margin:30,
      responsive:{
        992:{
            items:1
        },
		1200:{
			items:1
		}
      }
	});

	var width = $(window).width();
		$(window).resize(function() {
		if (width > 767 && $(window).width() < 767) {
			location.reload();
		}
		else if (width < 767 && $(window).width() > 767) {
			location.reload();
		}
	})

	const elem = document.querySelector('.properties-box');
	const filtersElem = document.querySelector('.properties-filter');
	if (elem) {
		const rdn_events_list = new Isotope(elem, {
			itemSelector: '.properties-items',
			layoutMode: 'masonry'
		});
		if (filtersElem) {
			filtersElem.addEventListener('click', function(event) {
				if (!matchesSelector(event.target, 'a')) {
					return;
				}
				const filterValue = event.target.getAttribute('data-filter');
				rdn_events_list.arrange({
					filter: filterValue
				});
				filtersElem.querySelector('.is_active').classList.remove('is_active');
				event.target.classList.add('is_active');
				event.preventDefault();
			});
		}
	}


	// Menu Dropdown Toggle
	if($('.menu-trigger').length){
		$(".menu-trigger").on('click', function() {	
			$(this).toggleClass('active');
			$('.header-area .nav').slideToggle(200);
		});
	}


	// Menu elevator animation
	$('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				var width = $(window).width();
				if(width < 991) {
					$('.menu-trigger').removeClass('active');
					$('.header-area .nav').slideUp(200);	
				}				
				$('html,body').animate({
					scrollTop: (target.offset().top) - 80
				}, 700);
				return false;
			}
		}
	});


	// Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});
    

	$("body").on("contextmenu", "img", function(e) {
		return false;
	});
	
})(window.jQuery);


var menuToggle = document.querySelector(".whatsapp-float"),
	wrapperMenu = document.querySelector(".nav-whatsapp"),
	closeWA = document.querySelector(".closeWA");
var inputs = document.querySelectorAll('.Fcontrol input[type=text], .Fcontrol input[type=email], .Fcontrol textarea');

menuToggle.onclick = function() {
  wrapperMenu.classList.toggle('active');
}
closeWA.onclick = function() {
  wrapperMenu.classList.remove('active');
};

for (var i = 0; i < inputs.length; i++) {
  var input = inputs[i];
  input.addEventListener('input', function() {
    var bg = this.value ? 'show' : 'none';
    this.setAttribute('class', bg);
  });
}

function sendToWhatsApp() {
  /* Input Form */
  var name = document.getElementById("cName").value;
  var email = document.getElementById("cEmail").value;
  var subject = document.getElementById("cSubject").value;
  var massage = document.getElementById("cMessage").value;
  var postLink = window.location.href;
  /* Validation for Required Columns */
  var error_name = document.getElementById("error_name"),
    error_email = document.getElementById("error_email"),
    error_message = document.getElementById("error_message");
  var text;
  if (name == "") {
    text = 'Please enter your name';
    error_name.setAttribute('data-text', text);
    return false;
  }
  if (email.indexOf("@") == -1 || email.length < 6) {
    text = 'Please enter valid email';
    error_email.setAttribute('data-text', text);
    return false;
  }
  if (massage == "") {
    text = 'Please enter your Massage';
    error_message.setAttribute('data-text', text);
    return false;
  }
  /* URL Final Whatsapp */ 
  var message = "New message from " + name + "\n\n"; // Opening Message
  message += "*Name:* " + name + "\n";
  message += "*Email:* " + email + "\n";
  message += "*Subject:* " + subject + "\n";
  message += "*Massage:* " + massage + "\n\n";
  message += "=============================" + "\n";
  message += "*Form:* " + postLink + "\n";
  message += "=============================";
  /* WhatsApp Settings */
  var walink = 'https://api.whatsapp.com/send?',
    phoneNumber = '6285369596924'; // Your WhatsApp number
  var encodedMessage = encodeURIComponent(message);
  var whatsappUrl = walink + "?phone=" + phoneNumber + "&text=" + encodedMessage;
  window.open(whatsappUrl, '_blank');
  return true;
}

