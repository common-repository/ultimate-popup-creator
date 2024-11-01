
jQuery(document).ready(function($){
	var upc_selected_popup = $('#wpappp-popup-show-selected-popup').val();

	if($('#wpappp-show-popup').val() == 'once'){
		if($.cookie('wpappp_popup_cookie') != 'seen'){
		if($('#wpappp-show-popup-after').val() != ''){
			setTimeout(function(){
				selected_popup_amination_function = upc_selected_popup + "_animation";
			window[selected_popup_amination_function]();
			
			},$('#wpappp-show-popup-after').val());
			if($('#wpappp-cookie-expire-time').val() != '')
				{$.cookie('wpappp_popup_cookie','seen', { expires: parseInt($('#wpappp-cookie-expire-time').val() )});}
			else
				{$.cookie('wpappp_popup_cookie','seen');}
		}else{
				selected_popup_amination_function = upc_selected_popup + "_animation";
			window[selected_popup_amination_function]();
			
			if($('#wpappp-cookie-expire-time').val() != '' && $.cookie('wpappp_popup_cookie') !='')
				{$.cookie('wpappp_popup_cookie','seen', { expires: parseInt($('#wpappp-cookie-expire-time').val() )});}
			else
				{$.cookie('wpappp_popup_cookie','seen');}
		}
	}
}
	if($('#wpappp-show-popup').val() == 'everytime'){
		if($('#wpappp-show-popup-after').val() != ''){
			setTimeout(function(){
				selected_popup_amination_function = upc_selected_popup + "_animation";
			window[selected_popup_amination_function]();
				
			},$('#wpappp-show-popup-after').val());
			$.removeCookie('wpappp_popup_cookie');
		}else{
			
			selected_popup_amination_function = upc_selected_popup + "_animation";
			window[selected_popup_amination_function]();

			$.removeCookie('wpappp_popup_cookie');
		}
	}
	if($('#wpappp-auto-close-popup').val() != ''){
		setTimeout(function(){
			$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
		},$('#wpappp-auto-close-popup').val());
	}
	$('#wpappp_popup_close_button').click(function (){
		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpup-popup6-info').click(function (){
  		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpup-popup7-close-note').click(function (){
  		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpup-popup8-close-text').click(function (){
  		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpup-popup9-close-text').click(function (){
  		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpup-popup10-button2').click(function (){
  		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpup-popup11-close-text').click(function (){
  		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpappp-popup15-yesbtn').click(function (){
		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});
	$('#wpappp-popup16-yesbtn').click(function (){
		$('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
	});

	document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = evt.key == "Escape";
    } else {
        isEscape = evt.keyCode == 27;
    }
    if (isEscape) {
        $('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
    }
};



jQuery("#wpappp-popup15-nobtn").click(function(){
	if ($('#wpappp_redirect_popup15').val() == '') {

		location.href = 'http://www.google.com';

	}
	else{
		 var redirect_url = $('#wpappp_redirect_popup15').val();
  		location.href = redirect_url;
	}
 

});

jQuery("#wpappp-popup16-nobtn").click(function(){
	if ($('#wpappp_redirect_popup16').val() == '') {

		location.href = 'http://www.google.com';

	}
	else{
		 var redirect_url = $('#wpappp_redirect_popup16').val();
  		location.href = redirect_url;
	}
 

});


});
