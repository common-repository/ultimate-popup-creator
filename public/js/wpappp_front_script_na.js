
jQuery(document).ready(function($){

	if($('#wpappp-show-popup').val() == 'once'){
		if($.cookie('wpappp_popup_cookie') != 'seen'){
		if($('#wpappp-show-popup-after').val() != ''){
			setTimeout(function(){
				$('.wpappp_popup_wrapper_container').fadeIn( "slow",function (){
            $('.wpappp_popup_wrapper_container').show();
          } );
			},$('#wpappp-show-popup-after').val());
			if($('#wpappp-cookie-expire-time').val() != '')
				{$.cookie('wpappp_popup_cookie','seen', { expires: parseInt($('#wpappp-cookie-expire-time').val() )});}
			else
				{$.cookie('wpappp_popup_cookie','seen');}
		}else{
			$('.wpappp_popup_wrapper_container').fadeIn( "slow",function (){
            $('.wpappp_popup_wrapper_container').show();
          } );
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
				$('.wpappp_popup_wrapper_container').fadeIn( "slow",function (){
            $('.wpappp_popup_wrapper_container').show();
          } );
			},$('#wpappp-show-popup-after').val());
			$.removeCookie('wpappp_popup_cookie');
		}else{
			$('.wpappp_popup_wrapper_container').fadeIn( "slow",function (){
            $('.wpappp_popup_wrapper_container').show();
          } );
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
});
