/**
 * Init js
 * Version 1.0
 **/
 let $ = jQuery;

 function InitJs() {

 	this.owlCarouselJs = function() {
	  // slider

	  $('.home_slider').owlCarousel({
	  	loop:true,
	  	margin:0,
	  	nav:true,
	  	dots:true,
	  	autoplay: false	,
	  	autoplayTimeout:5000,
	  	smartSpeed: 2000,
	  	responsive:{
	  		0:{
	  			items:1,
	  		}
	  	}
	  });
	  $('.published_books').owlCarousel({
	  	loop:true,
	  	margin:5,
	  	nav:true,
	  	dots:false,
	  	center: true,
	  	autoplay: false	,
	  	autoplayTimeout:5000,
	  	smartSpeed: 2000,
	  	responsive:{
	  		0:{
	  			items:1,
	  		},
	  		768:{
	  			items:2,
	  		},
	  		1280:{
	  			items:3,
	  		}
	  	}
	  });
	},

	this.loginPopup = function(){
		$('.login_register_wrapper .login_btn').click(function(){
			// $('body').addClass('activePop');
			aler('hi');
		});
	},

	this.init = function(){
		let _this = this;
		$(document).ready(function($) {
			_this.owlCarouselJs();
			_this.loginPopup();
		});
	}
}


//initializing the InitJs function
let initObj = new InitJs();
initObj.init();
