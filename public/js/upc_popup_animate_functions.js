jQuery(document).ready(function($){
	var animationEnds = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

	window.popup1_animation = function popup1_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('#wpappp-popup1').addClass('zoomIn');
		$('#wpup-popup1-container').show();
		$('#wpup-popup1-container').addClass('zoomIn');
		$("#wpup-popup-close-button").find('*').show(); 
		$("#wpup-popup-close-button").show(); 
		$('#wpup-popup-close-button').addClass('slideInDown');
		$("#wpup-popup1-container-content").show(); 
		$("#wpup-popup1-container-content").css('height','83%'); 
		$("#wpup-popup1-container").css('height','410px'); 
		$('#wpup-popup1-container-content').addClass('slideInDown');
		$('#wpup-popup1-container-content').one(animationEnds, function (){
			$("#wpup-popup1-heading1").show(); 
			$('#wpup-popup1-heading1').addClass('slideInLeft');
			$("#line-break").show(); 
			$('#line-break').addClass('zoomIn');
			$("#wpup-popup1-heading2").show(); 
			$('#wpup-popup1-heading2').addClass('slideInRight');
			$("#popup1_name_text").find('*').show(); 
			$("#popup1_name_text").show(); 
			$('#popup1_name_text').addClass('animated slideInUp');
			$("#popup1_email_text").find('*').show(); 
			$("#popup1_email_text").show(); 
			$('#popup1_email_text').addClass('animated slideInDown');
			$("#wpup-popup1-subscribe-button").show(); 
			$('#wpup-popup1-subscribe-button').addClass('fadeInUpBig');
			$('#wpup-popup1-subscribe-button').one(animationEnds, function (){
				$("#wpup-popup-security-note").find('*').show(); 
				$("#wpup-popup-security-note").show(); 
				$('#wpup-popup-security-note').addClass('animated flash');
			});
		});
	}

	window.popup2_animation = function popup2_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('#wpappp-popup2').addClass('animated zoomIn');
		$('#wpup-popup2-container').show();
		$('#wpup-popup2-container').addClass('animated zoomIn');
		$('#wpup-popup2-container-top').show();
		$('#wpup-popup2-container-top').addClass('animated zoomIn');
		$('#wpappp-popup2-triangle-down').show();
		$('#wpappp-popup2-triangle-down').addClass('animated zoomIn');
		$('#wpup-popup2-container-content').show();
		$('#wpup-popup2-container-content').css('min-height','450px');
		$('#wpup-popup2-container-content').addClass('animated zoomIn');

		$('#wpup-popup2-container-content').one(animationEnds, function (){
			$('#wpup-popup2-heading1').show();
			$('#wpup-popup2-heading1').addClass('animated zoomIn');
			$('#wpup-popup2-subheading1').show();
			$('#wpup-popup2-subheading1').css('animation-delay','0.2s');
			$('#wpup-popup2-subheading1').addClass('animated zoomIn');
			$('#wpup-popup2-subheading2').show();
			$('#wpup-popup2-subheading2').css('animation-delay','0.4s');

			$('#wpup-popup2-subheading2').addClass('animated zoomIn');
			$("#wpup-popup2-name-wraper").find('*').show(); 
			$('#wpup-popup2-name-wraper').show();
			$('#wpup-popup2-name-wraper').css('animation-delay','0.9s');

			$('#wpup-popup2-name-wraper').addClass('animated zoomIn');
			$("#wpup-popup2-email-wraper").find('*').show(); 
			$('#wpup-popup2-email-wraper').show();
			$('#wpup-popup2-email-wraper').css('animation-delay','1.4s');

			$('#wpup-popup2-email-wraper').addClass('animated zoomIn');
			$('#wpup-popup2-subscribe-button').show();
			$('#wpup-popup2-subscribe-button').addClass('animated zoomIn');
			$('#wpup-popup2-subscribe-button').show();
			$('#wpup-popup2-subscribe-button').css('animation-delay','1.7s');

			$('#wpup-popup2-subscribe-button').addClass('animated zoomIn');
			$('#wpup-popup2-security-note').find('*').show(); 
			$('#wpup-popup2-security-note').show();
			$('#wpup-popup2-security-note').css('animation-delay','1.9s');

			$('#wpup-popup2-security-note').addClass('animated zoomIn');
			$('#wpup-popup2-close-button').find('*').show(); 
			$('#wpup-popup2-close-button').show();
			$('#wpup-popup2-close-button').css('animation-delay','2.1s');

			$('#wpup-popup2-close-button').addClass('animated fadeInUpBig');
		});
	}



	window.popup3_animation = function popup3_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('#wpappp-popup3').addClass('animated rollIn');
		$('#wpup-popup3-container').show();
		$('#wpup-popup3-container-top').show();
		$('#wpup-popup3-container-top').css('height','300px');
		$('#wpup-popup3-container-top').addClass('animated rollIn');
		$('#wpup-popup3-container-middle').show();
		$('#wpup-popup3-container-middle').css('height','190px');
		$('#wpup-popup3-container-middle').addClass('animated rollIn');
		$('#wpup-popup3-security-note-container').show();
		$('#wpup-popup3-security-note-container').find('*').hide();
		$('#wpup-popup3-security-note-container').css('height','40px');
		$('#wpup-popup3-security-note-container').css('padding-top','0');
		$('#wpup-popup3-security-note-container').css('line-height','40px');
		$('#wpup-popup3-security-note-container').addClass('animated rollIn');
		$('#wpup-popup3-security-note-container').one(animationEnds, function (){
			$('#wpup-popup3-heading1').show();
			$('#wpup-popup3-heading1').css('animation-delay','0.5s');
			$('#wpup-popup3-heading1').addClass('animated bounceInLeft');
			$('#wpup-popup3-background-image').show();
			$('#wpup-popup3-background-image').css('animation-delay','0.8s');
			$('#wpup-popup3-background-image').addClass('animated fadeIn');
			$('#wpup-popup3-subheading1').show();
			$('#wpup-popup3-subheading1').css('animation-delay','1s');
			$('#wpup-popup3-subheading1').addClass('animated bounceInRight');	
			$('#wpup-popup3-subheading2').show();
			$('#wpup-popup3-subheading2').css('animation-delay','1.3s');
			$('#wpup-popup3-subheading2').addClass('animated bounceInLeft');	
			$("#wpup-popup3-name-wraper").find('*').show(); 
			$('#wpup-popup3-name-wraper').show();
			$('#wpup-popup3-name-wraper').css('animation-delay','1.7s');
			$('#wpup-popup3-name-wraper').addClass('animated zoomIn');	
			$("#wpup-popup3-email-wraper").find('*').show(); 
			$('#wpup-popup3-email-wraper').show();
			$('#wpup-popup3-email-wraper').css('animation-delay','1.7s');
			$('#wpup-popup3-email-wraper').addClass('animated zoomIn');	
			$('#wpup-popup3-subscribe-button').show();
			$('#wpup-popup3-subscribe-button').css('animation-delay','1.7s');
			$('#wpup-popup3-subscribe-button').addClass('animated zoomIn');	
			$("#wpup-popup3-security-note-container").find('*').show(); 
			$('#wpup-popup3-security-note-container img').show();
			$('#wpup-popup3-security-note-container img').css('animation-delay','2s');
			$('#wpup-popup3-security-note-container img').addClass('animated zoomIn');	
			$('#wpup-popup3-security-note-text').show();
			$('#wpup-popup3-security-note-text').css('animation-delay','2s');
			$('#wpup-popup3-security-note-text').addClass('animated zoomIn');	
			$("#wpup-popup3-close-button").find('*').show(); 
			$('#wpup-popup3-close-button').show();
			$('#wpup-popup3-close-button').css('animation-delay','1.9s');
			$('#wpup-popup3-close-button').css('z-index','999');
			$('#wpup-popup3-close-button').addClass('animated fadeInUpBig');	
		});
	}



	window.popup4_animation = function popup4_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated rotateInDownLeft');
		$('#wpup-popup4-container').show();
		$('#wpup-popup4-container').css('height','420px;');
		$('#wpup-popup4-container').addClass('animated rotateInDownLeft');
		$('#wpup-popup4-top-content').show();
		$('#wpup-popup4-top-content').css('height','160px');
		$('#wpup-popup4-top-content').addClass('animated rotateInDownLeft');
		$('#wpup-popup4-center-content').show();
		$('#wpup-popup4-center-content').css('height','260px');
		$('#wpup-popup4-center-content').css('animation-delay','0.1s');
		$('#wpup-popup4-center-content').addClass('animated rotateInDownLeft');
		$('#wpup-popup4-center-content').one(animationEnds, function (){
			$('#wpup-popup4-heading1').show();
			$('#wpup-popup4-heading1').css('animation-delay','0.3s');
			$('#wpup-popup4-heading1').addClass('animated rotateInDownRight');
			$('#wpup-popup4-heading2').show();
			$('#wpup-popup4-heading2').css('animation-delay','0.4s');
			$('#wpup-popup4-heading2').addClass('animated rotateInDownRight');
			$('#wpup-popup4-subheading1').show();
			$('#wpup-popup4-subheading1').css('animation-delay','0.3s');
			$('#wpup-popup4-subheading1').addClass('animated rotateInDownRight');
			$('#wpup-popup4-subheading1').one(animationEnds, function (){
				$('#wpup-popup4-label-name').show();
				$('#wpup-popup4-label-name').css('animation-delay','0s');
				$('#wpup-popup4-label-name').addClass('animated bounceIn');
				$('#wpup-popup4-name-wraper').find('*').show();
				$('#wpup-popup4-name-wraper').show();
				$('#wpup-popup4-name-wraper').addClass('animated slideInRight');
				$('#wpup-popup4-label-email').show();
				$('#wpup-popup4-label-email').addClass('animated slideInLeft');
				$('#wpup-popup4-email-wraper').find('*').show();
				$('#wpup-popup4-email-wraper').show();
				$('#wpup-popup4-email-wraper').addClass('animated slideInRight');
				$('#wpup-popup4-subscribe-button').show();
				$('#wpup-popup4-subscribe-button').addClass('animated rollIn');
				$('#wpup-popup4-security-note').find('*').show();
				$('#wpup-popup4-security-note').show();
				$('#wpup-popup4-security-note').addClass('animated bounceIn');
				$('#wpup-popup4-security-note').one(animationEnds, function (){
					$('#wpup-popup4-close-button').find('*').show();
					$('#wpup-popup4-close-button').show();
					$('#wpup-popup4-close-button').css('z-index','999');
					$('#wpup-popup4-close-button').addClass('animated zoomIn');
				});
			});
		});
	}


	window.popup5_animation = function popup5_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated zoomIn');
		$('#wpup-popup5-container').show();
		$('#wpup-popup5-container').css('height','390px');
		$('#wpup-popup5-container').addClass('animated rotateIn');
		$('#wpup-popup5-container').one(animationEnds, function (){
			$('#wpup-popup5-top-content').show();
			$('#wpup-popup5-header').show();
			$('#wpup-popup5-header').addClass('animated fadeInDownBig');
			$('#wpup-popup5-subheader').show();
			$('#wpup-popup5-subheader').addClass('animated fadeInUpBig');
			$('#wpup-popup5-center-content').show();
			$('#wpup-popup5-center-content-left').show();
			$('#wpup-popup5-center-content-left').css('animation-delay', '0.5s');
			$('#wpup-popup5-center-content-left').addClass('animated fadeInLeft');
			$('#wpup-popup5-center-content-right').find('*').show();
			$('#wpup-popup5-security-note').hide();
			$('#wpup-popup5-center-content-right').show();
			$('#wpup-popup5-name-wraper').css('animation-delay', '0.5s');
			$('#wpup-popup5-name-wraper').addClass('animated fadeInRight');
			$('#wpup-popup5-email-wraper').css('animation-delay', '0.8s');
			$('#wpup-popup5-email-wraper').addClass('animated fadeInRight');
			$('#wpup-popup5-subscribe-button').css('animation-delay', '1s');
			$('#wpup-popup5-subscribe-button').addClass('animated fadeInRight');
			$('#wpup-popup5-security-note').show();
			$('#wpup-popup5-security-note').css('animation-delay', '1.3s');
			$('#wpup-popup5-security-note').addClass('animated fadeInRight');
			$('#wpup-popup5-close-button').find('*').show();
			$('#wpup-popup5-close-button').show();
			$('#wpup-popup5-close-button').css('animation-delay', '1.6s');
			$('#wpup-popup5-close-button').addClass('animated fadeInUpBig');
		});
	}

	window.popup6_animation = function popup6_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated flipInX');
		$('#wpup-popup6-container').show();
		$('#wpup-popup6-container').css('height','380px');
		$('#wpup-popup6-container').addClass('animated flipInY');
		$('#wpup-popup6-container').one(animationEnds, function (){
			$('#wpup-popup6-content').find('*').show();
			$('#wpup-popup6-content').show();
			$('#wpup-popup6-heading').addClass('animated fadeInUpBig');
			$('#wpup-popup6-name-wraper').css('animation-delay', '0.3s');
			$('#wpup-popup6-name-wraper').addClass('animated fadeInUpBig');
			$('#wpup-popup6-email-wraper').css('animation-delay', '0.6s');
			$('#wpup-popup6-email-wraper').addClass('animated fadeInUpBig');
			$('#wpup-popup6-subscribe-button').css('animation-delay', '0.9s');
			$('#wpup-popup6-subscribe-button').addClass('animated fadeInUpBig');
			$('#wpup-popup6-info').css('animation-delay', '1.2s');
			$('#wpup-popup6-info').addClass('animated fadeInUpBig');
			$('#wpup-popup6-close-button').find('*').show();
			$('#wpup-popup6-close-button').show();
			$('#wpup-popup6-close-button').css('animation-delay', '1.2s');
			$('#wpup-popup6-close-button').addClass('animated fadeInUpBig');
		});
	}



	window.popup7_animation = function popup7_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated flipInX');
		$('#wpup-popup7-container').css('height','217px');
		$('#wpup-popup7-container').show();
		$('#wpup-popup7-container').addClass('animated flipInY');
		$('#wpup-popup7-container').one(animationEnds, function (){
			$('#wpup-popup7-heading1').show();
			$('#wpup-popup7-heading1').addClass('animated fadeInLeftBig');
			$('#wpup-popup7-heading2').show();
			$('#wpup-popup7-heading2').addClass('animated fadeInRightBig');
			$('#wpup-popup7-email-text').show();
			$('#wpup-popup7-email-text').addClass('animated fadeInLeft');
			$('#upc_email_text_field').show();
			$('#wpup-popup7-button').show();
			$('#upc_closing_note').show();
			$('#wpup-popup7-button').css('display','inline-flex');
			$('#wpup-popup7-button').addClass('animated fadeInRight');
			$('#wpup-popup7-close-note').show();
			$('#upc_closing_note').css('animation-delay','0.5s');
			$('#upc_closing_note').css('margin','10px 0');
			$('#upc_closing_note').addClass('animated fadeInUpBig');
			$('#wpup-popup7-container').css('height','auto');
			$('#upc_closing_note').one(animationEnds, function (){
				$('#wpup-popup7-close-button').find('*').show();
				$('#wpup-popup7-close-button').show();

				$('#wpup-popup7-close-button').addClass('animated fadeInUpBig');
			});
		});
	}

	window.popup8_animation = function popup8_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('#wpup-popup8-container').css('height','307px');
		$('#wpup-popup8-container').show();
		$('#wpup-popup8-container').addClass('animated lightSpeedIn');
		$('#wpup-popup8-content').show();
		$('#wpup-popup8-content').css('height','308px');
		$('#wpup-popup8-content').addClass('animated lightSpeedIn');
		$('#wpup-popup8-container').one(animationEnds, function (){
			$('#wpup-popup8-heading1').show();
			$('#wpup-popup8-heading1').addClass('animated bounceInLeft');
			$('#wpup-popup8-heading2').show();
			$('#wpup-popup8-heading2').css('animation-delay','0.3s');
			$('#wpup-popup8-heading2').addClass('animated bounceInLeft');
			$('#wpup-popup8-subheading').show();
			$('#wpup-popup8-subheading').css('animation-delay','0.6s');
			$('#wpup-popup8-subheading').addClass('animated bounceInLeft');
			$('#wpup-popup8-email-text').show();
			$('#wpup-popup8-email-text').css('animation-delay','0.9s');
			$('#wpup-popup8-email-text').addClass('animated rotateInUpLeft');
			$('#wpup-popup8-button').show();
			$('#wpup-popup8-button').css('animation-delay','0.9s');
			$('#wpup-popup8-button').addClass('animated rotateInUpRight');
			$('#upc_closing_text').find('*').show();
			$('#upc_closing_text').show();
			$('#upc_closing_text').css('animation-delay','1.2s');
			$('#upc_closing_text').css('margin','10px 0 0 0');
			$('#upc_closing_text').addClass('animated rotateInUpRight');
			$('#wpup-popup8-close-button').find('*').show();
			$('#wpup-popup8-close-button').show();
			$('#wpup-popup8-close-button').css('animation-delay','1.6s');
			$('#wpup-popup8-close-button').addClass('animated fadeInUpBig');
			$('#wpup-popup8-content').css('height','auto');
			$('#wpup-popup8-container').css('height','auto');
		});
	}


	window.popup9_animation = function popup9_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
			$('#wpup-popup9-container').find('*').show();
			$('#wpup-popup9-close-button').find('*').hide();

			$('#wpup-popup9-container').css('height','350px');
			$('#wpup-popup9-container').show();
			$('#wpup-popup9-container').addClass('animated fadeInDownBig');
			$('#wpup-popup9-middle-content').find('*').hide();
			$('#wpup-popup9-middle-content').show();
			$('#wpup-popup9-middle-content').css('height','205px');
			$('#wpup-popup9-middle-content').css('animation-delay','0.5s');
			$('#wpup-popup9-middle-content').addClass('animated fadeInUpBig');
			$('#wpup-popup9-top-content').show();
			$('#wpup-popup9-top-content').css('animation-delay','0.5s');
			$('#wpup-popup9-top-content').addClass('animated fadeInDownBig');
			$('#wpup-popup9-heading1').show();
			$('#wpup-popup9-heading1').css('animation-delay','0.5s');
			$('#wpup-popup9-heading1').addClass('animated zoomIn');
			$('#wpup-popup9-heading1').one(animationEnds, function (){
				$('#wpup-popup9-main-text').show();
				$('#wpup-popup9-main-text').addClass('animated bounceInLeft');
				$('#wpup-popup9-email-text').show();
				$('#wpup-popup9-email-text').addClass('animated slideInUp');
				$('#wpup-popup9-button').show();
				$('#wpup-popup9-button').addClass('animated slideInUp');
				$('#wpup-popup9-security-note').find('*').show();
				$('#upc_closing_text').find('*').hide();
				$('#wpup-popup9-security-note').show();
				$('#wpup-popup9-security-note').addClass('animated bounceInRight');
				$('#wpup-popup9-security-note').one(animationEnds, function (){
					$('#upc_closing_text').find('*').show();
					$('#upc_closing_text').show();
					$('#upc_closing_text').css('margin','10px 0 0 0');
					$('#upc_closing_text').addClass('animated slideInUp');
					$('#wpup-popup9-close-button').find('*').show();
					$('#wpup-popup9-close-button').show();
					$('#wpup-popup9-close-button').addClass('animated fadeInUpBig');

				});
			});
		});
	}

	window.popup10_animation = function popup10_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('#wpup-popup10-container').show();
		$('#wpup-popup10-container').addClass('animated fadeIn');
		$('#wpup-popup10-top-content').show();
		$('#wpup-popup10-top-content').css('height','152px');
		$('#wpup-popup10-top-content').addClass('animated fadeInDownBig');
		$('#wpup-popup10-middle-content').show();
		$('#wpup-popup10-middle-content').css('height','340px');
		$('#wpup-popup10-middle-content').addClass('animated fadeInUpBig');
		$('#wpup-popup10-middle-content').one(animationEnds, function (){
			$('#wpup-popup10-info-image').show();
			$('#wpup-popup10-info-image').addClass('animated flipInX');
			$('#wpup-popup10-heading1').show();
			$('#wpup-popup10-heading1').addClass('animated fadeInDownBig');
			$('#wpup-popup10-close-button').show();
			$('#wpup-popup10-close-button').addClass('animated flipInX');
			$('#wpup-popup10-main-text').show();
			$('#wpup-popup10-main-text').css('animation-delay','0.5s');
			$('#wpup-popup10-main-text').addClass('animated flipInY');
			$('#wpup-popup10-email-text').show();
			$('#wpup-popup10-email-text').css('margin-top','20px');
			$('#wpup-popup10-email-text').css('animation-delay','0.9s');
			$('#wpup-popup10-email-text').addClass('animated flipInY');
			$('#wpup-popup10-button1').show();
			$('#wpup-popup10-button1').css('animation-delay','1.1s');
			$('#wpup-popup10-button1').addClass('animated flipInY');
			$('#upc_closing_text').find('*').show();
			$('#upc_closing_text').show();
			$('#upc_closing_text').css('animation-delay','1.5s');
			$('#upc_closing_text').css('margin','20px 0 0 0');
			$('#upc_closing_text').addClass('animated fadeInUpBig');
			$('#wpup-popup10-close-button').find('*').show();
			$('#wpup-popup10-close-button').show();
			$('#wpup-popup10-close-button').css('animation-delay','0.5s');
			$('#wpup-popup10-close-button').addClass('animated zoomIn');
		});
	}


	window.popup11_animation = function popup11_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('#wpup-popup11-container').show();
		$('#wpup-popup11-container').addClass('animated fadeIn');
		$('#wpup-popup11-content').show();
		$('#wpup-popup11-content').css('height','400px');
		$('#wpup-popup11-content').addClass('animated zoomIn');
		$('#wpup-popup11-container').one(animationEnds, function (){
			$('#wpup-popup11-heading').show();
			$('#wpup-popup11-heading').addClass('animated flipInY');
			$('#wpup-popup11-container').one(animationEnds, function (){
				$('#wpup-popup11-main-text').show();
				$('#wpup-popup11-main-text').addClass('animated fadeInUpBig');
				$('#wpup-popup11-email-text').show();
				$('#wpup-popup11-email-text').css('animation-delay','0.8s');
				$('#wpup-popup11-email-text').addClass('animated zoomInLeft');
				$('#wpup-popup11-button').show();
				$('#wpup-popup11-button').css('animation-delay','1.1s');
				$('#wpup-popup11-button').addClass('animated zoomInRight');
				$('#wpup-popup11-close-text1').find('*').show();
				$('#wpup-popup11-close-text1').show();
				$('#wpup-popup11-close-text1').css('animation-delay','1.1s');
				$('#wpup-popup11-close-text1').addClass('animated fadeInUpBig');
				$('#wpup-popup11-close-button').find('*').show();
				$('#wpup-popup11-close-button').show();
				$('#wpup-popup11-close-button').css('animation-delay','1.5s');
				$('#wpup-popup11-close-button').addClass('animated fadeInUpBig');
			});
		});
	}

	window.popup12_animation = function popup12_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
			$('#wpup-popup12-container').show();
			$('#wpup-popup12-container').addClass('animated zoomIn');
			$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
				$('#wpup-popup12-heading1').show();
				$('#wpup-popup12-heading1').addClass('animated rotateIn');
				$('#wpup-popup12-heading2').show();
				$('#wpup-popup12-heading2').css('animation-delay','0.5s');
				$('#wpup-popup12-heading2').addClass('animated flipInX');
				$('#wpup-popup12-email-text').show();
				$('#wpup-popup12-email-text').css('animation-delay','0.8s');
				$('#wpup-popup12-email-text').addClass('animated lightSpeedIn');
				$('#wpup-popup12-button').show();
				$('.wpappp_popup_wrapper_container br').show();
				$('#wpup-popup12-button').css('animation-delay','1.1s');
				$('#wpup-popup12-button').addClass('animated lightSpeedIn');
				$('#wpup-popup12-terms').show();
				$('#wpup-popup12-terms').css('animation-delay','1.4s');
				$('#wpup-popup12-terms').addClass('animated lightSpeedIn');
				$('#wpup-popup12-close-button').find('*').show();
				$('#wpup-popup12-close-button').show();
				$('#wpup-popup12-close-button').css('animation-delay','1.8s');
				$('#wpup-popup12-close-button').addClass('animated fadeInUpBig');
			});
		});
	}


	window.popup13_animation = function popup13_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('#wpup-popup13-left-content').show();
		$('#wpup-popup13-left-content').addClass('animated fadeInLeftBig');
		$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
			$('#wpup-popup13-content').show();
			$('#wpup-popup13-container').show();

			$('#wpup-popup13-container').addClass('animated fadeInRightBig');	
			$('#wpup-popup13-container').one(animationEnds, function (){
				$('#wpup-popup13-heading').show();
				$('#wpup-popup13-right-content').show();
				$('#wpup-popup13-heading').addClass('animated fadeInRightBig');
				$('#wpup-popup13-main-text').show();
				$('#wpup-popup13-main-text').css('animation-delay','0.5s');
				$('#wpup-popup13-main-text').addClass('animated fadeInRightBig');
				$('#wpup-popup13-email-text').show();
				$('#wpup-popup13-email-text').css('animation-delay','0.8s');
				$('#wpup-popup13-email-text').addClass('animated fadeInRightBig');
				$('#wpup-popup13-button').show();
				$('#wpup-popup13-button').css('animation-delay','0.8s');
				$('#wpup-popup13-button').addClass('animated fadeInRightBig');
				$('#wpup-popup13-close-button').find('*').show();
				$('#wpup-popup13-close-button').show();
				$('#wpup-popup13-close-button').css('animation-delay','1.4s');
				$('#wpup-popup13-close-button').addClass('animated fadeInUpBig');

			});
		});
	}

	window.popup14_animation = function popup14_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
			$('#wpup-popup14-container').show();
			$('#wpup-popup14-container').css('height','auto');
			$('#wpup-popup14-container').addClass('animated flipInY');
			$('#wpup-popup14-header-image').show();
			$('#wpup-popup14-header-image').show();
			$('#wpup-popup14-header-image').css('animation-delay','0.5s');
			$('#wpup-popup14-header-image').addClass('animated flipInY');
			$('#wpup-popup14-top-content').show();
			$('#wpup-popup14-top-content').css('animation-delay','0.8s');
			$('#wpup-popup14-top-content').addClass('animated flipInY');
			$('#wpup-popup14-main-text-header').show();
			$('#wpup-popup14-main-text-header').css('animation-delay','1.1s');
			$('#wpup-popup14-main-text-header').addClass('animated flipInY');
			$('#wpup-popup14-main-text-subheader').show();
			$('#wpup-popup14-main-text-subheader').css('animation-delay','1.4s');
			$('#wpup-popup14-main-text-subheader').addClass('animated flipInY');
			$('#wpup-popup14-bottom-container').show();
			$('#upc_popup14_name_container').find('*').show();
			$('#upc_popup14_name_container').show();
			$('#upc_popup14_name_container').css('animation-delay','1.7s');
			$('#upc_popup14_name_container').addClass('animated flipInY');
			$('#upc_popup14_email_container').find('*').show();
			$('#upc_popup14_email_container').show();
			$('#upc_popup14_email_container').css('animation-delay','2.1s');
			$('#upc_popup14_email_container').addClass('animated flipInY');
			$('#wpup-popup14-button').find('*').show();
			$('#wpup-popup14-button').show();
			$('#wpup-popup14-button').css('animation-delay','2.4s');
			$('#wpup-popup14-button').addClass('animated flipInY');
			$('#wpup-popup14-security-note').find('*').show();
			$('#wpup-popup14-security-note').show();
			$('#wpup-popup14-security-note').css('animation-delay','2.7s');
			$('#wpup-popup14-security-note').addClass('animated flipInY');
			$('#wpup-popup14-close-button').find('*').show();
			$('#wpup-popup14-close-button').show();
			$('#wpup-popup14-close-button').css('animation-delay','3s');
			$('#wpup-popup14-close-button').addClass('animated fadeInUpBig');

		});
	}

	window.popup15_animation = function popup15_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
			$('#wpappp-popup15-container').show();
			$('#wpappp-popup15-container').addClass('animated fadeIn');
			$('#wpappp-popup15-content').show();
			$('#wpappp-popup15-content').addClass('animated fadeIn');
			$('#wpappp-popup15-leftcontent').show();
			$('#wpappp-popup15-leftcontent').addClass('animated fadeIn');
			$('#wpappp-popup15-rightcontent').show();
			$('#wpappp-popup15-rightcontent').addClass('animated fadeIn');
			$('#wpappp-popup15-heading').show();
			$('#wpappp-popup15-heading').css('animation-delay','0.5s');
			$('#wpappp-popup15-heading').addClass('animated fadeInUpBig');
			$('#wpappp-popup15-underline').show();
			$('#wpappp-popup15-underline').css('animation-delay','0.8s');
			$('#wpappp-popup15-underline').addClass('animated fadeInUpBig');
			$('#wpappp-popup15-subtext').show();
			$('#wpappp-popup15-subtext').css('animation-delay','1.1s');
			$('#wpappp-popup15-subtext').addClass('animated fadeInUpBig');
			$('#wpappp-popup15-yesbtn').show();
			$('#wpappp-popup15-yesbtn').css('animation-delay','1.7s');
			$('#wpappp-popup15-yesbtn').addClass('animated zoomIn');
			$('#wpappp-popup15-nobtn').show();
			$('#wpappp-popup15-nobtn').css('animation-delay','2.1s');
			$('#wpappp-popup15-nobtn').addClass('animated zoomIn');
		});
	}

	window.popup16_animation = function popup16_animation(){
		$(".wpappp_popup_wrapper_container").find('*').hide(); 
		$('.wpappp_popup_wrapper_container').show();
		$('#wpappp-popup16-container').css('height','500px');

		$('.wpappp_popup_wrapper_container').addClass('animated fadeIn');
		$('.wpappp_popup_wrapper_container').one(animationEnds, function (){
			$('#wpappp-popup16-container').show();
			$('#wpappp-popup16-container').addClass('animated swing');
			$('#wpappp-popup16-container').one(animationEnds, function (){
				$('#wpappp-popup16-heading').show();
				$('#wpappp-popup16-heading').addClass('animated zoomIn');
				$('#wpappp-popup16-subtext').show();
				$('#wpappp-popup16-subtext').addClass('animated zoomIn');
				$('#wpappp-popup16-yesbtn').show();
				$('#wpappp-popup16-yesbtn').addClass('animated zoomIn');
				$('#wpappp-popup16-nobtn').show();
				$('#wpappp-popup16-nobtn').addClass('animated zoomIn');
			});
		});
	}


});