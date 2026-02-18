// JavaScript Document

$(document).ready(function(){

	$('#carousel-blog').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
      arrows: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
      dots: false, 
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false,  
      arrows: false,
      infinite: true  
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});

	$('#carousel-equipe').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
      arrows: false,
	  slidesToShow: 2,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1200,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false, 
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false,  
      arrows: false,
      infinite: true  
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});

   $('#carousel-missao').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
    arrows: false,
	  slidesToShow: 3,
	  slidesToScroll: 1,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false, 
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false,  
      arrows: false,
      infinite: true  
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});
    
    
  $('#carousel-depoimentos').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
      arrows: true,
	  slidesToShow: 2,
	  slidesToScroll: 2,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false
		  }
		},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false, 
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false,  
      arrows: false,
      infinite: true  
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});

  $('#carousel-bene').slick({
	  dots: false,
	  infinite: true,
	  speed: 300,
    arrows: false,
	  slidesToShow: 4,
	  slidesToScroll: 1,
 
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
      autoplay: true,
		  }
		},
		{
		  breakpoint: 767,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false, 
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
      dots: false,  
      arrows: false,
      infinite: true  
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});

  
    
	//MENU MOBILE
	
    
    jQuery("#abre-menu").click(function(){
      jQuery("#abre-menu").hide();
      jQuery("#fecha-menu").show();
      jQuery(".menu-mobile").show();
      jQuery("body").css('overflow',"hidden");
    });

    jQuery("#fecha-menu").click(function(){
      jQuery("#abre-menu").show();
      jQuery("#fecha-menu").hide();
      jQuery(".menu-mobile").hide();
      jQuery("body").css('overflow',"auto");
    });
	//MENU MOBILE

});

//lazy background
document.addEventListener("DOMContentLoaded", function() {
      var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

      if ("IntersectionObserver" in window) {
        // Create IntersectionObserver instance
        var lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
          entries.forEach(function(entry) {
            if (entry.isIntersecting) {
              // Replace data-src with actual background-image URL
              entry.target.style.backgroundImage = "url('" + entry.target.getAttribute("data-src") + "')";
              // Unobserve the target element
              lazyBackgroundObserver.unobserve(entry.target);
            }
          });
        });

        // Observe each lazy-background element
        lazyBackgrounds.forEach(function(lazyBackground) {
          lazyBackgroundObserver.observe(lazyBackground);
        });
      } else {
        // Fallback for browsers that don't support IntersectionObserver
        lazyBackgrounds.forEach(function(lazyBackground) {
          lazyBackground.style.backgroundImage = "url('" + lazyBackground.getAttribute("data-src") + "')";
        });
      }
    });
	
//lazy image
document.addEventListener("DOMContentLoaded", function() {
  var lazyImages = document.querySelectorAll('.lazy-image');

  // Intersection Observer
  var observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var img = entry.target;
        img.src = img.getAttribute('data-src');
        img.onload = function() {
          img.classList.add('loaded');
        };
        observer.unobserve(img);
      }
    });
  });

  // Start observing lazy images
  lazyImages.forEach(function(image) {
    observer.observe(image);
  });
});

//ENTRANDO FADE IN
document.addEventListener('DOMContentLoaded', function () {
  const elements = document.querySelectorAll('.fade-in-element');

  function checkVisibility() {
    const windowHeight = window.innerHeight;

    elements.forEach(element => {
      const rect = element.getBoundingClientRect();
      if (rect.top < windowHeight - 100) { // 100px before reaching the viewport
        element.classList.add('visible');
      }
    });
  }

  // Trigger visibility check when scrolling
  window.addEventListener('scroll', checkVisibility);

  // Check on initial load in case some elements are already in view
  checkVisibility();
});

//Galeria - Troca de imagens
const menu = document.getElementById('menu');
const menuHeight = menu.offsetHeight;

window.addEventListener('scroll', () => {
  if (window.scrollY > menuHeight) {
    menu.classList.add('menu-bg');
  } else {
    menu.classList.remove('menu-bg');
  }
});




