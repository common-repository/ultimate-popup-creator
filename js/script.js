jQuery(document).ready(function($){
  $('.wpappp_image_uploader').click(function(e) {
    e.preventDefault();
    var image = wp.media({ 
      title: 'Upload Image',
// mutiple: true if you want to upload multiple files at once
multiple: false
}).open()
    .on('select', function(e){
// This will return the selected image from the Media Uploader, the result is an object
var uploaded_image = image.state().get('selection').first();
// We convert uploaded_image to a JSON object to make accessing it easier
// Output to the console uploaded_image
console.log(uploaded_image);
var image_url = uploaded_image.toJSON().url;
// Let's assign the url value to the input field

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1'){

  $('#wpappp-popup1-image-url').val(image_url);
  $("#wpappp-popup1-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup1bgurl = $('#wpappp-popup1-image-url').val()
  $('#wpup-popup1-container').css('background-image','url('+popup1bgurl+')');
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2'){
  $('#wpappp-popup2-image-url').val(image_url);
  $("#wpappp-popup2-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup2bgurl = $('#wpappp-popup2-image-url').val();
  $('#wpappp-popup2-image1').attr('src', popup2bgurl);
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3'){
  $('#wpappp-popup3-image-url').val(image_url);
  $("#wpappp-popup3-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup3bgurl = $('#wpappp-popup3-image-url').val()
  $('#wpup-popup3-background-image').css('background-image','url('+popup3bgurl+')');
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4'){
  $('#wpappp-popup4-image-url').val(image_url);
  $("#wpappp-popup4-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup4bgurl = $('#wpappp-popup4-image-url').val()
  $('#wpup-popup4-container').css('background-image','url('+popup4bgurl+')');
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5'){
  $('#wpappp-popup5-image-url').val(image_url);
  $("#wpappp-popup5-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup5bgurl = $('#wpappp-popup5-image-url').val()
  $('#wpup-popup5-center-content-left').css('background-image','url('+popup5bgurl+')');
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6'){
  $('#wpappp-popup6-image-url').val(image_url);
  $("#wpappp-popup6-url-image").attr({
    src: image_url,
    width: 200
  });
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7'){
  $('#wpappp-popup7-image-url').val(image_url);
  $("#wpappp-popup7-url-image").attr({
    src: image_url,
    width: 200
  });
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8'){
  $('#wpappp-popup8-image-url').val(image_url);
  $("#wpappp-popup8-url-image").attr({
    src: image_url,
    width: 200
  });
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9'){
  $('#wpappp-popup9-image-url').val(image_url);
  $("#wpappp-popup9-url-image").attr({
    src: image_url,
    width: 200
  });
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10'){
  $('#wpappp-popup10-image-url').val(image_url);
  $("#wpappp-popup10-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup10bgurl = $('#wpappp-popup10-image-url').val()
  $('#wpup-popup10-info-image').attr('src',popup10bgurl);
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11'){
  $('#wpappp-popup11-image-url').val(image_url);
  $("#wpappp-popup11-url-image").attr({
    src: image_url,
    width: 200
  });
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12'){
  $('#wpappp-popup12-image-url').val(image_url);
  $("#wpappp-popup12-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup12bgurl = $('#wpappp-popup12-image-url').val()
  $('#wpup-popup12-container').css('background-image','url('+popup12bgurl+')');
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13'){
  $('#wpappp-popup13-image-url').val(image_url);
  $("#wpappp-popup13-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup13bgurl = $('#wpappp-popup13-image-url').val()
  $('#wpup-popup13-left-content').css('background-image','url('+popup13bgurl+')');
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14'){
  $('#wpappp-popup14-image-url').val(image_url);
  $("#wpappp-popup14-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup14bgurl = $('#wpappp-popup14-image-url').val()
  $('#wpup-popup14-header-image').css('background-image','url('+popup14bgurl+')');
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15'){
  $('#wpappp-popup15-image-url').val(image_url);
  $("#wpappp-popup15-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup15bgurl = $('#wpappp-popup15-image-url').val()
  $('#wpappp-popup15-leftcontent').css('background-image','url('+popup15bgurl+')');
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16'){
  $('#wpappp-popup16-image-url').val(image_url);
  $("#wpappp-popup16-url-image").attr({
    src: image_url,
    width: 200
  });
  var popup16bgurl = $('#wpappp-popup16-image-url').val()
  $('#wpappp-popup16-container').css('background-image','url('+popup16bgurl+')');
}


});
});

var selecteduserpopup = $('#wpappp-popup-selected-popup').val();
$('#wpappp-'+selecteduserpopup).show();

$('#wpappp-popup-select-theme').change(function(){
  var selectedpopup = $('select#wpappp-popup-select-theme option:selected').val();
  $("#wpappp-popup-selected-popup").val(selectedpopup);
  for(var i = 1 ; i < 17; i++){
    $('#wpappp-popup'+i).hide();
  }

  if( selectedpopup == 'popup1'){

    if($( "#wpappp-popup1-width").val() != ''){
      $( "#wpup-popup1-container" ).css( "width",$( "#wpappp-popup1-width").val());
    }

    if($('#wpappp-popup1-image-url').val() != ''){
      var popup1bgurl = $('#wpappp-popup1-image-url').val()
      $('#wpup-popup1-container').css('background-image','url('+popup1bgurl+')');
    }

    if($("#wpappp-popup1-heading-text").val() != ''){
      $('#wpup-popup1-heading1').html($("#wpappp-popup1-heading-text").val());
    }

    if($('#wpappp-popup1-heading-text-color').val() != ''){
      $('#wpup-popup1-heading1').css('color',$('#wpappp-popup1-heading-text-color').val());
    }

    if($('#wpappp-popup1-heading-font-size :selected').text() != ''){
      $('#wpup-popup1-heading1').css('font-size',$('#wpappp-popup1-heading-font-size :selected').text());
    }

    if($('#wpappp-popup1-seperator-color').val() != ''){
      $('#line-break').css('background-color',$('#wpappp-popup1-seperator-color').val());
    }

    if($("#wpappp-popup1-subheading-text").val() != ''){
      $('#wpup-popup1-heading2').html($("#wpappp-popup1-subheading-text").val());
    }

    if($('#wpappp-popup1-subheading-text-color').val() != ''){
      $('#wpup-popup1-heading2').css('color',$('#wpappp-popup1-subheading-text-color').val());
    }

    if($('#wpappp-popup1-subheading-font-size :selected').text() != ''){
      $('#wpup-popup1-heading2').css('font-size',$('#wpappp-popup1-subheading-font-size :selected').text());
    }

    if($('#wpappp-popup1-text-field-border-color').val() != ''){
      $('.wpappp-popup1-border-color').css('border','1px solid '+$('#wpappp-popup1-text-field-border-color').val());
    }

    if($("#wpappp-popup1-name-text-placeholder").val() != ''){
      $('#wpup-popup1-name-text').attr('placeholder' , $("#wpappp-popup1-name-text-placeholder").val());
    }

    if($("#wpappp-popup1-email-text-placeholder").val() != ''){
      $('#wpup-popup1-email-text').attr('placeholder' , $("#wpappp-popup1-email-text-placeholder").val());
    }

    if($('#wpappp-popup1-action-button-background-color').val() != ''){
      $('#wpup-popup1-subscribe-button').css('background-color', $('#wpappp-popup1-action-button-background-color').val());
    }

    if($("#wpappp-popup1-action-button-text").val() !=''){
      $('#wpup-popup1-subscribe-button').attr('value' , $("#wpappp-popup1-action-button-text").val());
    }

    if($('#wpappp-popup1-action-button-text-color').val() !=''){
      $('#wpup-popup1-subscribe-button').css('color', $('#wpappp-popup1-action-button-text-color').val());
    }

    if($("#wpappp-popup1-security-note-text").val() !=''){
      $('#wpup-popup1-security-note-text').html($("#wpappp-popup1-security-note-text").val());
    }

    if($('#wpappp-popup1-security-note-text-color').val() !=''){
      $('#wpup-popup1-security-note-text').css('color', $('#wpappp-popup1-security-note-text-color').val());
    }

  }

  if( selectedpopup == 'popup2'){
    if($( "#wpappp-popup2-width").val() !='')
      {$( "#wpup-popup2-container" ).css( "width",$( "#wpappp-popup2-width").val());}

    if($('#wpappp-popup2-background-color').val() !='')
      {$('#wpup-popup2-container-top').css('background-color',$('#wpappp-popup2-background-color').val());}
    if($('#wpappp-popup2-background-color').val() !='')
      {$('#wpappp-popup2-triangle-down').css('border-top','30px solid '+$('#wpappp-popup2-background-color').val());}
    if($('#wpappp-popup2-background-color').val() !='')
      {$('#wpup-popup2-container').css('border-bottom','5px solid '+$('#wpappp-popup2-background-color').val());}
    if($('#wpappp-popup2-image-url').val() !='')
      {var popup2bgurl = $('#wpappp-popup2-image-url').val();
    $('#wpappp-popup2-image1').attr('src', popup2bgurl);
  }
  if($("#wpappp-popup2-heading-text").val()!='')
    {$('#wpup-popup2-heading1').html($("#wpappp-popup2-heading-text").val());}
  if($('#wpappp-popup2-heading-text-color').val()!='')
    {$('#wpup-popup2-heading1').css('color',$('#wpappp-popup2-heading-text-color').val());}
  if($('#wpappp-popup2-heading-font-size :selected').text()!='')
    {$('#wpup-popup2-heading1').css('font-size',$('#wpappp-popup2-heading-font-size :selected').text());}
  if($("#wpappp-popup2-subheading1-text").val()!='')
    {$('#wpup-popup2-subheading1').html($("#wpappp-popup2-subheading1-text").val());}
  if($('#wpappp-popup2-subheading1-text-color').val()!='')
    { $('#wpup-popup2-subheading1').css('color',$('#wpappp-popup2-subheading1-text-color').val());}
  if($('#wpappp-popup2-subheading1-font-size :selected').text()!='')
    { $('#wpup-popup2-subheading1').css('font-size',$('#wpappp-popup2-subheading1-font-size :selected').text());}
  if($("#wpappp-popup2-subheading2-text").val()!='')
    {$('#wpup-popup2-subheading2').html($("#wpappp-popup2-subheading2-text").val());}
  if($('#wpappp-popup2-subheading2-text-color').val()!='')
    {$('#wpup-popup2-subheading2').css('color',$('#wpappp-popup2-subheading2-text-color').val());}
  if($('#wpappp-popup2-subheading2-font-size :selected').text()!='')
    {$('#wpup-popup2-subheading2').css('font-size',$('#wpappp-popup2-subheading2-font-size :selected').text());}
  if($("#wpappp-popup2-name-text-placeholder").val()!='')
    {$('#wpup-popup2-name-text').attr('placeholder' , $("#wpappp-popup2-name-text-placeholder").val());}
  if($("#wpappp-popup2-email-text-placeholder").val()!='')
    {$('#wpup-popup2-email-text').attr('placeholder' , $("#wpappp-popup2-email-text-placeholder").val());}
  if($('#wpappp-popup2-action-button-background-color').val()!='')
    {$('#wpup-popup2-subscribe-button').css('background-color', $('#wpappp-popup2-action-button-background-color').val());}
  if($("#wpappp-popup2-action-button-text").val()!='')
    {$('#wpup-popup2-subscribe-button').attr('value' , $("#wpappp-popup2-action-button-text").val());}
  if($('#wpappp-popup2-action-button-text-color').val()!='')
    { $('#wpup-popup2-subscribe-button').css('color', $('#wpappp-popup2-action-button-text-color').val());}
  if($('#wpappp-popup2-action-button-border-shadow-color').val()!='')
    {$('#wpup-popup2-subscribe-button').css('box-shadow','5px 2px 5px '+$('#wpappp-popup2-action-button-border-shadow-color').val());}
  if($("#wpappp-popup2-security-note-text").val()!='')
    {$('#wpup-popup2-security-note-text').html($("#wpappp-popup2-security-note-text").val());}
  if( $('#wpappp-popup2-security-note-text-color').val()!='')
    {$('#wpup-popup2-security-note-text').css('color', $('#wpappp-popup2-security-note-text-color').val());}

}
if( selectedpopup == 'popup3'){
  if($( "#wpappp-popup3-width").val()!='')
    {$( "#wpup-popup3-container" ).css( "width",$( "#wpappp-popup3-width").val());}
  if($('#wpappp-popup3-background-color').val()!='')
    {$('#wpup-popup3-container-top').css('background-color',$('#wpappp-popup3-background-color').val());}
  if($('#wpappp-popup3-image-url').val()!='')
    {var popup3bgurl = $('#wpappp-popup3-image-url').val();
  $('#wpup-popup3-background-image').css('background-image','url('+popup3bgurl+')');}
  if($("#wpappp-popup3-heading-text").val()!='')
    {$('#wpup-popup3-heading1').html($("#wpappp-popup3-heading-text").val());}
  if($('#wpappp-popup3-heading-text-color').val()!='')
    {$('#wpup-popup3-heading1').css('color',$('#wpappp-popup3-heading-text-color').val());}
  if($('#wpappp-popup3-heading-font-size :selected').text()!='')
    {$('#wpup-popup3-heading1').css('font-size',$('#wpappp-popup3-heading-font-size :selected').text());}
  if($("#wpappp-popup3-subheading1-text").val()!='')
    {$('#wpup-popup3-subheading1').html($("#wpappp-popup3-subheading1-text").val());}
  if($('#wpappp-popup3-subheading1-text-color').val()!='')
    {$('#wpup-popup3-subheading1').css('color',$('#wpappp-popup3-subheading1-text-color').val());}
  if($('#wpappp-popup3-subheading1-font-size :selected').text()!='')
    {$('#wpup-popup3-subheading1').css('font-size',$('#wpappp-popup3-subheading1-font-size :selected').text());}
  if($("#wpappp-popup3-subheading2-text").val()!='')
    {$('#wpup-popup3-subheading2').html($("#wpappp-popup3-subheading2-text").val());}
  if($('#wpappp-popup3-subheading2-text-color').val()!='')
    {$('#wpup-popup3-subheading2').css('color',$('#wpappp-popup3-subheading2-text-color').val());}
  if($('#wpappp-popup3-subheading2-font-size :selected').text()!='')
    {$('#wpup-popup3-subheading2').css('font-size',$('#wpappp-popup3-subheading2-font-size :selected').text());}
  if($('#wpappp-popup3-form-background-color').val()!='')
    {$('#wpup-popup3-container-middle').css('background-color',$('#wpappp-popup3-form-background-color').val());}
  if($("#wpappp-popup3-name-text-placeholder").val()!='')
    {$('#wpup-popup3-name-text').attr('placeholder' , $("#wpappp-popup3-name-text-placeholder").val());}
  if($("#wpappp-popup3-email-text-placeholder").val()!='')
    {$('#wpup-popup3-email-text').attr('placeholder' , $("#wpappp-popup3-email-text-placeholder").val());}
  if($('#wpappp-popup3-action-button-background-color').val()!='')
    {$('#wpup-popup3-subscribe-button').css('background-color', $('#wpappp-popup3-action-button-background-color').val());}
  if($("#wpappp-popup3-action-button-text").val()!='')
    {$('#wpup-popup3-subscribe-button').attr('value' , $("#wpappp-popup3-action-button-text").val());}
  if($('#wpappp-popup3-action-button-text-color').val()!='')
    {$('#wpup-popup3-subscribe-button').css('color', $('#wpappp-popup3-action-button-text-color').val());}
  if($("#wpappp-popup3-security-note-text").val()!='')
    {$('#wpup-popup3-security-note-text').html($("#wpappp-popup3-security-note-text").val());}
  if($('#wpappp-popup3-security-note-text-color').val()!='')
    { $('#wpup-popup3-security-note-text').css('color', $('#wpappp-popup3-security-note-text-color').val());}
  if($('#wpappp-popup3-security-note-background-color').val()!='')
    {$('#wpup-popup3-security-note-container').css('background-color', $('#wpappp-popup3-security-note-background-color').val());}
}

if( selectedpopup == 'popup4'){
  if($( "#wpappp-popup4-width").val()!='')
    {$( "#wpup-popup4-container" ).css( "width",$( "#wpappp-popup4-width").val());}
  if($('#wpappp-popup4-background-color').val()!='')
    {$('#wpup-popup4-container').css('background-color',$('#wpappp-popup4-background-color').val());}
  if($('#wpappp-popup4-image-url').val()!='')
    {var popup4bgurl = $('#wpappp-popup4-image-url').val();
  $('#wpup-popup4-container').css('background-image','url('+popup4bgurl+')');}
  if($("#wpappp-popup4-heading-text").val()!='')
    {$('#wpup-popup4-heading1').html($("#wpappp-popup4-heading-text").val());}
  if($('#wpappp-popup4-heading-text-color').val()!='')
    {$('#wpup-popup4-heading1').css('color',$('#wpappp-popup4-heading-text-color').val());}
  if($('#wpappp-popup4-heading-font-size :selected').text()!='')
    {$('#wpup-popup4-heading1').css('font-size',$('#wpappp-popup4-heading-font-size :selected').text());}
  if($("#wpappp-popup4-subheading1-text").val()!='')
    {$('#wpup-popup4-heading2').html($("#wpappp-popup4-subheading1-text").val());}
  if($('#wpappp-popup4-subheading1-text-color').val()!='')
    {$('#wpup-popup4-heading2').css('color',$('#wpappp-popup4-subheading1-text-color').val());}
  if($('#wpappp-popup4-subheading1-font-size :selected').text()!='')
    {$('#wpup-popup4-heading2').css('font-size',$('#wpappp-popup4-subheading1-font-size :selected').text());}
    if($("#wpappp-popup4-subheading2-text").val()!='')
      {$('#wpup-popup4-subheading1').html($("#wpappp-popup4-subheading2-text").val());}
    if($('#wpappp-popup4-subheading2-text-color').val()!='')
      {$('#wpup-popup4-subheading1').css('color',$('#wpappp-popup4-subheading2-text-color').val());}
    if($('#wpappp-popup4-subheading1-font-size :selected').text()!='')
      {$('#wpup-popup4-subheading1').css('font-size',$('#wpappp-popup4-subheading1-font-size :selected').text());}
    if($('#wpappp-popup4-form-background-color').val()!='')
      {$('#wpup-popup4-center-content').css('background-color',$('#wpappp-popup4-form-background-color').val());}
    if($("#wpappp-popup4-name-text-placeholder").val()!='')
      {$('#wpup-popup4-label-name').html($("#wpappp-popup4-name-text-placeholder").val());}
    if($("#wpappp-popup4-email-text-placeholder").val()!='')
      {$('#wpup-popup4-label-email').html($("#wpappp-popup4-email-text-placeholder").val());}
    if($('#wpappp-popup4-action-button-background-color').val()!='')
      {$('#wpup-popup4-subscribe-button').css('background-color', $('#wpappp-popup4-action-button-background-color').val());}
    if($("#wpappp-popup4-action-button-text").val()!='')
      {$('#wpup-popup4-subscribe-button').attr('value' , $("#wpappp-popup4-action-button-text").val());}
    if($('#wpappp-popup4-action-button-text-color').val()!='')
      {$('#wpup-popup4-subscribe-button').css('color', $('#wpappp-popup4-action-button-text-color').val());}
    if($('#wpappp-popup4-action-button-border-shadow-color').val()!='')
      {$('#wpup-popup4-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup4-action-button-border-shadow-color').val());}
    if($("#wpappp-popup4-security-note-text").val()!='')
      {$('#wpup-popup4-security-note-text').html($("#wpappp-popup4-security-note-text").val());}
    if($('#wpappp-popup4-security-note-text-color').val()!='')
      {$('#wpup-popup4-security-note-text').css('color', $('#wpappp-popup4-security-note-text-color').val());}
  }

  if( selectedpopup == 'popup5'){
    if($( "#wpappp-popup5-width").val()!='')
      {$( "#wpup-popup5-container" ).css( "width",$( "#wpappp-popup5-width").val());}
    if($('#wpappp-popup5-image-url').val()!='')
      {var popup5bgurl = $('#wpappp-popup5-image-url').val();
    $('#wpup-popup5-center-content-left').css('background-image','url('+popup5bgurl+')');}
    if($('#wpappp-popup5-background-color').val()!='')
      {$('#wpup-popup5-container').css('background-color',$('#wpappp-popup5-background-color').val());}
    if($('#wpappp-popup5-background-color').val()!='')
      {$('#wpup-popup5-container').css('border-bottom','5px solid'+$('#wpappp-popup5-background-color').val());}
    if($("#wpappp-popup5-heading-text").val()!='')
      {$('#wpup-popup5-header').html($("#wpappp-popup5-heading-text").val());}
    if($('#wpappp-popup5-heading-text-color').val()!='')
      {$('#wpup-popup5-header').css('color',$('#wpappp-popup5-heading-text-color').val());}
    if($('#wpappp-popup5-heading-font-size :selected').text()!='')
      {$('#wpup-popup5-header').css('font-size',$('#wpappp-popup5-heading-font-size :selected').text());}
    if($("#wpappp-popup5-subheading-text").val()!='')
      {$('#wpup-popup5-subheader').html($("#wpappp-popup5-subheading-text").val());}
    if($('#wpappp-popup5-subheading-text-color').val()!='')
      {$('#wpup-popup5-subheader').css('color',$('#wpappp-popup5-subheading-text-color').val());}
    if($('#wpappp-popup5-subheading-font-size :selected').text()!='')
      {$('#wpup-popup5-subheader').css('font-size',$('#wpappp-popup5-subheading-font-size :selected').text());}
    if($("#wpappp-popup5-name-text-placeholder").val()!='')
      {$('#wpup-popup5-name-text').attr('placeholder' , $("#wpappp-popup5-name-text-placeholder").val());}
    if($("#wpappp-popup5-email-text-placeholder").val()!='')
      {$('#wpup-popup5-email-text').attr('placeholder' , $("#wpappp-popup5-email-text-placeholder").val());}
    if($('#wpappp-popup5-action-button-background-color').val()!='')
      {$('#wpup-popup5-subscribe-button').css('background-color', $('#wpappp-popup5-action-button-background-color').val());}
    if($("#wpappp-popup5-action-button-text").val()!='')
      { $('#wpup-popup5-subscribe-button').attr('value' , $("#wpappp-popup5-action-button-text").val());}
    if($('#wpappp-popup5-action-button-text-color').val()!='')
      {$('#wpup-popup5-subscribe-button').css('color', $('#wpappp-popup5-action-button-text-color').val());}
    if($('#wpappp-popup5-action-button-border-shadow-color').val()!='')
      { $('#wpup-popup5-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup5-action-button-border-shadow-color').val());}
    if($("#wpappp-popup5-security-note-text").val()!='')
      {$('#wpup-popup5-security-note-text').html($("#wpappp-popup5-security-note-text").val());}
    if( $('#wpappp-popup5-security-note-text-color').val()!='')
      {$('#wpup-popup5-security-note-text').css('color', $('#wpappp-popup5-security-note-text-color').val());}
  }

  if( selectedpopup == 'popup6'){
    if($( "#wpappp-popup6-width").val()!='')
      {$( "#wpup-popup6-container" ).css( "width",$( "#wpappp-popup6-width").val());}
    if($('#wpappp-popup6-background-color').val()!='')
      {$('#wpup-popup6-container').css('background-color',$('#wpappp-popup6-background-color').val());}
    if($("#wpappp-popup6-heading-text").val()!='')
      {$('#wpup-popup6-heading').html($("#wpappp-popup6-heading-text").val());}
    if($('#wpappp-popup6-heading-text-color').val()!='')
      {$('#wpup-popup6-heading').css('color',$('#wpappp-popup6-heading-text-color').val());}
    if($('#wpappp-popup6-heading-font-size :selected').text()!='')
      { $('#wpup-popup6-heading').css('font-size',$('#wpappp-popup6-heading-font-size :selected').text());}
    if($("#wpappp-popup6-name-text-placeholder").val()!='')
      {$('#wpup-popup6-name-text').attr('placeholder' , $("#wpappp-popup6-name-text-placeholder").val());}
    if($("#wpappp-popup6-email-text-placeholder").val()!='')
      {$('#wpup-popup6-email-text').attr('placeholder' , $("#wpappp-popup6-email-text-placeholder").val());}
    if( $('#wpappp-popup6-action-button-background-color').val()!='')
      {$('#wpup-popup6-subscribe-button').css('background-color', $('#wpappp-popup6-action-button-background-color').val());}
    if($("#wpappp-popup6-action-button-text").val()!='')
      {$('#wpup-popup6-subscribe-button').attr('value' , $("#wpappp-popup6-action-button-text").val());}
    if($('#wpappp-popup6-action-button-text-color').val()!='')
      {$('#wpup-popup6-subscribe-button').css('color', $('#wpappp-popup6-action-button-text-color').val());}
    if($('#wpappp-popup6-action-button-border-color').val()!='')
      {$('#wpup-popup6-subscribe-button').css('border-bottom','5px solid'+$('#wpappp-popup6-action-button-border-color').val());}
    if($("#wpappp-popup6-close-note-text").val()!='')
      {$('#wpup-popup6-info').html($("#wpappp-popup6-close-note-text").val());}
    if($('#wpappp-popup6-close-note-text-color').val()!='')
      {$('#wpup-popup6-info').css('color', $('#wpappp-popup6-close-note-text-color').val());}

  }

  if( selectedpopup == 'popup7'){
    if($( "#wpappp-popup7-width").val()!='')
      {$( "#wpup-popup7-container" ).css( "width",$( "#wpappp-popup7-width").val());}
    if($('#wpappp-popup7-background-color').val()!='')
      {$('#wpup-popup7-container').css('background-color',$('#wpappp-popup7-background-color').val());}
    if($("#wpappp-popup7-heading-text").val()!='')
      {$('#wpup-popup7-heading1').html($("#wpappp-popup7-heading-text").val());}
    if($('#wpappp-popup7-heading-text-color').val()!='')
      {$('#wpup-popup7-heading1').css('color',$('#wpappp-popup7-heading-text-color').val());}
    if($('#wpappp-popup7-heading-font-size :selected').text()!='')
      {$('#wpup-popup7-heading1').css('font-size',$('#wpappp-popup7-heading-font-size :selected').text());}
    if($("#wpappp-popup7-subheading-text").val()!='')
      {$('#wpup-popup7-heading2').html($("#wpappp-popup7-subheading-text").val());}
    if($('#wpappp-popup7-subheading-text-color').val()!='')
      {$('#wpup-popup7-heading2').css('color',$('#wpappp-popup7-subheading-text-color').val());}
    if($('#wpappp-popup7-subheading-font-size :selected').text()!='')
      {$('#wpup-popup7-heading2').css('font-size',$('#wpappp-popup7-subheading-font-size :selected').text());}
    if($("#wpappp-popup7-email-text-placeholder").val()!='')
      {$('#wpup-popup7-email-text').attr('placeholder' , $("#wpappp-popup7-email-text-placeholder").val());}
    if($('#wpappp-popup7-text-field-border-color').val()!='')
      {$('#wpup-popup7-email-text').css('border','1px solid'+$('#wpappp-popup7-text-field-border-color').val());}
    if($('#wpappp-popup7-action-button-background-color').val()!='')
      {$('#wpup-popup7-button').css('background-color', $('#wpappp-popup7-action-button-background-color').val());}
    if($('#wpappp-popup7-action-button-background-color').val()!='')
      {$('#wpup-popup7-container').css('border-left','5px solid'+$('#wpappp-popup7-action-button-background-color').val());}
    if($("#wpappp-popup7-close-note-text").val()!='')
      {$('#wpup-popup7-close-note').html($("#wpappp-popup7-close-note-text").val());}
    if($('#wpappp-popup7-close-note-text-color').val()!='')
      {$('#wpup-popup7-close-note').css('color', $('#wpappp-popup7-close-note-text-color').val());}
  }

  if( selectedpopup == 'popup8'){
    if($( "#wpappp-popup8-width").val()!='')
      {$( "#wpup-popup8-container" ).css( "width",$( "#wpappp-popup8-width").val());}
    if($('#wpappp-popup8-background-color').val()!='')
      {$('#wpup-popup8-container').css('background-color',$('#wpappp-popup8-background-color').val());}
    if($("#wpappp-popup8-heading-text").val()!='')
      {$('#wpup-popup8-heading1').html($("#wpappp-popup8-heading-text").val());}
    if($('#wpappp-popup8-heading-text-color').val()!='')
      {$('#wpup-popup8-heading1').css('color',$('#wpappp-popup8-heading-text-color').val());}
    if($('#wpappp-popup8-heading-font-size :selected').text()!='')
      {$('#wpup-popup8-heading1').css('font-size',$('#wpappp-popup8-heading-font-size :selected').text());}
    if($("#wpappp-popup8-subheading-text").val()!='')
      {$('#wpup-popup8-heading2').html($("#wpappp-popup8-subheading-text").val());}
    if($('#wpappp-popup8-subheading-text-color').val()!='')
      {$('#wpup-popup8-heading2').css('color',$('#wpappp-popup8-subheading-text-color').val());}
    if($('#wpappp-popup8-subheading-font-size :selected').text()!='')
      {$('#wpup-popup8-heading2').css('font-size',$('#wpappp-popup8-subheading-font-size :selected').text());}
    if($("#wpappp-popup8-subheading2-text").val()!='')
{$('#wpup-popup8-subheading').html($("#wpappp-popup8-subheading2-text").val());}
if($('#wpappp-popup8-subheading2-text-color').val()!='')
  {$('#wpup-popup8-subheading').css('color',$('#wpappp-popup8-subheading2-text-color').val());}
if($('#wpappp-popup8-subheading2-font-size :selected').text()!='')
  {$('#wpup-popup8-subheading').css('font-size',$('#wpappp-popup8-subheading2-font-size :selected').text());}
if($("#wpappp-popup8-email-text-placeholder").val()!='')
  {$('#wpup-popup8-email-text').attr('placeholder' , $("#wpappp-popup8-email-text-placeholder").val());}
if($('#wpappp-popup8-action-button-background-color').val()!='')
  { $('#wpup-popup8-button').css('background-color', $('#wpappp-popup8-action-button-background-color').val());}
if($("#wpappp-popup8-action-button-text").val()!='')
  {$('#wpup-popup8-button').attr('value' , $("#wpappp-popup8-action-button-text").val());}
if($("#wpappp-popup8-action-button-text-color").val()!='')
  {$('#wpup-popup8-button').css('color', $("#wpappp-popup8-action-button-text-color").val());}
if($("#wpappp-popup8-close-note-text").val()!='')
  {$('#wpup-popup8-close-text').html($("#wpappp-popup8-close-note-text").val());}
if($('#wpappp-popup8-close-note-text-color').val()!='')
  {$('#wpup-popup8-close-text').css('color', $('#wpappp-popup8-close-note-text-color').val());}
}

if( selectedpopup == 'popup9'){
  if($( "#wpappp-popup9-width").val()!='')
    {$( "#wpup-popup9-container" ).css( "width",$( "#wpappp-popup9-width").val());}
  if($('#wpappp-popup9-background-color-top').val()!='')
    { $('#wpup-popup9-container').css('background-color',$('#wpappp-popup9-background-color-top').val());}
  if($("#wpappp-popup9-heading-text").val()!='')
    {$('#wpup-popup9-heading1').html($("#wpappp-popup9-heading-text").val());}
  if($('#wpappp-popup9-heading-text-color').val()!='')
    {$('#wpup-popup9-heading1').css('color',$('#wpappp-popup9-heading-text-color').val());}
  if($('#wpappp-popup9-heading-font-size :selected').text()!='')
    {$('#wpup-popup9-heading1').css('font-size',$('#wpappp-popup9-heading-font-size :selected').text());}
  if($('#wpappp-popup9-seperator-color').val()!='')
    {$('#wpup-popup9-top-content').css('border-bottom','5px solid'+$('#wpappp-popup9-seperator-color').val());}
  if($('#wpappp-popup9-background-color-bottom').val()!='')
    {$('#wpup-popup9-middle-content').css('background-color',$('#wpappp-popup9-background-color-bottom').val());}
  if($("#wpappp-popup9-subheading-text").val()!='')
    {$('#wpup-popup9-main-text').html($("#wpappp-popup9-subheading-text").val());}
  if($('#wpappp-popup9-subheading-text-color').val()!='')
    {$('#wpup-popup9-main-text').css('color',$('#wpappp-popup9-subheading-text-color').val());}
  if($('#wpappp-popup9-subheading-font-size :selected').text()!='')
    {$('#wpup-popup9-main-text').css('font-size',$('#wpappp-popup9-subheading-font-size :selected').text());}
  if($("#wpappp-popup9-email-text-placeholder").val()!='')
    { $('#wpup-popup9-email-text').attr('placeholder' , $("#wpappp-popup9-email-text-placeholder").val());}
  if($('#wpappp-popup9-action-button-background-color').val()!='')
    { $('#wpup-popup9-button').css('background-color', $('#wpappp-popup9-action-button-background-color').val());}
  if($("#wpappp-popup9-action-button-text").val()!='')
    {$('#wpup-popup9-button').attr('value' , $("#wpappp-popup9-action-button-text").val());}
  if($("#wpappp-popup9-action-button-text-color").val()!='')
    {$('#wpup-popup9-button').css('color', $("#wpappp-popup9-action-button-text-color").val());}
  if($("#wpappp-popup9-privacy-text").val()!='')
    {$('#wpup-popup9-privacy-text').html($("#wpappp-popup9-privacy-text").val());}
  if($('#wpappp-popup9-privacy-text-color').val()!='')
    {$('#wpup-popup9-privacy-text').css('color', $('#wpappp-popup9-privacy-text-color').val());}
  if($("#wpappp-popup9-close-note-text").val()!='')
    {$('#wpup-popup9-close-text').html($("#wpappp-popup9-close-note-text").val());}
  if($('#wpappp-popup9-close-note-text-color').val()!='')
    {$('#wpup-popup9-close-text').css('color', $('#wpappp-popup9-close-note-text-color').val());}
}

if( selectedpopup == 'popup10'){
  if($( "#wpappp-popup10-width").val()!='')
    {$( "#wpup-popup10-container" ).css( "width",$( "#wpappp-popup10-width").val());}
  if($('#wpappp-popup10-background-color-top').val()!='')
    {$('#wpup-popup10-top-content').css('background-color',$('#wpappp-popup10-background-color-top').val());}
  if($("#wpappp-popup10-heading-text").val()!='')
    {$('#wpup-popup10-heading1').html($("#wpappp-popup10-heading-text").val());}
  if($('#wpappp-popup10-heading-text-color').val()!='')
    {$('#wpup-popup10-heading1').css('color',$('#wpappp-popup10-heading-text-color').val());}
  if($('#wpappp-popup10-heading-font-size :selected').text()!='')
    {$('#wpup-popup10-heading1').css('font-size',$('#wpappp-popup10-heading-font-size :selected').text());}
  if($('#wpappp-popup10-image-url').val()!='')
    {var popup10bgurl = $('#wpappp-popup10-image-url').val();
  $('#wpup-popup10-info-image').attr('src',popup10bgurl);}
  if($('#wpappp-popup10-background-color-bottom').val()!='')
    {$('#wpup-popup10-middle-content').css('background-color',$('#wpappp-popup10-background-color-bottom').val());}
  if($("#wpappp-popup10-subheading-text").val()!='')
    {$('#wpup-popup10-main-text').html($("#wpappp-popup10-subheading-text").val());}
  if($('#wpappp-popup10-subheading-text-color').val()!='')
    { $('#wpup-popup10-main-text').css('color',$('#wpappp-popup10-subheading-text-color').val());}
  if($('#wpappp-popup10-subheading-font-size :selected').text()!='')
    {$('#wpup-popup10-main-text').css('font-size',$('#wpappp-popup10-subheading-font-size :selected').text());}
  if($('#wpappp-popup10-action-button-background-color').val()!='')
    {$('#wpup-popup10-button1').css('background-color', $('#wpappp-popup10-action-button-background-color').val());}
  if($("#wpappp-popup10-action-button-text").val()!='')
    {$('#wpup-popup10-button1').attr('value' , $("#wpappp-popup10-action-button-text").val())};
  if($("#wpappp-popup10-action-button-text-color").val()!='')
    {$('#wpup-popup10-button1').css('color', $("#wpappp-popup10-action-button-text-color").val());}
  if($("#wpappp-popup10-close-note-text").val()!='')
    {$('#wpup-popup10-button2').attr('value', $("#wpappp-popup10-close-note-text").val());}
  if($('#wpappp-popup10-close-note-text-color').val()!='')
    {$('#wpup-popup10-button2').css('color', $('#wpappp-popup10-close-note-text-color').val());}
}

if( selectedpopup == 'popup11'){
  if($( "#wpappp-popup11-width").val()!='')
    {$( "#wpup-popup11-container" ).css( "width",$( "#wpappp-popup11-width").val());}
  if($('#wpappp-popup11-background-color').val()!='')
    {$('#wpup-popup11-container').css('background-color',$('#wpappp-popup11-background-color').val());}
  if($("#wpappp-popup11-heading-text").val()!='')
    { $('#wpup-popup11-heading').html($("#wpappp-popup11-heading-text").val());}
  if($('#wpappp-popup11-heading-text-color').val()!='')
    {$('#wpup-popup11-heading').css('color',$('#wpappp-popup11-heading-text-color').val());}
  if($('#wpappp-popup11-heading-font-size :selected').text()!='')
    {$('#wpup-popup11-heading').css('font-size',$('#wpappp-popup11-heading-font-size :selected').text());}
  if($("#wpappp-popup11-subheading-text").val()!='')
    {$('#wpup-popup11-main-text').html($("#wpappp-popup11-subheading-text").val());}
  if($('#wpappp-popup11-subheading-text-color').val()!='')
    {$('#wpup-popup11-main-text').css('color',$('#wpappp-popup11-subheading-text-color').val());}
  if($('#wpappp-popup11-subheading-font-size :selected').text()!='')
    {$('#wpup-popup11-main-text').css('font-size',$('#wpappp-popup11-subheading-font-size :selected').text());}
  if($("#wpappp-popup11-email-text-placeholder").val()!='')
    {$('#wpup-popup11-email-text').attr('placeholder' , $("#wpappp-popup11-email-text-placeholder").val());}
  if($('#wpappp-popup11-action-button-background-color').val()!='')
    {$('#wpup-popup11-button').css('background-color', $('#wpappp-popup11-action-button-background-color').val());}
  if($("#wpappp-popup11-action-button-text").val()!='')
    {$('#wpup-popup11-button').attr('value' , $("#wpappp-popup11-action-button-text").val());}
  if($("#wpappp-popup11-action-button-text-color").val()!='')
    { $('#wpup-popup11-button').css('color', $("#wpappp-popup11-action-button-text-color").val());}
  if($("#wpappp-popup11-close-note-text").val()!='')
    { $('#wpup-popup11-close-text').html ($("#wpappp-popup11-close-note-text").val());}
  if( $('#wpappp-popup11-close-note-text-color').val()!='')
    {$('#wpup-popup11-close-text').css('color', $('#wpappp-popup11-close-note-text-color').val());}
}

if( selectedpopup == 'popup12'){
  if($( "#wpappp-popup12-width").val()!='')
    {$( "#wpup-popup12-container" ).css( "width",$( "#wpappp-popup12-width").val());}
  if($('#wpappp-popup12-image-url').val()!='')
    {var popup12bgurl = $('#wpappp-popup12-image-url').val();
  $('#wpup-popup12-container').css('background-image','url('+popup12bgurl+')');}
  if($('#wpappp-popup12-background-color').val()!='')
    {$('#wpup-popup12-container').css('background-color',$('#wpappp-popup12-background-color').val());}
  if($("#wpappp-popup12-heading-text").val()!='')
    {$('#wpup-popup12-heading1').html($("#wpappp-popup12-heading-text").val());}
  if($('#wpappp-popup12-heading-text-color').val()!='')
    {$('#wpup-popup12-heading1').css('color',$('#wpappp-popup12-heading-text-color').val());}
  if($('#wpappp-popup12-heading-font-size :selected').text()!='')
    {$('#wpup-popup12-heading1').css('font-size',$('#wpappp-popup12-heading-font-size :selected').text());}
  if($("#wpappp-popup12-subheading-text").val()!='')
    {$('#wpup-popup12-heading2').html($("#wpappp-popup12-subheading-text").val());}
  if($('#wpappp-popup12-subheading-text-color').val()!='')
    {$('#wpup-popup12-heading2').css('color',$('#wpappp-popup12-subheading-text-color').val());}
  if($('#wpappp-popup12-subheading-font-size :selected').text()!='')
    {$('#wpup-popup12-heading2').css('font-size',$('#wpappp-popup12-subheading-font-size :selected').text());}
  if($("#wpappp-popup12-email-text-placeholder").val()!='')
    {$('#wpup-popup12-email-text').attr('placeholder' , $("#wpappp-popup12-email-text-placeholder").val());}
  if($('#wpappp-popup12-action-button-background-color').val()!='')
    {$('#wpup-popup12-button').css('background-color', $('#wpappp-popup12-action-button-background-color').val());}
  if($("#wpappp-popup12-action-button-text").val()!='')
    {$('#wpup-popup12-button').attr('value' , $("#wpappp-popup12-action-button-text").val());}
  if($("#wpappp-popup12-action-button-text-color").val()!='')
    {$('#wpup-popup12-button').css('color', $("#wpappp-popup12-action-button-text-color").val());}
  if($("#wpappp-popup12-terms-text").val()!='')
    {$('#wpup-popup12-terms').html ($("#wpappp-popup12-terms-text").val());}
  if($('#wpappp-popup12-terms-text-color').val()!='')
    {$('#wpup-popup12-terms').css('color', $('#wpappp-popup12-terms-text-color').val());}
}

if( selectedpopup == 'popup13'){
  if($( "#wpappp-popup13-width").val()!='')
    {$( "#wpup-popup13-container" ).css( "width",$( "#wpappp-popup13-width").val());}
  if($('#wpappp-popup13-background-color').val()!='')
    {$('#wpup-popup13-container').css('background-color',$('#wpappp-popup13-background-color').val());}
  if($('#wpappp-popup13-image-url').val()!='')
    {var popup13bgurl = $('#wpappp-popup13-image-url').val();
  $('#wpup-popup13-left-content').css('background-image','url('+popup13bgurl+')');}
  if($("#wpappp-popup13-heading-text").val()!='')
    {$('#wpup-popup13-heading').html($("#wpappp-popup13-heading-text").val());}
  if($('#wpappp-popup13-heading-text-color').val()!='')
    { $('#wpup-popup13-heading').css('color',$('#wpappp-popup13-heading-text-color').val());}
  if($('#wpappp-popup13-heading-font-size :selected').text()!='')
    {$('#wpup-popup13-heading').css('font-size',$('#wpappp-popup13-heading-font-size :selected').text());}
  if($("#wpappp-popup13-subheading-text").val()!='')
    { $('#wpup-popup13-main-text').html($("#wpappp-popup13-subheading-text").val());}
  if($('#wpappp-popup13-subheading-text-color').val()!='')
    {$('#wpup-popup13-main-text').css('color',$('#wpappp-popup13-subheading-text-color').val());}
  if($('#wpappp-popup13-subheading-font-size :selected').text()!='')
    {$('#wpup-popup13-main-text').css('font-size',$('#wpappp-popup13-subheading-font-size :selected').text());}
  if($("#wpappp-popup13-email-text-placeholder").val()!='')
    {$('#wpup-popup13-email-text').attr('placeholder' , $("#wpappp-popup13-email-text-placeholder").val());}
  if($('#wpappp-popup13-action-button-background-color').val()!='')
    {$('#wpup-popup13-button').css('background-color', $('#wpappp-popup13-action-button-background-color').val());}
  if( $("#wpappp-popup13-action-button-text").val()!='')
    {$('#wpup-popup13-button').attr('value' , $("#wpappp-popup13-action-button-text").val());}
  if($("#wpappp-popup13-action-button-text-color").val()!='')
    {$('#wpup-popup13-button').css('color', $("#wpappp-popup13-action-button-text-color").val());}
}

if( selectedpopup == 'popup14'){
  if($( "#wpappp-popup14-width").val()!='')
    {$( "#wpup-popup14-container" ).css( "width",$( "#wpappp-popup14-width").val());}
  if($('#wpappp-popup14-container-background-color').val()!='')
    {$('#wpup-popup14-container').css('background-color',$('#wpappp-popup14-container-background-color').val());}
  if($('#wpappp-popup14-image-url').val()!='')
    {var popup14bgurl = $('#wpappp-popup14-image-url').val();
  $('#wpup-popup14-header-image').css('background-image','url('+popup14bgurl+')');}
  if($('#wpappp-popup14-subcontainer-background-color').val()!='')
    {$('#wpup-popup14-top-content').css('background-color',$('#wpappp-popup14-subcontainer-background-color').val());}
  if($("#wpappp-popup14-heading-text").val()!='')
    {$('#wpup-popup14-main-text-header').html($("#wpappp-popup14-heading-text").val());}
  if($('#wpappp-popup14-heading-text-color').val()!='')
    {$('#wpup-popup14-main-text-header').css('color',$('#wpappp-popup14-heading-text-color').val());}
  if($('#wpappp-popup14-heading-font-size :selected').text()!='')
    { $('#wpup-popup14-main-text-header').css('font-size',$('#wpappp-popup14-heading-font-size :selected').text());}
  if($("#wpappp-popup14-subheading-text").val()!='')
    {$('#wpup-popup14-main-text-subheader').html($("#wpappp-popup14-subheading-text").val());}
  if($('#wpappp-popup14-subheading-text-color').val()!='')
    { $('#wpup-popup14-main-text-subheader').css('color',$('#wpappp-popup14-subheading-text-color').val());}
  if($('#wpappp-popup14-subheading-font-size :selected').text()!='')
    {$('#wpup-popup14-main-text-subheader').css('font-size',$('#wpappp-popup14-subheading-font-size :selected').text());}
  if($("#wpappp-popup14-name-text-placeholder").val()!='')
    {$('#wpup-popup14-name-text').attr('placeholder' , $("#wpappp-popup14-name-text-placeholder").val());}
  if($("#wpappp-popup14-email-text-placeholder").val()!='')
    { $('#wpup-popup14-email-text').attr('placeholder' , $("#wpappp-popup14-email-text-placeholder").val());}
  if($('#wpappp-popup14-action-button-background-color').val()!='')
    {$('#wpup-popup14-button').css('background-color', $('#wpappp-popup14-action-button-background-color').val());}
  if($("#wpappp-popup14-action-button-text").val()!='')
    {$('#wpup-popup14-button-text').html($("#wpappp-popup14-action-button-text").val());}
  if( $("#wpappp-popup14-action-button-text-color").val()!='')
    { $('#wpup-popup14-button').css('color', $("#wpappp-popup14-action-button-text-color").val());}
  if($("#wpappp-popup14-privacy-text").val()!='')
    {$('#wpup-popup14-privacy-text').html ($("#wpappp-popup14-privacy-text").val());}
  if($('#wpappp-popup14-privacy-text-color').val()!='')
    {$('#wpup-popup14-privacy-text').css('color', $('#wpappp-popup14-privacy-text-color').val());}
}

if( selectedpopup == 'popup15'){
  if($( "#wpappp-popup15-width").val()!='')
    {$( "#wpappp-popup15-container" ).css( "width",$( "#wpappp-popup15-width").val());}
  if($('#wpappp-popup15-background-color').val()!='')
    {$('#wpappp-popup15-rightcontent').css('background-color',$('#wpappp-popup15-background-color').val());}
  if($('#wpappp-popup15-image-url').val()!='')
    {var popup15bgurl = $('#wpappp-popup15-image-url').val();
  $('#wpappp-popup15-leftcontent').css('background-image','url('+popup15bgurl+')');}
  if($("#wpappp-popup15-heading-text").val()!='')
    {$('#wpappp-popup15-heading').html($("#wpappp-popup15-heading-text").val());}
  if($('#wpappp-popup15-heading-text-color').val()!='')
    { $('#wpappp-popup15-heading').css('color',$('#wpappp-popup15-heading-text-color').val());}
  if($('#wpappp-popup15-heading-font-size :selected').text()!='')
    {$('#wpappp-popup15-heading').css('font-size',$('#wpappp-popup15-heading-font-size :selected').text());}
  if($('#wpappp-popup15-separator-color-option').val() != ''){
      $('#wpappp-popup15-underline').css('background-color',$('#wpappp-popup15-separator-color-option').val());
    }
  if($("#wpappp-popup15-subheading-text").val()!='')
    { $('#wpappp-popup15-subtext').html($("#wpappp-popup15-subheading-text").val());}
  if($('#wpappp-popup15-subheading-text-color').val()!='')
    {$('#wpappp-popup15-subtext').css('color',$('#wpappp-popup15-subheading-text-color').val());}
  if($('#wpappp-popup15-subheading-font-size :selected').text()!='')
    {$('#wpappp-popup15-subtext').css('font-size',$('#wpappp-popup15-subheading-font-size :selected').text());}
  if($('#wpappp-popup15-yes-button-background-color').val()!='')
    {$('#wpappp-popup15-yesbtn').css('background-color', $('#wpappp-popup15-yes-button-background-color').val());}
  if( $("#wpappp-popup15-yes-button-text").val()!='')
    {$('#wpappp-popup15-yesbtn').attr('value' , $("#wpappp-popup15-yes-button-text").val());}
  if($("#wpappp-popup15-yes-button-text-color").val()!='')
    {$('#wpappp-popup15-yesbtn').css('color', $("#wpappp-popup15-yes-button-text-color").val());}
  if($('#wpappp-popup15-no-button-background-color').val()!='')
    {$('#wpappp-popup15-nobtn').css('background-color', $('#wpappp-popup15-no-button-background-color').val());}
  if( $("#wpappp-popup15-no-button-text").val()!='')
    {$('#wpappp-popup15-nobtn').attr('value' , $("#wpappp-popup15-no-button-text").val());}
  if($("#wpappp-popup15-no-button-text-color").val()!='')
    {$('#wpappp-popup15-nobtn').css('color', $("#wpappp-popup15-no-button-text-color").val());}
}

if( selectedpopup == 'popup16'){
  if($( "#wpappp-popup16-width").val()!='')
    {$( "#wpappp-popup16-container" ).css( "width",$( "#wpappp-popup16-width").val());}
  if($('#wpappp-popup16-background-color').val()!='')
    {$('#wpappp-popup16-container').css('background-color',$('#wpappp-popup16-background-color').val());}
  if($('#wpappp-popup16-image-url').val()!='')
    {var popup16bgurl = $('#wpappp-popup16-image-url').val();
  $('#wpappp-popup16-container').css('background-image','url('+popup16bgurl+')');}
  if($("#wpappp-popup16-heading-text").val()!='')
    {$('#wpappp-popup16-heading').html($("#wpappp-popup16-heading-text").val());}
  if($('#wpappp-popup16-heading-text-color').val()!='')
    { $('#wpappp-popup16-heading').css('color',$('#wpappp-popup16-heading-text-color').val());}
  if($('#wpappp-popup16-heading-font-size :selected').text()!='')
    {$('#wpappp-popup16-heading').css('font-size',$('#wpappp-popup16-heading-font-size :selected').text());}
  if($("#wpappp-popup16-subheading-text").val()!='')
    { $('#wpappp-popup16-subtext').html($("#wpappp-popup16-subheading-text").val());}
  if($('#wpappp-popup16-subheading-text-color').val()!='')
    {$('#wpappp-popup16-subtext').css('color',$('#wpappp-popup16-subheading-text-color').val());}
  if($('#wpappp-popup16-subheading-font-size :selected').text()!='')
    {$('#wpappp-popup16-subtext').css('font-size',$('#wpappp-popup16-subheading-font-size :selected').text());}
  if($('#wpappp-popup16-yes-button-background-color').val()!='')
    {$('#wpappp-popup16-yesbtn').css('background-color', $('#wpappp-popup16-yes-button-background-color').val());}
  if( $("#wpappp-popup16-yes-button-text").val()!='')
    {$('#wpappp-popup16-yesbtn').attr('value' , $("#wpappp-popup16-yes-button-text").val());}
  if($("#wpappp-popup16-yes-button-text-color").val()!='')
    {$('#wpappp-popup16-yesbtn').css('color', $("#wpappp-popup16-yes-button-text-color").val());}
  if($('#wpappp-popup16-no-button-background-color').val()!='')
    {$('#wpappp-popup16-nobtn').css('background-color', $('#wpappp-popup16-no-button-background-color').val());}
  if( $("#wpappp-popup16-no-button-text").val()!='')
    {$('#wpappp-popup16-nobtn').attr('value' , $("#wpappp-popup16-no-button-text").val());}
  if($("#wpappp-popup16-no-button-text-color").val()!='')
    {$('#wpappp-popup16-nobtn').css('color', $("#wpappp-popup16-no-button-text-color").val());}
}

$('#wpappp-'+selectedpopup).show();

});

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1'){
  $( "#wpup-popup1-container" ).css( "width",$( "#wpappp-popup1-width").val());
  var popup1bgurl = $('#wpappp-popup1-image-url').val()
  $('#wpup-popup1-container').css('background-image','url('+popup1bgurl+')');
  $('#wpup-popup1-heading1').html($("#wpappp-popup1-heading-text").val());
  $('#wpup-popup1-heading1').css('color',$('#wpappp-popup1-heading-text-color').val());
  $('#wpup-popup1-heading1').css('font-size',$('#wpappp-popup1-heading-font-size :selected').text());

  $('#line-break').css('background-color',$('#wpappp-popup1-seperator-color').val());
  $('#wpup-popup1-heading2').html($("#wpappp-popup1-subheading-text").val());
  $('#wpup-popup1-heading2').css('color',$('#wpappp-popup1-subheading-text-color').val());
  $('#wpup-popup1-heading2').css('font-size',$('#wpappp-popup1-subheading-font-size :selected').text());
  $('.wpappp-popup1-border-color').css('border','1px solid '+$('#wpappp-popup1-text-field-border-color').val());
  $('#wpup-popup1-name-text').attr('placeholder' , $("#wpappp-popup1-name-text-placeholder").val());
  $('#wpup-popup1-email-text').attr('placeholder' , $("#wpappp-popup1-email-text-placeholder").val());
  $('#wpup-popup1-subscribe-button').css('background-color', $('#wpappp-popup1-action-button-background-color').val());
  $('#wpup-popup1-subscribe-button').attr('value' , $("#wpappp-popup1-action-button-text").val());
  $('#wpup-popup1-subscribe-button').css('color', $('#wpappp-popup1-action-button-text-color').val());
  $('#wpup-popup1-security-note-text').html($("#wpappp-popup1-security-note-text").val());
  $('#wpup-popup1-security-note-text').css('color', $('#wpappp-popup1-security-note-text-color').val());

}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2'){
  $( "#wpup-popup2-container" ).css( "width",$( "#wpappp-popup2-width").val());
  $('#wpup-popup2-container-top').css('background-color',$('#wpappp-popup2-background-color').val());
  $('#wpappp-popup2-triangle-down').css('border-top','30px solid '+$('#wpappp-popup2-background-color').val());
  $('#wpup-popup2-container').css('border-bottom','5px solid '+$('#wpappp-popup2-background-color').val());
  var popup2bgurl = $('#wpappp-popup2-image-url').val();
  $('#wpappp-popup2-image1').attr('src', popup2bgurl);
  $('#wpup-popup2-heading1').html($("#wpappp-popup2-heading-text").val());
  $('#wpup-popup2-heading1').css('color',$('#wpappp-popup2-heading-text-color').val());
  $('#wpup-popup2-heading1').css('font-size',$('#wpappp-popup2-heading-font-size :selected').text());
  $('#wpup-popup2-subheading1').html($("#wpappp-popup2-subheading1-text").val());
  $('#wpup-popup2-subheading1').css('color',$('#wpappp-popup2-subheading1-text-color').val());
  $('#wpup-popup2-subheading1').css('font-size',$('#wpappp-popup2-subheading1-font-size :selected').text());
  $('#wpup-popup2-subheading2').html($("#wpappp-popup2-subheading2-text").val());
  $('#wpup-popup2-subheading2').css('color',$('#wpappp-popup2-subheading2-text-color').val());
  $('#wpup-popup2-subheading2').css('font-size',$('#wpappp-popup2-subheading2-font-size :selected').text());
  $('#wpup-popup2-name-text').attr('placeholder' , $("#wpappp-popup2-name-text-placeholder").val());
  $('#wpup-popup2-email-text').attr('placeholder' , $("#wpappp-popup2-email-text-placeholder").val());
  $('#wpup-popup2-subscribe-button').css('background-color', $('#wpappp-popup2-action-button-background-color').val());
  $('#wpup-popup2-subscribe-button').attr('value' , $("#wpappp-popup2-action-button-text").val());
  $('#wpup-popup2-subscribe-button').css('color', $('#wpappp-popup2-action-button-text-color').val());
  $('#wpup-popup2-subscribe-button').css('box-shadow','5px 2px 5px '+$('#wpappp-popup2-action-button-border-shadow-color').val());
  $('#wpup-popup2-security-note-text').html($("#wpappp-popup2-security-note-text").val());
  $('#wpup-popup2-security-note-text').css('color', $('#wpappp-popup2-security-note-text-color').val());
}
if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3'){
  $( "#wpup-popup3-container" ).css( "width",$( "#wpappp-popup3-width").val());
  $('#wpup-popup3-container-top').css('background-color',$('#wpappp-popup3-background-color').val());
  var popup3bgurl = $('#wpappp-popup3-image-url').val()
  $('#wpup-popup3-background-image').css('background-image','url('+popup3bgurl+')');
  $('#wpup-popup3-heading1').html($("#wpappp-popup3-heading-text").val());
  $('#wpup-popup3-heading1').css('color',$('#wpappp-popup3-heading-text-color').val());
  $('#wpup-popup3-heading1').css('font-size',$('#wpappp-popup3-heading-font-size :selected').text());
  $('#wpup-popup3-subheading1').html($("#wpappp-popup3-subheading1-text").val());
  $('#wpup-popup3-subheading1').css('color',$('#wpappp-popup3-subheading1-text-color').val());
  $('#wpup-popup3-subheading1').css('font-size',$('#wpappp-popup3-subheading1-font-size :selected').text());
  $('#wpup-popup3-subheading2').html($("#wpappp-popup3-subheading2-text").val());
  $('#wpup-popup3-subheading2').css('color',$('#wpappp-popup3-subheading2-text-color').val());
  $('#wpup-popup3-subheading2').css('font-size',$('#wpappp-popup3-subheading2-font-size :selected').text());
  $('#wpup-popup3-container-middle').css('background-color',$('#wpappp-popup3-form-background-color').val());
  $('#wpup-popup3-name-text').attr('placeholder' , $("#wpappp-popup3-name-text-placeholder").val());
  $('#wpup-popup3-email-text').attr('placeholder' , $("#wpappp-popup3-email-text-placeholder").val());
  $('#wpup-popup3-subscribe-button').css('background-color', $('#wpappp-popup3-action-button-background-color').val());
  $('#wpup-popup3-subscribe-button').attr('value' , $("#wpappp-popup3-action-button-text").val());
  $('#wpup-popup3-subscribe-button').css('color', $('#wpappp-popup3-action-button-text-color').val());
  $('#wpup-popup3-security-note-text').html($("#wpappp-popup3-security-note-text").val());
  $('#wpup-popup3-security-note-text').css('color', $('#wpappp-popup3-security-note-text-color').val());
  $('#wpup-popup3-security-note-container').css('background-color', $('#wpappp-popup3-security-note-background-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4'){
  $( "#wpup-popup4-container" ).css( "width",$( "#wpappp-popup4-width").val());
  $('#wpup-popup4-container').css('background-color',$('#wpappp-popup4-background-color').val());
  var popup4bgurl = $('#wpappp-popup4-image-url').val()
  $('#wpup-popup4-container').css('background-image','url('+popup4bgurl+')');
  $('#wpup-popup4-heading1').html($("#wpappp-popup4-heading-text").val());
  $('#wpup-popup4-heading1').css('color',$('#wpappp-popup4-heading-text-color').val());
  $('#wpup-popup4-heading1').css('font-size',$('#wpappp-popup4-heading-font-size :selected').text());
  $('#wpup-popup4-heading2').html($("#wpappp-popup4-subheading1-text").val());
  $('#wpup-popup4-heading2').css('color',$('#wpappp-popup4-subheading1-text-color').val());
  $('#wpup-popup4-heading2').css('font-size',$('#wpappp-popup4-subheading1-font-size :selected').text());
  $('#wpup-popup4-subheading1').html($("#wpappp-popup4-subheading2-text").val());
  $('#wpup-popup4-subheading1').css('color',$('#wpappp-popup4-subheading2-text-color').val());
  $('#wpup-popup4-subheading1').css('font-size',$('#wpappp-popup4-subheading1-font-size :selected').text());
  $('#wpup-popup4-center-content').css('background-color',$('#wpappp-popup4-form-background-color').val());
  $('#wpup-popup4-label-name').html($("#wpappp-popup4-name-text-placeholder").val());
  $('#wpup-popup4-label-email').html($("#wpappp-popup4-email-text-placeholder").val());
  $('#wpup-popup4-subscribe-button').css('background-color', $('#wpappp-popup4-action-button-background-color').val());
  $('#wpup-popup4-subscribe-button').attr('value' , $("#wpappp-popup4-action-button-text").val());
  $('#wpup-popup4-subscribe-button').css('color', $('#wpappp-popup4-action-button-text-color').val());
  $('#wpup-popup4-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup4-action-button-border-shadow-color').val());
  $('#wpup-popup4-security-note-text').html($("#wpappp-popup4-security-note-text").val());
  $('#wpup-popup4-security-note-text').css('color', $('#wpappp-popup4-security-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5'){
  $( "#wpup-popup5-container" ).css( "width",$( "#wpappp-popup5-width").val());
  var popup5bgurl = $('#wpappp-popup5-image-url').val()
  $('#wpup-popup5-center-content-left').css('background-image','url('+popup5bgurl+')');
  $('#wpup-popup5-container').css('background-color',$('#wpappp-popup5-background-color').val());
  $('#wpup-popup5-container').css('border-bottom','5px solid'+$('#wpappp-popup5-background-color').val());
  $('#wpup-popup5-header').html($("#wpappp-popup5-heading-text").val());
  $('#wpup-popup5-header').css('color',$('#wpappp-popup5-heading-text-color').val());
  $('#wpup-popup5-header').css('font-size',$('#wpappp-popup5-heading-font-size :selected').text());
  $('#wpup-popup5-subheader').html($("#wpappp-popup5-subheading-text").val());
  $('#wpup-popup5-subheader').css('color',$('#wpappp-popup5-subheading-text-color').val());
  $('#wpup-popup5-subheader').css('font-size',$('#wpappp-popup5-subheading-font-size :selected').text());
  $('#wpup-popup5-name-text').attr('placeholder' , $("#wpappp-popup5-name-text-placeholder").val());
  $('#wpup-popup5-email-text').attr('placeholder' , $("#wpappp-popup5-email-text-placeholder").val());
  $('#wpup-popup5-subscribe-button').css('background-color', $('#wpappp-popup5-action-button-background-color').val());
  $('#wpup-popup5-subscribe-button').attr('value' , $("#wpappp-popup5-action-button-text").val());
  $('#wpup-popup5-subscribe-button').css('color', $('#wpappp-popup5-action-button-text-color').val());
  $('#wpup-popup5-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup5-action-button-border-shadow-color').val());
  $('#wpup-popup5-security-note-text').html($("#wpappp-popup5-security-note-text").val());
  $('#wpup-popup5-security-note-text').css('color', $('#wpappp-popup5-security-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6'){
  $( "#wpup-popup6-container" ).css( "width",$( "#wpappp-popup6-width").val());
  $('#wpup-popup6-container').css('background-color',$('#wpappp-popup6-background-color').val());
  $('#wpup-popup6-heading').html($("#wpappp-popup6-heading-text").val());
  $('#wpup-popup6-heading').css('color',$('#wpappp-popup6-heading-text-color').val());
  $('#wpup-popup6-heading').css('font-size',$('#wpappp-popup6-heading-font-size :selected').text());
  $('#wpup-popup6-name-text').attr('placeholder' , $("#wpappp-popup6-name-text-placeholder").val());
  $('#wpup-popup6-email-text').attr('placeholder' , $("#wpappp-popup6-email-text-placeholder").val());
  $('#wpup-popup6-subscribe-button').css('background-color', $('#wpappp-popup6-action-button-background-color').val());
  $('#wpup-popup6-subscribe-button').attr('value' , $("#wpappp-popup6-action-button-text").val());
  $('#wpup-popup6-subscribe-button').css('color', $('#wpappp-popup6-action-button-text-color').val());
  $('#wpup-popup6-subscribe-button').css('border-bottom','5px solid'+$('#wpappp-popup6-action-button-border-color').val());
  $('#wpup-popup6-info').html($("#wpappp-popup6-close-note-text").val());
  $('#wpup-popup6-info').css('color', $('#wpappp-popup6-close-note-text-color').val());

}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7'){
  $( "#wpup-popup7-container" ).css( "width",$( "#wpappp-popup7-width").val());
  $('#wpup-popup7-container').css('background-color',$('#wpappp-popup7-background-color').val());
  $('#wpup-popup7-heading1').html($("#wpappp-popup7-heading-text").val());
  $('#wpup-popup7-heading1').css('color',$('#wpappp-popup7-heading-text-color').val());
  $('#wpup-popup7-heading1').css('font-size',$('#wpappp-popup7-heading-font-size :selected').text());
  $('#wpup-popup7-heading2').html($("#wpappp-popup7-subheading-text").val());
  $('#wpup-popup7-heading2').css('color',$('#wpappp-popup7-subheading-text-color').val());
  $('#wpup-popup7-heading2').css('font-size',$('#wpappp-popup7-subheading-font-size :selected').text());
  $('#wpup-popup7-email-text').attr('placeholder' , $("#wpappp-popup7-email-text-placeholder").val());
  $('#wpup-popup7-email-text').css('border','1px solid'+$('#wpappp-popup7-text-field-border-color').val());
  $('#wpup-popup7-button').css('background-color', $('#wpappp-popup7-action-button-background-color').val());
  $('#wpup-popup7-container').css('border-left','5px solid'+$('#wpappp-popup7-action-button-background-color').val());
  $('#wpup-popup7-close-note').html($("#wpappp-popup7-close-note-text").val());
  $('#wpup-popup7-close-note').css('color', $('#wpappp-popup7-close-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8'){
  $( "#wpup-popup8-container" ).css( "width",$( "#wpappp-popup8-width").val());
  $('#wpup-popup8-container').css('background-color',$('#wpappp-popup8-background-color').val());
  $('#wpup-popup8-heading1').html($("#wpappp-popup8-heading-text").val());
  $('#wpup-popup8-heading1').css('color',$('#wpappp-popup8-heading-text-color').val());
  $('#wpup-popup8-heading1').css('font-size',$('#wpappp-popup8-heading-font-size :selected').text());
  $('#wpup-popup8-heading2').html($("#wpappp-popup8-subheading-text").val());
  $('#wpup-popup8-heading2').css('color',$('#wpappp-popup8-subheading-text-color').val());
  $('#wpup-popup8-heading2').css('font-size',$('#wpappp-popup8-subheading-font-size :selected').text());
  $('#wpup-popup8-subheading').html($("#wpappp-popup8-subheading2-text").val());
  $('#wpup-popup8-subheading').css('color',$('#wpappp-popup8-subheading2-text-color').val());
  $('#wpup-popup8-subheading').css('font-size',$('#wpappp-popup8-subheading2-font-size :selected').text());
  $('#wpup-popup8-email-text').attr('placeholder' , $("#wpappp-popup8-email-text-placeholder").val());
  $('#wpup-popup8-button').css('background-color', $('#wpappp-popup8-action-button-background-color').val());
  $('#wpup-popup8-button').attr('value' , $("#wpappp-popup8-action-button-text").val());
  $('#wpup-popup8-button').css('color', $("#wpappp-popup8-action-button-text-color").val());
  $('#wpup-popup8-close-text').html($("#wpappp-popup8-close-note-text").val());
  $('#wpup-popup8-close-text').css('color', $('#wpappp-popup8-close-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9'){
  $( "#wpup-popup9-container" ).css( "width",$( "#wpappp-popup9-width").val());
  $('#wpup-popup9-container').css('background-color',$('#wpappp-popup9-background-color-top').val());
  $('#wpup-popup9-heading1').html($("#wpappp-popup9-heading-text").val());
  $('#wpup-popup9-heading1').css('color',$('#wpappp-popup9-heading-text-color').val());
  $('#wpup-popup9-heading1').css('font-size',$('#wpappp-popup9-heading-font-size :selected').text());
  $('#wpup-popup9-top-content').css('border-bottom','5px solid'+$('#wpappp-popup9-seperator-color').val());
  $('#wpup-popup9-middle-content').css('background-color',$('#wpappp-popup9-background-color-bottom').val());
  $('#wpup-popup9-main-text').html($("#wpappp-popup9-subheading-text").val());
  $('#wpup-popup9-main-text').css('color',$('#wpappp-popup9-subheading-text-color').val());
  $('#wpup-popup9-main-text').css('font-size',$('#wpappp-popup9-subheading-font-size :selected').text());
  $('#wpup-popup9-email-text').attr('placeholder' , $("#wpappp-popup9-email-text-placeholder").val());
  $('#wpup-popup9-button').css('background-color', $('#wpappp-popup9-action-button-background-color').val());
  $('#wpup-popup9-button').attr('value' , $("#wpappp-popup9-action-button-text").val());
  $('#wpup-popup9-button').css('color', $("#wpappp-popup9-action-button-text-color").val());
  $('#wpup-popup9-privacy-text').html($("#wpappp-popup9-privacy-text").val());
  $('#wpup-popup9-privacy-text').css('color', $('#wpappp-popup9-privacy-text-color').val());
  $('#wpup-popup9-close-text').html($("#wpappp-popup9-close-note-text").val());
  $('#wpup-popup9-close-text').css('color', $('#wpappp-popup9-close-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10'){
  $( "#wpup-popup10-container" ).css( "width",$( "#wpappp-popup10-width").val());
  $('#wpup-popup10-top-content').css('background-color',$('#wpappp-popup10-background-color-top').val());
  $('#wpup-popup10-heading1').html($("#wpappp-popup10-heading-text").val());
  $('#wpup-popup10-heading1').css('color',$('#wpappp-popup10-heading-text-color').val());
  $('#wpup-popup10-heading1').css('font-size',$('#wpappp-popup10-heading-font-size :selected').text());
  var popup10bgurl = $('#wpappp-popup10-image-url').val()
  $('#wpup-popup10-info-image').attr('src',popup10bgurl);
  $('#wpup-popup10-middle-content').css('background-color',$('#wpappp-popup10-background-color-bottom').val());
  $('#wpup-popup10-main-text').html($("#wpappp-popup10-subheading-text").val());
  $('#wpup-popup10-main-text').css('color',$('#wpappp-popup10-subheading-text-color').val());
  $('#wpup-popup10-main-text').css('font-size',$('#wpappp-popup10-subheading-font-size :selected').text());
  $('#wpup-popup10-button1').css('background-color', $('#wpappp-popup10-action-button-background-color').val());
  $('#wpup-popup10-button1').attr('value' , $("#wpappp-popup10-action-button-text").val());
  $('#wpup-popup10-button1').css('color', $("#wpappp-popup10-action-button-text-color").val());
  $('#wpup-popup10-button2').attr('value', $("#wpappp-popup10-close-note-text").val());
  $('#wpup-popup10-button2').css('color', $('#wpappp-popup10-close-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11'){
  $( "#wpup-popup11-container" ).css( "width",$( "#wpappp-popup11-width").val());
  $('#wpup-popup11-container').css('background-color',$('#wpappp-popup11-background-color').val());
  $('#wpup-popup11-heading').html($("#wpappp-popup11-heading-text").val());
  $('#wpup-popup11-heading').css('color',$('#wpappp-popup11-heading-text-color').val());
  $('#wpup-popup11-heading').css('font-size',$('#wpappp-popup11-heading-font-size :selected').text());
  $('#wpup-popup11-main-text').html($("#wpappp-popup11-subheading-text").val());
  $('#wpup-popup11-main-text').css('color',$('#wpappp-popup11-subheading-text-color').val());
  $('#wpup-popup11-main-text').css('font-size',$('#wpappp-popup11-subheading-font-size :selected').text());
  $('#wpup-popup11-email-text').attr('placeholder' , $("#wpappp-popup11-email-text-placeholder").val());
  $('#wpup-popup11-button').css('background-color', $('#wpappp-popup11-action-button-background-color').val());
  $('#wpup-popup11-button').attr('value' , $("#wpappp-popup11-action-button-text").val());
  $('#wpup-popup11-button').css('color', $("#wpappp-popup11-action-button-text-color").val());
  $('#wpup-popup11-close-text').html ($("#wpappp-popup11-close-note-text").val());
  $('#wpup-popup11-close-text').css('color', $('#wpappp-popup11-close-note-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12'){
  $( "#wpup-popup12-container" ).css( "width",$( "#wpappp-popup12-width").val());
  var popup12bgurl = $('#wpappp-popup12-image-url').val()
  $('#wpup-popup12-container').css('background-image','url('+popup12bgurl+')');
  $('#wpup-popup12-container').css('background-color',$('#wpappp-popup12-background-color').val());
  $('#wpup-popup12-heading1').html($("#wpappp-popup12-heading-text").val());
  $('#wpup-popup12-heading1').css('color',$('#wpappp-popup12-heading-text-color').val());
  $('#wpup-popup12-heading1').css('font-size',$('#wpappp-popup12-heading-font-size :selected').text());
  $('#wpup-popup12-heading2').html($("#wpappp-popup12-subheading-text").val());
  $('#wpup-popup12-heading2').css('color',$('#wpappp-popup12-subheading-text-color').val());
  $('#wpup-popup12-heading2').css('font-size',$('#wpappp-popup12-subheading-font-size :selected').text());
  $('#wpup-popup12-email-text').attr('placeholder' , $("#wpappp-popup12-email-text-placeholder").val());
  $('#wpup-popup12-button').css('background-color', $('#wpappp-popup12-action-button-background-color').val());
  $('#wpup-popup12-button').attr('value' , $("#wpappp-popup12-action-button-text").val());
  $('#wpup-popup12-button').css('color', $("#wpappp-popup12-action-button-text-color").val());
  $('#wpup-popup12-terms').html ($("#wpappp-popup12-terms-text").val());
  $('#wpup-popup12-terms').css('color', $('#wpappp-popup12-terms-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13'){
  $( "#wpup-popup13-container" ).css( "width",$( "#wpappp-popup13-width").val());
  $('#wpup-popup13-container').css('background-color',$('#wpappp-popup13-background-color').val());
  var popup13bgurl = $('#wpappp-popup13-image-url').val()
  $('#wpup-popup13-left-content').css('background-image','url('+popup13bgurl+')');
  $('#wpup-popup13-heading').html($("#wpappp-popup13-heading-text").val());
  $('#wpup-popup13-heading').css('color',$('#wpappp-popup13-heading-text-color').val());
  $('#wpup-popup13-heading').css('font-size',$('#wpappp-popup13-heading-font-size :selected').text());
  $('#wpup-popup13-main-text').html($("#wpappp-popup13-subheading-text").val());
  $('#wpup-popup13-main-text').css('color',$('#wpappp-popup13-subheading-text-color').val());
  $('#wpup-popup13-main-text').css('font-size',$('#wpappp-popup13-subheading-font-size :selected').text());
  $('#wpup-popup13-email-text').attr('placeholder' , $("#wpappp-popup13-email-text-placeholder").val());
  $('#wpup-popup13-button').css('background-color', $('#wpappp-popup13-action-button-background-color').val());
  $('#wpup-popup13-button').attr('value' , $("#wpappp-popup13-action-button-text").val());
  $('#wpup-popup13-button').css('color', $("#wpappp-popup13-action-button-text-color").val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14'){
  $( "#wpup-popup14-container" ).css( "width",$( "#wpappp-popup14-width").val());
  $('#wpup-popup14-container').css('background-color',$('#wpappp-popup14-container-background-color').val());
  $('#wpup-popup14-top-content').css('background-color',$('#wpappp-popup14-subcontainer-background-color').val());
  $('#wpup-popup14-main-text-header').html($("#wpappp-popup14-heading-text").val());
  $('#wpup-popup14-main-text-header').css('color',$('#wpappp-popup14-heading-text-color').val());
  $('#wpup-popup14-main-text-header').css('font-size',$('#wpappp-popup14-heading-font-size :selected').text());
  $('#wpup-popup14-main-text-subheader').html($("#wpappp-popup14-subheading-text").val());
  $('#wpup-popup14-main-text-subheader').css('color',$('#wpappp-popup14-subheading-text-color').val());
  $('#wpup-popup14-main-text-subheader').css('font-size',$('#wpappp-popup14-subheading-font-size :selected').text());
  $('#wpup-popup14-name-text').attr('placeholder' , $("#wpappp-popup14-name-text-placeholder").val());
  $('#wpup-popup14-email-text').attr('placeholder' , $("#wpappp-popup14-email-text-placeholder").val());
  $('#wpup-popup14-button').css('background-color', $('#wpappp-popup14-action-button-background-color').val());
  $('#wpup-popup14-button-text').html($("#wpappp-popup14-action-button-text").val());
  $('#wpup-popup14-button').css('color', $("#wpappp-popup14-action-button-text-color").val());
  $('#wpup-popup14-privacy-text').html ($("#wpappp-popup14-privacy-text").val());
  $('#wpup-popup14-privacy-text').css('color', $('#wpappp-popup14-privacy-text-color').val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15'){
  $( "#wpappp-popup15-container" ).css( "width",$( "#wpappp-popup15-width").val());
  $('#wpappp-popup15-rightcontent').css('background-color',$('#wpappp-popup15-background-color').val());
  var popup15bgurl = $('#wpappp-popup15-image-url').val()
  $('#wpappp-popup15-leftcontent').css('background-image','url('+popup15bgurl+')');
  $('#wpappp-popup15-heading').html($("#wpappp-popup15-heading-text").val());
  $('#wpappp-popup15-heading').css('color',$('#wpappp-popup15-heading-text-color').val());
  $('#wpappp-popup15-heading').css('font-size',$('#wpappp-popup15-heading-font-size :selected').text());
  $('#wpappp-popup15-underline').css('background-color',$('#wpappp-popup15-separator-color-option').val());
  $('#wpappp-popup15-subtext').html($("#wpappp-popup15-subheading-text").val());
  $('#wpappp-popup15-subtext').css('color',$('#wpappp-popup15-subheading-text-color').val());
  $('#wpappp-popup15-subtext').css('font-size',$('#wpappp-popup15-subheading-font-size :selected').text());
  $('#wpappp-popup15-yesbtn').css('background-color', $('#wpappp-popup15-yes-button-background-color').val());
  $('#wpappp-popup15-yesbtn').attr('value' , $("#wpappp-popup15-yes-button-text").val());
  $('#wpappp-popup15-yesbtn').css('color', $("#wpappp-popup15-yes-button-text-color").val());
  $('#wpappp-popup15-nobtn').css('background-color', $('#wpappp-popup15-no-button-background-color').val());
  $('#wpappp-popup15-nobtn').attr('value' , $("#wpappp-popup15-no-button-text").val());
  $('#wpappp-popup15-nobtn').css('color', $("#wpappp-popup15-no-button-text-color").val());
}

if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16'){
  $( "#wpappp-popup16-container" ).css( "width",$( "#wpappp-popup16-width").val());
  $('#wpappp-popup16-container').css('background-color',$('#wpappp-popup16-background-color').val());
  var popup16bgurl = $('#wpappp-popup16-image-url').val()
  $('#wpappp-popup16-container').css('background-image','url('+popup16bgurl+')');
  $('#wpappp-popup16-heading').html($("#wpappp-popup16-heading-text").val());
  $('#wpappp-popup16-heading').css('color',$('#wpappp-popup16-heading-text-color').val());
  $('#wpappp-popup16-heading').css('font-size',$('#wpappp-popup16-heading-font-size :selected').text());
  $('#wpappp-popup16-subtext').html($("#wpappp-popup16-subheading-text").val());
  $('#wpappp-popup16-subtext').css('color',$('#wpappp-popup16-subheading-text-color').val());
  $('#wpappp-popup16-subtext').css('font-size',$('#wpappp-popup16-subheading-font-size :selected').text());
  $('#wpappp-popup16-yesbtn').css('background-color', $('#wpappp-popup16-yes-button-background-color').val());
  $('#wpappp-popup16-yesbtn').attr('value' , $("#wpappp-popup16-yes-button-text").val());
  $('#wpappp-popup16-yesbtn').css('color', $("#wpappp-popup16-yes-button-text-color").val());
  $('#wpappp-popup16-nobtn').css('background-color', $('#wpappp-popup16-no-button-background-color').val());
  $('#wpappp-popup16-nobtn').attr('value' , $("#wpappp-popup16-no-button-text").val());
  $('#wpappp-popup16-nobtn').css('color', $("#wpappp-popup16-no-button-text-color").val());
}

/*============================  popup1 live changes  ==================================================*/

$( "#wpappp-popup1-width").focusout(function() {
  $( "#wpup-popup1-container" ).css( "width",$( "#wpappp-popup1-width").val());
});

$( "#wpappp-popup1-heading-text" ).keyup(function() {
  $('#wpup-popup1-heading1').html($("#wpappp-popup1-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-heading1').css('color',$('#wpappp-popup1-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-heading1').css('color',$('#wpappp-popup1-heading-text-color').val());
});


$( "#wpappp-popup1-heading-font-size" ).change(function() {
  $('#wpup-popup1-heading1').css('font-size',$('#wpappp-popup1-heading-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#line-break').css('background-color',$('#wpappp-popup1-seperator-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#line-break').css('background-color',$('#wpappp-popup1-seperator-color').val());
});

$( "#wpappp-popup1-subheading-text" ).keyup(function() {
  $('#wpup-popup1-heading2').html($("#wpappp-popup1-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-heading2').css('color',$('#wpappp-popup1-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-heading2').css('color',$('#wpappp-popup1-subheading-text-color').val());
});


$( "#wpappp-popup1-subheading-font-size" ).change(function() {
  $('#wpup-popup1-heading2').css('font-size',$('#wpappp-popup1-subheading-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('.wpappp-popup1-border-color').css('border','1px solid '+$('#wpappp-popup1-text-field-border-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('.wpappp-popup1-border-color').css('border','1px solid '+$('#wpappp-popup1-text-field-border-color').val());
});

$( "#wpappp-popup1-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup1-name-text').attr('placeholder' , $("#wpappp-popup1-name-text-placeholder").val());
  if($('#wpappp-popup1-name-text-placeholder').val().length === 0){
    $('#wpup-popup1-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup1-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup1-email-text').attr('placeholder' , $("#wpappp-popup1-email-text-placeholder").val());
   if($('#wpappp-popup1-email-text-placeholder').val().length === 0){
    $('#wpup-popup1-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-subscribe-button').css('background-color', $('#wpappp-popup1-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-subscribe-button').css('background-color', $('#wpappp-popup1-action-button-background-color').val());
});

$( "#wpappp-popup1-action-button-text" ).keyup(function() {
  $('#wpup-popup1-subscribe-button').attr('value' , $("#wpappp-popup1-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-subscribe-button').css('color', $('#wpappp-popup1-action-button-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-subscribe-button').css('color', $('#wpappp-popup1-action-button-text-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-security-note-text').html($("#wpappp-popup1-security-note-text").val());
});
$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-security-note-text').css('color', $('#wpappp-popup1-security-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1')
    $('#wpup-popup1-security-note-text').css('color', $('#wpappp-popup1-security-note-text-color').val());
});
$( "#wpappp-popup1-security-note-text" ).keyup(function() {
  $('#wpup-popup1-security-note-text').html($("#wpappp-popup1-security-note-text").val());
});
/*============================  popup1 live changes ends here  ========================================*/

/*============================  popup2 live changes  ==================================================*/

$( "#wpappp-popup2-width").focusout(function() {
  $( "#wpup-popup2-container" ).css( "width",$( "#wpappp-popup2-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2'){
    $('#wpup-popup2-container-top').css('background-color',$('#wpappp-popup2-background-color').val());
    $('#wpappp-popup2-triangle-down').css('border-top','30px solid '+$('#wpappp-popup2-background-color').val());
    $('#wpup-popup2-container').css('border-bottom','5px solid '+$('#wpappp-popup2-background-color').val());
  }
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2'){
    $('#wpup-popup2-container-top').css('background-color',$('#wpappp-popup2-background-color').val());
    $('#wpappp-popup2-triangle-down').css('border-top','30px solid '+$('#wpappp-popup2-background-color').val());
    $('#wpup-popup2-container').css('border-bottom','5px solid '+$('#wpappp-popup2-background-color').val());
  }});

$( "#wpappp-popup2-heading-text" ).keyup(function() {
  $('#wpup-popup2-heading1').html($("#wpappp-popup2-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-heading1').css('color',$('#wpappp-popup2-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-heading1').css('color',$('#wpappp-popup2-heading-text-color').val());
});


$( "#wpappp-popup2-heading-font-size" ).change(function() {
  $('#wpup-popup2-heading1').css('font-size',$('#wpappp-popup2-heading-font-size :selected').text());
});

$( "#wpappp-popup2-subheading1-text" ).keyup(function() {
  $('#wpup-popup2-subheading1').html($("#wpappp-popup2-subheading1-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subheading1').css('color',$('#wpappp-popup2-subheading1-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subheading1').css('color',$('#wpappp-popup2-subheading1-text-color').val());
});

$( "#wpappp-popup2-subheading1-font-size" ).change(function() {
  $('#wpup-popup2-subheading1').css('font-size',$('#wpappp-popup2-subheading1-font-size :selected').text());
});

$( "#wpappp-popup2-subheading2-text" ).keyup(function() {
  $('#wpup-popup2-subheading2').html($("#wpappp-popup2-subheading2-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subheading2').css('color',$('#wpappp-popup2-subheading2-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subheading2').css('color',$('#wpappp-popup2-subheading2-text-color').val());
});

$( "#wpappp-popup2-subheading2-font-size" ).change(function() {
  $('#wpup-popup2-subheading2').css('font-size',$('#wpappp-popup2-subheading2-font-size :selected').text());
});

$( "#wpappp-popup2-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup2-name-text').attr('placeholder' , $("#wpappp-popup2-name-text-placeholder").val());
  if($('#wpappp-popup2-name-text-placeholder').val().length === 0){
    $('#wpup-popup2-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup2-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup2-email-text').attr('placeholder' , $("#wpappp-popup2-email-text-placeholder").val());
  if($('#wpappp-popup2-email-text-placeholder').val().length === 0){
    $('#wpup-popup2-email-text').attr('placeholder' , 'Enter Your email');
  }
});


$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subscribe-button').css('background-color', $('#wpappp-popup2-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subscribe-button').css('background-color', $('#wpappp-popup2-action-button-background-color').val());
});

$( "#wpappp-popup2-action-button-text" ).keyup(function() {
  $('#wpup-popup2-subscribe-button').attr('value' , $("#wpappp-popup2-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subscribe-button').css('color', $('#wpappp-popup2-action-button-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subscribe-button').css('color', $('#wpappp-popup2-action-button-text-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subscribe-button').css('box-shadow','5px 2px 5px '+$('#wpappp-popup2-action-button-border-shadow-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-subscribe-button').css('box-shadow','5px 2px 5px '+$('#wpappp-popup2-action-button-border-shadow-color').val());
});

$( "#wpappp-popup2-security-note-text" ).keyup(function() {
  $('#wpup-popup2-security-note-text').html($("#wpappp-popup2-security-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-security-note-text').css('color', $('#wpappp-popup2-security-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2')
    $('#wpup-popup2-security-note-text').css('color', $('#wpappp-popup2-security-note-text-color').val());
});

/*============================  popup2 live changes ends here  ========================================*/

/*============================  popup3 live changes  ==================================================*/

$( "#wpappp-popup3-width").focusout(function() {
  $( "#wpup-popup3-container" ).css( "width",$( "#wpappp-popup3-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-container-top').css('background-color',$('#wpappp-popup3-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-container-top').css('background-color',$('#wpappp-popup3-background-color').val());
});

$( "#wpappp-popup3-heading-text" ).keyup(function() {
  $('#wpup-popup3-heading1').html($("#wpappp-popup3-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-heading1').css('color',$('#wpappp-popup3-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-heading1').css('color',$('#wpappp-popup3-heading-text-color').val());
});


$( "#wpappp-popup3-heading-font-size" ).change(function() {
  $('#wpup-popup3-heading1').css('font-size',$('#wpappp-popup3-heading-font-size :selected').text());
});

$( "#wpappp-popup3-subheading1-text" ).keyup(function() {
  $('#wpup-popup3-subheading1').html($("#wpappp-popup3-subheading1-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subheading1').css('color',$('#wpappp-popup3-subheading1-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subheading1').css('color',$('#wpappp-popup3-subheading1-text-color').val());
});

$( "#wpappp-popup3-subheading1-font-size" ).change(function() {
  $('#wpup-popup3-subheading1').css('font-size',$('#wpappp-popup3-subheading1-font-size :selected').text());
});

$( "#wpappp-popup3-subheading2-text" ).keyup(function() {
  $('#wpup-popup3-subheading2').html($("#wpappp-popup3-subheading2-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subheading2').css('color',$('#wpappp-popup3-subheading2-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subheading2').css('color',$('#wpappp-popup3-subheading2-text-color').val());
});

$( "#wpappp-popup3-subheading2-font-size" ).change(function() {
  $('#wpup-popup3-subheading2').css('font-size',$('#wpappp-popup3-subheading2-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-container-middle').css('background-color',$('#wpappp-popup3-form-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-container-middle').css('background-color',$('#wpappp-popup3-form-background-color').val());
});

$( "#wpappp-popup3-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup3-name-text').attr('placeholder' , $("#wpappp-popup3-name-text-placeholder").val());
  if($('#wpappp-popup3-name-text-placeholder').val().length === 0){
    $('#wpup-popup3-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup3-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup3-email-text').attr('placeholder' , $("#wpappp-popup3-email-text-placeholder").val());
  if($('#wpappp-popup3-email-text-placeholder').val().length === 0){
    $('#wpup-popup3-email-text').attr('placeholder' , 'Enter Your email');
  }
});


$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subscribe-button').css('background-color', $('#wpappp-popup3-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subscribe-button').css('background-color', $('#wpappp-popup3-action-button-background-color').val());
});

$( "#wpappp-popup3-action-button-text" ).keyup(function() {
  $('#wpup-popup3-subscribe-button').attr('value' , $("#wpappp-popup3-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subscribe-button').css('color', $('#wpappp-popup3-action-button-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-subscribe-button').css('color', $('#wpappp-popup3-action-button-text-color').val());
});

$( "#wpappp-popup3-security-note-text" ).keyup(function() {
  $('#wpup-popup3-security-note-text').html($("#wpappp-popup3-security-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-security-note-text').css('color', $('#wpappp-popup3-security-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-security-note-text').css('color', $('#wpappp-popup3-security-note-text-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-security-note-container').css('background-color', $('#wpappp-popup3-security-note-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3')
    $('#wpup-popup3-security-note-container').css('background-color', $('#wpappp-popup3-security-note-background-color').val());
});

/*============================  popup3 live changes ends here  ========================================*/

/*============================  popup4 live changes  ==================================================*/

$( "#wpappp-popup4-width").focusout(function() {
  $( "#wpup-popup4-container" ).css( "width",$( "#wpappp-popup4-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-container').css('background-color',$('#wpappp-popup4-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-container').css('background-color',$('#wpappp-popup4-background-color').val());
});

$( "#wpappp-popup4-heading-text" ).keyup(function() {
  $('#wpup-popup4-heading1').html($("#wpappp-popup4-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-heading1').css('color',$('#wpappp-popup4-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-heading1').css('color',$('#wpappp-popup4-heading-text-color').val());
});


$( "#wpappp-popup4-heading-font-size" ).change(function() {
  $('#wpup-popup4-heading1').css('font-size',$('#wpappp-popup4-heading-font-size :selected').text());
});

$( "#wpappp-popup4-subheading1-text" ).keyup(function() {
  $('#wpup-popup4-heading2').html($("#wpappp-popup4-subheading1-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-heading2').css('color',$('#wpappp-popup4-subheading1-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-heading2').css('color',$('#wpappp-popup4-subheading1-text-color').val());
});

$( "#wpappp-popup4-subheading1-font-size" ).change(function() {
  $('#wpup-popup4-heading2').css('font-size',$('#wpappp-popup4-subheading1-font-size :selected').text());
});

$( "#wpappp-popup4-subheading2-text" ).keyup(function() {
  $('#wpup-popup4-subheading1').html($("#wpappp-popup4-subheading2-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subheading1').css('color',$('#wpappp-popup4-subheading2-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subheading1').css('color',$('#wpappp-popup4-subheading2-text-color').val());
});

$( "#wpappp-popup4-subheading2-font-size" ).change(function() {
  $('#wpup-popup4-subheading1').css('font-size',$('#wpappp-popup4-subheading1-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-center-content').css('background-color',$('#wpappp-popup4-form-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-center-content').css('background-color',$('#wpappp-popup4-form-background-color').val());
});

$( "#wpappp-popup4-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup4-label-name').html($("#wpappp-popup4-name-text-placeholder").val());
  if($('#wpappp-popup4-name-text-placeholder').val().length === 0){
    $('#wpup-popup4-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup4-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup4-label-email').html($("#wpappp-popup4-email-text-placeholder").val());
  if($('#wpappp-popup4-email-text-placeholder').val().length === 0){
    $('#wpup-popup4-email-text').attr('placeholder' , 'Enter Your email');
  }
});


$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subscribe-button').css('background-color', $('#wpappp-popup4-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subscribe-button').css('background-color', $('#wpappp-popup4-action-button-background-color').val());
});

$( "#wpappp-popup4-action-button-text" ).keyup(function() {
  $('#wpup-popup4-subscribe-button').attr('value' , $("#wpappp-popup4-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subscribe-button').css('color', $('#wpappp-popup4-action-button-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subscribe-button').css('color', $('#wpappp-popup4-action-button-text-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup4-action-button-border-shadow-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup4-action-button-border-shadow-color').val());
});

$( "#wpappp-popup4-security-note-text" ).keyup(function() {
  $('#wpup-popup4-security-note-text').html($("#wpappp-popup4-security-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-security-note-text').css('color', $('#wpappp-popup4-security-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4')
    $('#wpup-popup4-security-note-text').css('color', $('#wpappp-popup4-security-note-text-color').val());
});


/*============================  popup4 live changes ends here  ========================================*/

/*============================  popup5 live changes  ==================================================*/

$( "#wpappp-popup5-width").focusout(function() {
  $( "#wpup-popup5-container" ).css( "width",$( "#wpappp-popup5-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5'){
    $('#wpup-popup5-container').css('background-color',$('#wpappp-popup5-background-color').val());
    $('#wpup-popup5-container').css('border-bottom','5px solid'+$('#wpappp-popup5-background-color').val());
  }});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5'){
    $('#wpup-popup5-container').css('background-color',$('#wpappp-popup5-background-color').val());
    $('#wpup-popup5-container').css('border-bottom','5px solid'+$('#wpappp-popup5-background-color').val());
  }});

$( "#wpappp-popup5-heading-text" ).keyup(function() {
  $('#wpup-popup5-header').html($("#wpappp-popup5-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-header').css('color',$('#wpappp-popup5-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-header').css('color',$('#wpappp-popup5-heading-text-color').val());
});


$( "#wpappp-popup5-heading-font-size" ).change(function() {
  $('#wpup-popup5-header').css('font-size',$('#wpappp-popup5-heading-font-size :selected').text());
});

$( "#wpappp-popup5-subheading-text" ).keyup(function() {
  $('#wpup-popup5-subheader').html($("#wpappp-popup5-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subheader').css('color',$('#wpappp-popup5-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subheader').css('color',$('#wpappp-popup5-subheading-text-color').val());
});

$( "#wpappp-popup5-subheading-font-size" ).change(function() {
  $('#wpup-popup5-subheader').css('font-size',$('#wpappp-popup5-subheading-font-size :selected').text());
});

$( "#wpappp-popup5-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup5-name-text').attr('placeholder' , $("#wpappp-popup5-name-text-placeholder").val());
  if($('#wpappp-popup5-name-text-placeholder').val().length === 0){
    $('#wpup-popup5-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup5-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup5-email-text').attr('placeholder' , $("#wpappp-popup5-email-text-placeholder").val());
  if($('#wpappp-popup5-email-text-placeholder').val().length === 0){
    $('#wpup-popup5-email-text').attr('placeholder' , 'Enter Your email');
  }
});


$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subscribe-button').css('background-color', $('#wpappp-popup5-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subscribe-button').css('background-color', $('#wpappp-popup5-action-button-background-color').val());
});

$( "#wpappp-popup5-action-button-text" ).keyup(function() {
  $('#wpup-popup5-subscribe-button').attr('value' , $("#wpappp-popup5-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subscribe-button').css('color', $('#wpappp-popup5-action-button-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subscribe-button').css('color', $('#wpappp-popup5-action-button-text-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup5-action-button-border-shadow-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-subscribe-button').css('box-shadow','3px 3px 3px '+$('#wpappp-popup5-action-button-border-shadow-color').val());
});

$( "#wpappp-popup5-security-note-text" ).keyup(function() {
  $('#wpup-popup5-security-note-text').html($("#wpappp-popup5-security-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-security-note-text').css('color', $('#wpappp-popup5-security-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5')
    $('#wpup-popup5-security-note-text').css('color', $('#wpappp-popup5-security-note-text-color').val());
});


/*============================  popup5 live changes ends here  ========================================*/

/*============================  popup6 live changes  ==================================================*/

$( "#wpappp-popup6-width").focusout(function() {
  $( "#wpup-popup6-container" ).css( "width",$( "#wpappp-popup6-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-container').css('background-color',$('#wpappp-popup6-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-container').css('background-color',$('#wpappp-popup6-background-color').val());
});

$( "#wpappp-popup6-heading-text" ).keyup(function() {
  $('#wpup-popup6-heading').html($("#wpappp-popup6-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-heading').css('color',$('#wpappp-popup6-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-heading').css('color',$('#wpappp-popup6-heading-text-color').val());
});


$( "#wpappp-popup6-heading-font-size" ).change(function() {
  $('#wpup-popup6-heading').css('font-size',$('#wpappp-popup6-heading-font-size :selected').text());
});

$( "#wpappp-popup6-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup6-name-text').attr('placeholder' , $("#wpappp-popup6-name-text-placeholder").val());
  if($('#wpappp-popup6-name-text-placeholder').val().length === 0){
    $('#wpup-popup6-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup6-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup6-email-text').attr('placeholder' , $("#wpappp-popup6-email-text-placeholder").val());
  if($('#wpappp-popup6-email-text-placeholder').val().length === 0){
    $('#wpup-popup6-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-subscribe-button').css('background-color', $('#wpappp-popup6-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-subscribe-button').css('background-color', $('#wpappp-popup6-action-button-background-color').val());
});

$( "#wpappp-popup6-action-button-text" ).keyup(function() {
  $('#wpup-popup6-subscribe-button').attr('value' , $("#wpappp-popup6-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-subscribe-button').css('color', $('#wpappp-popup6-action-button-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-subscribe-button').css('color', $('#wpappp-popup6-action-button-text-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-subscribe-button').css('border-bottom','5px solid'+$('#wpappp-popup6-action-button-border-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-subscribe-button').css('border-bottom','5px solid'+$('#wpappp-popup6-action-button-border-color').val());
});

$( "#wpappp-popup6-close-note-text" ).keyup(function() {
  $('#wpup-popup6-info').html($("#wpappp-popup6-close-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-info').css('color', $('#wpappp-popup6-close-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6')
    $('#wpup-popup6-info').css('color', $('#wpappp-popup6-close-note-text-color').val());
});


/*============================  popup6 live changes ends here  ========================================*/

/*============================  popup7 live changes  ==================================================*/

$( "#wpappp-popup7-width").focusout(function() {
  $( "#wpup-popup7-container" ).css( "width",$( "#wpappp-popup7-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-container').css('background-color',$('#wpappp-popup7-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-container').css('background-color',$('#wpappp-popup7-background-color').val());
});

$( "#wpappp-popup7-heading-text" ).keyup(function() {
  $('#wpup-popup7-heading1').html($("#wpappp-popup7-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-heading1').css('color',$('#wpappp-popup7-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-heading1').css('color',$('#wpappp-popup7-heading-text-color').val());
});


$( "#wpappp-popup7-heading-font-size" ).change(function() {
  $('#wpup-popup7-heading1').css('font-size',$('#wpappp-popup7-heading-font-size :selected').text());
});

$( "#wpappp-popup7-subheading-text" ).keyup(function() {
  $('#wpup-popup7-heading2').html($("#wpappp-popup7-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-heading2').css('color',$('#wpappp-popup7-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-heading2').css('color',$('#wpappp-popup7-subheading-text-color').val());
});



$( "#wpappp-popup7-subheading-font-size" ).change(function() {
  $('#wpup-popup7-heading2').css('font-size',$('#wpappp-popup7-subheading-font-size :selected').text());
});

$( "#wpappp-popup7-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup7-email-text').attr('placeholder' , $("#wpappp-popup7-email-text-placeholder").val());
  if($('#wpappp-popup7-email-text-placeholder').val().length === 0){
    $('#wpup-popup7-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-email-text').css('border','1px solid'+$('#wpappp-popup7-text-field-border-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-email-text').css('border','1px solid'+$('#wpappp-popup7-text-field-border-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7'){
    $('#wpup-popup7-button').css('background-color', $('#wpappp-popup7-action-button-background-color').val());
    $('#wpup-popup7-container').css('border-left','5px solid'+$('#wpappp-popup7-action-button-background-color').val());
  }});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7'){
    $('#wpup-popup7-button').css('background-color', $('#wpappp-popup7-action-button-background-color').val());
    $('#wpup-popup7-container').css('border-left','5px solid'+$('#wpappp-popup7-action-button-background-color').val());
  }});

$( "#wpappp-popup7-close-note-text" ).keyup(function() {
  $('#wpup-popup7-close-note').html($("#wpappp-popup7-close-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-close-note').css('color', $('#wpappp-popup7-close-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7')
    $('#wpup-popup7-close-note').css('color', $('#wpappp-popup7-close-note-text-color').val());
});


/*============================  popup7 live changes ends here  ========================================*/


/*============================  popup8 live changes  ==================================================*/

$( "#wpappp-popup8-width").focusout(function() {
  $( "#wpup-popup8-container" ).css( "width",$( "#wpappp-popup8-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-container').css('background-color',$('#wpappp-popup8-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-container').css('background-color',$('#wpappp-popup8-background-color').val());
});

$( "#wpappp-popup8-heading-text" ).keyup(function() {
  $('#wpup-popup8-heading1').html($("#wpappp-popup8-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-heading1').css('color',$('#wpappp-popup8-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-heading1').css('color',$('#wpappp-popup8-heading-text-color').val());
});


$( "#wpappp-popup8-heading-font-size" ).change(function() {
  $('#wpup-popup8-heading1').css('font-size',$('#wpappp-popup8-heading-font-size :selected').text());
});

$( "#wpappp-popup8-subheading-text" ).keyup(function() {
  $('#wpup-popup8-heading2').html($("#wpappp-popup8-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-heading2').css('color',$('#wpappp-popup8-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-heading2').css('color',$('#wpappp-popup8-subheading-text-color').val());
});


$( "#wpappp-popup8-subheading-font-size" ).change(function() {
  $('#wpup-popup8-heading2').css('font-size',$('#wpappp-popup8-subheading-font-size :selected').text());
});

$( "#wpappp-popup8-subheading2-text" ).keyup(function() {
  $('#wpup-popup8-subheading').html($("#wpappp-popup8-subheading2-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-subheading').css('color',$('#wpappp-popup8-subheading2-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-subheading').css('color',$('#wpappp-popup8-subheading2-text-color').val());
});


$( "#wpappp-popup8-subheading2-font-size" ).change(function() {
  $('#wpup-popup8-subheading').css('font-size',$('#wpappp-popup8-subheading2-font-size :selected').text());
});

$( "#wpappp-popup8-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup8-email-text').attr('placeholder' , $("#wpappp-popup8-email-text-placeholder").val());
  if($('#wpappp-popup8-email-text-placeholder').val().length === 0){
    $('#wpup-popup8-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-button').css('background-color', $('#wpappp-popup8-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-button').css('background-color', $('#wpappp-popup8-action-button-background-color').val());
});

$( "#wpappp-popup8-action-button-text" ).keyup(function() {
  $('#wpup-popup8-button').attr('value' , $("#wpappp-popup8-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-button').css('color', $("#wpappp-popup8-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-button').css('color', $("#wpappp-popup8-action-button-text-color").val());
});

$( "#wpappp-popup8-close-note-text" ).keyup(function() {
  $('#wpup-popup8-close-text').html($("#wpappp-popup8-close-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-close-text').css('color', $('#wpappp-popup8-close-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8')
    $('#wpup-popup8-close-text').css('color', $('#wpappp-popup8-close-note-text-color').val());
});


/*============================  popup8 live changes ends here  ========================================*/


/*============================  popup9 live changes  ==================================================*/

$( "#wpappp-popup9-width").focusout(function() {
  $( "#wpup-popup9-container" ).css( "width",$( "#wpappp-popup9-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-container').css('background-color',$('#wpappp-popup9-background-color-top').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-container').css('background-color',$('#wpappp-popup9-background-color-top').val());
});

$( "#wpappp-popup9-heading-text" ).keyup(function() {
  $('#wpup-popup9-heading1').html($("#wpappp-popup9-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-heading1').css('color',$('#wpappp-popup9-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-heading1').css('color',$('#wpappp-popup9-heading-text-color').val());
});


$( "#wpappp-popup9-heading-font-size" ).change(function() {
  $('#wpup-popup9-heading1').css('font-size',$('#wpappp-popup9-heading-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-top-content').css('border-bottom','5px solid'+$('#wpappp-popup9-seperator-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-top-content').css('border-bottom','5px solid'+$('#wpappp-popup9-seperator-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-middle-content').css('background-color',$('#wpappp-popup9-background-color-bottom').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-middle-content').css('background-color',$('#wpappp-popup9-background-color-bottom').val());
});

$( "#wpappp-popup9-subheading-text" ).keyup(function() {
  $('#wpup-popup9-main-text').html($("#wpappp-popup9-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-main-text').css('color',$('#wpappp-popup9-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-main-text').css('color',$('#wpappp-popup9-subheading-text-color').val());
});


$( "#wpappp-popup9-subheading-font-size" ).change(function() {
  $('#wpup-popup9-main-text').css('font-size',$('#wpappp-popup9-subheading-font-size :selected').text());
});

$( "#wpappp-popup9-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup9-email-text').attr('placeholder' , $("#wpappp-popup9-email-text-placeholder").val());
  if($('#wpappp-popup9-email-text-placeholder').val().length === 0){
    $('#wpup-popup9-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-button').css('background-color', $('#wpappp-popup9-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-button').css('background-color', $('#wpappp-popup9-action-button-background-color').val());
});

$( "#wpappp-popup9-action-button-text" ).keyup(function() {
  $('#wpup-popup9-button').attr('value' , $("#wpappp-popup9-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-button').css('color', $("#wpappp-popup9-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-button').css('color', $("#wpappp-popup9-action-button-text-color").val());
});

$( "#wpappp-popup9-privacy-text" ).keyup(function() {
  $('#wpup-popup9-privacy-text').html($("#wpappp-popup9-privacy-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-privacy-text').css('color', $('#wpappp-popup9-privacy-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-privacy-text').css('color', $('#wpappp-popup9-privacy-text-color').val());
});

$( "#wpappp-popup9-close-note-text" ).keyup(function() {
  $('#wpup-popup9-close-text').html($("#wpappp-popup9-close-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-close-text').css('color', $('#wpappp-popup9-close-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup9')
    $('#wpup-popup9-close-text').css('color', $('#wpappp-popup9-close-note-text-color').val());
});


/*============================  popup9 live changes ends here  ========================================*/


/*============================  popup10 live changes  ==================================================*/

$( "#wpappp-popup10-width").focusout(function() {
  $( "#wpup-popup10-container" ).css( "width",$( "#wpappp-popup10-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-top-content').css('background-color',$('#wpappp-popup10-background-color-top').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-top-content').css('background-color',$('#wpappp-popup10-background-color-top').val());
});

$( "#wpappp-popup10-heading-text" ).keyup(function() {
  $('#wpup-popup10-heading1').html($("#wpappp-popup10-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-heading1').css('color',$('#wpappp-popup10-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-heading1').css('color',$('#wpappp-popup10-heading-text-color').val());
});


$( "#wpappp-popup10-heading-font-size" ).change(function() {
  $('#wpup-popup10-heading1').css('font-size',$('#wpappp-popup10-heading-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-middle-content').css('background-color',$('#wpappp-popup10-background-color-bottom').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-middle-content').css('background-color',$('#wpappp-popup10-background-color-bottom').val());
});

$( "#wpappp-popup10-subheading-text" ).keyup(function() {
  $('#wpup-popup10-main-text').html($("#wpappp-popup10-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-main-text').css('color',$('#wpappp-popup10-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-main-text').css('color',$('#wpappp-popup10-subheading-text-color').val());
});


$( "#wpappp-popup10-subheading-font-size" ).change(function() {
  $('#wpup-popup10-main-text').css('font-size',$('#wpappp-popup10-subheading-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-button1').css('background-color', $('#wpappp-popup10-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-button1').css('background-color', $('#wpappp-popup10-action-button-background-color').val());
});

$( "#wpappp-popup10-action-button-text" ).keyup(function() {
  $('#wpup-popup10-button1').attr('value' , $("#wpappp-popup10-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-button1').css('color', $("#wpappp-popup10-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-button1').css('color', $("#wpappp-popup10-action-button-text-color").val());
});

$( "#wpappp-popup10-close-note-text" ).keyup(function() {
  $('#wpup-popup10-button2').attr('value', $("#wpappp-popup10-close-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-button2').css('color', $('#wpappp-popup10-close-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10')
    $('#wpup-popup10-button2').css('color', $('#wpappp-popup10-close-note-text-color').val());
});


/*============================  popup10 live changes ends here  ========================================*/


/*============================  popup11 live changes  ==================================================*/

$( "#wpappp-popup11-width").focusout(function() {
  $( "#wpup-popup11-container" ).css( "width",$( "#wpappp-popup11-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-container').css('background-color',$('#wpappp-popup11-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-container').css('background-color',$('#wpappp-popup11-background-color').val());
});

$( "#wpappp-popup11-heading-text" ).keyup(function() {
  $('#wpup-popup11-heading').html($("#wpappp-popup11-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-heading').css('color',$('#wpappp-popup11-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-heading').css('color',$('#wpappp-popup11-heading-text-color').val());
});


$( "#wpappp-popup11-heading-font-size" ).change(function() {
  $('#wpup-popup11-heading').css('font-size',$('#wpappp-popup11-heading-font-size :selected').text());
});

$( "#wpappp-popup11-subheading-text" ).keyup(function() {
  $('#wpup-popup11-main-text').html($("#wpappp-popup11-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-main-text').css('color',$('#wpappp-popup11-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-main-text').css('color',$('#wpappp-popup11-subheading-text-color').val());
});


$( "#wpappp-popup11-subheading-font-size" ).change(function() {
  $('#wpup-popup11-main-text').css('font-size',$('#wpappp-popup11-subheading-font-size :selected').text());
});

$( "#wpappp-popup11-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup11-email-text').attr('placeholder' , $("#wpappp-popup11-email-text-placeholder").val());
  if($('#wpappp-popup11-email-text-placeholder').val().length === 0){
    $('#wpup-popup11-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-button').css('background-color', $('#wpappp-popup11-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-button').css('background-color', $('#wpappp-popup11-action-button-background-color').val());
});

$( "#wpappp-popup11-action-button-text" ).keyup(function() {
  $('#wpup-popup11-button').attr('value' , $("#wpappp-popup11-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-button').css('color', $("#wpappp-popup11-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-button').css('color', $("#wpappp-popup11-action-button-text-color").val());
});

$( "#wpappp-popup11-close-note-text" ).keyup(function() {
  $('#wpup-popup11-close-text').html ($("#wpappp-popup11-close-note-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-close-text').css('color', $('#wpappp-popup11-close-note-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11')
    $('#wpup-popup11-close-text').css('color', $('#wpappp-popup11-close-note-text-color').val());
});


/*============================  popup11 live changes ends here  ========================================*/

/*============================  popup12 live changes  ==================================================*/

$( "#wpappp-popup12-width").focusout(function() {
  $( "#wpup-popup12-container" ).css( "width",$( "#wpappp-popup12-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-container').css('background-color',$('#wpappp-popup12-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-container').css('background-color',$('#wpappp-popup12-background-color').val());
});

$( "#wpappp-popup12-heading-text" ).keyup(function() {
  $('#wpup-popup12-heading1').html($("#wpappp-popup12-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-heading1').css('color',$('#wpappp-popup12-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-heading1').css('color',$('#wpappp-popup12-heading-text-color').val());
});


$( "#wpappp-popup12-heading-font-size" ).change(function() {
  $('#wpup-popup12-heading1').css('font-size',$('#wpappp-popup12-heading-font-size :selected').text());
});

$( "#wpappp-popup12-subheading-text" ).keyup(function() {
  $('#wpup-popup12-heading2').html($("#wpappp-popup12-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-heading2').css('color',$('#wpappp-popup12-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-heading2').css('color',$('#wpappp-popup12-subheading-text-color').val());
});


$( "#wpappp-popup12-subheading-font-size" ).change(function() {
  $('#wpup-popup12-heading2').css('font-size',$('#wpappp-popup12-subheading-font-size :selected').text());
});

$( "#wpappp-popup12-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup12-email-text').attr('placeholder' , $("#wpappp-popup12-email-text-placeholder").val());
  if($('#wpappp-popup12-email-text-placeholder').val().length === 0){
    $('#wpup-popup12-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-button').css('background-color', $('#wpappp-popup12-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-button').css('background-color', $('#wpappp-popup12-action-button-background-color').val());
});

$( "#wpappp-popup12-action-button-text" ).keyup(function() {
  $('#wpup-popup12-button').attr('value' , $("#wpappp-popup12-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-button').css('color', $("#wpappp-popup12-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-button').css('color', $("#wpappp-popup12-action-button-text-color").val());
});

$( "#wpappp-popup12-terms-text" ).keyup(function() {
  $('#wpup-popup12-terms').html ($("#wpappp-popup12-terms-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-terms').css('color', $('#wpappp-popup12-terms-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12')
    $('#wpup-popup12-terms').css('color', $('#wpappp-popup12-terms-text-color').val());
});


/*============================  popup12 live changes ends here  ========================================*/

/*============================  popup13 live changes  ==================================================*/

$( "#wpappp-popup13-width").focusout(function() {
  $( "#wpup-popup13-container" ).css( "width",$( "#wpappp-popup13-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-container').css('background-color',$('#wpappp-popup13-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-container').css('background-color',$('#wpappp-popup13-background-color').val());
});

$( "#wpappp-popup13-heading-text" ).keyup(function() {
  $('#wpup-popup13-heading').html($("#wpappp-popup13-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-heading').css('color',$('#wpappp-popup13-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-heading').css('color',$('#wpappp-popup13-heading-text-color').val());
});


$( "#wpappp-popup13-heading-font-size" ).change(function() {
  $('#wpup-popup13-heading').css('font-size',$('#wpappp-popup13-heading-font-size :selected').text());
});

$( "#wpappp-popup13-subheading-text" ).keyup(function() {
  $('#wpup-popup13-main-text').html($("#wpappp-popup13-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-main-text').css('color',$('#wpappp-popup13-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-main-text').css('color',$('#wpappp-popup13-subheading-text-color').val());
});


$( "#wpappp-popup13-subheading-font-size" ).change(function() {
  $('#wpup-popup13-main-text').css('font-size',$('#wpappp-popup13-subheading-font-size :selected').text());
});

$( "#wpappp-popup13-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup13-email-text').attr('placeholder' , $("#wpappp-popup13-email-text-placeholder").val());
  if($('#wpappp-popup13-email-text-placeholder').val().length === 0){
    $('#wpup-popup13-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-button').css('background-color', $('#wpappp-popup13-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-button').css('background-color', $('#wpappp-popup13-action-button-background-color').val());
});

$( "#wpappp-popup13-action-button-text" ).keyup(function() {
  $('#wpup-popup13-button').attr('value' , $("#wpappp-popup13-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-button').css('color', $("#wpappp-popup13-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13')
    $('#wpup-popup13-button').css('color', $("#wpappp-popup13-action-button-text-color").val());
});


/*============================  popup13 live changes ends here  ========================================*/


/*============================  popup14 live changes  ==================================================*/

$( "#wpappp-popup14-width").focusout(function() {
  $( "#wpup-popup14-container" ).css( "width",$( "#wpappp-popup14-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-container').css('background-color',$('#wpappp-popup14-container-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-container').css('background-color',$('#wpappp-popup14-container-background-color').val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-top-content').css('background-color',$('#wpappp-popup14-subcontainer-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-top-content').css('background-color',$('#wpappp-popup14-subcontainer-background-color').val());
});

$( "#wpappp-popup14-heading-text" ).keyup(function() {
  $('#wpup-popup14-main-text-header').html($("#wpappp-popup14-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-main-text-header').css('color',$('#wpappp-popup14-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-main-text-header').css('color',$('#wpappp-popup14-heading-text-color').val());
});


$( "#wpappp-popup14-heading-font-size" ).change(function() {
  $('#wpup-popup14-main-text-header').css('font-size',$('#wpappp-popup14-heading-font-size :selected').text());
});

$( "#wpappp-popup14-subheading-text" ).keyup(function() {
  $('#wpup-popup14-main-text-subheader').html($("#wpappp-popup14-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-main-text-subheader').css('color',$('#wpappp-popup14-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-main-text-subheader').css('color',$('#wpappp-popup14-subheading-text-color').val());
});


$( "#wpappp-popup14-subheading-font-size" ).change(function() {
  $('#wpup-popup14-main-text-subheader').css('font-size',$('#wpappp-popup14-subheading-font-size :selected').text());
});

$( "#wpappp-popup14-name-text-placeholder" ).keyup(function() {
  $('#wpup-popup14-name-text').attr('placeholder' , $("#wpappp-popup14-name-text-placeholder").val());
  if($('#wpappp-popup14-name-text-placeholder').val().length === 0){
    $('#wpup-popup14-name-text').attr('placeholder' , 'Enter Your name');
  }
});

$( "#wpappp-popup14-email-text-placeholder" ).keyup(function() {
  $('#wpup-popup14-email-text').attr('placeholder' , $("#wpappp-popup14-email-text-placeholder").val());
  if($('#wpappp-popup14-email-text-placeholder').val().length === 0){
    $('#wpup-popup14-email-text').attr('placeholder' , 'Enter Your email');
  }
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-button').css('background-color', $('#wpappp-popup14-action-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-button').css('background-color', $('#wpappp-popup14-action-button-background-color').val());
});

$( "#wpappp-popup14-action-button-text" ).keyup(function() {
  $('#wpup-popup14-button-text').html($("#wpappp-popup14-action-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-button').css('color', $("#wpappp-popup14-action-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-button').css('color', $("#wpappp-popup14-action-button-text-color").val());
});

$( "#wpappp-popup14-privacy-text" ).keyup(function() {
  $('#wpup-popup14-privacy-text').html ($("#wpappp-popup14-privacy-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-privacy-text').css('color', $('#wpappp-popup14-privacy-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14')
    $('#wpup-popup14-privacy-text').css('color', $('#wpappp-popup14-privacy-text-color').val());
});



/*============================  popup14 live changes ends here  ========================================*/


/*============================  popup15 live changes  ==================================================*/


$( "#wpappp-popup15-width").focusout(function() {
  $( "#wpappp-popup15-container" ).css( "width",$( "#wpappp-popup15-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-rightcontent').css('background-color',$('#wpappp-popup15-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-rightcontent').css('background-color',$('#wpappp-popup15-background-color').val());
});

$( "#wpappp-popup15-heading-text" ).keyup(function() {
  $('#wpappp-popup15-heading').html($("#wpappp-popup15-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-heading').css('color',$('#wpappp-popup15-heading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-heading').css('color',$('#wpappp-popup15-heading-text-color').val());
});


$( "#wpappp-popup15-heading-font-size" ).change(function() {
  $('#wpappp-popup15-heading').css('font-size',$('#wpappp-popup15-heading-font-size :selected').text());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-underline').css('background-color',$('#wpappp-popup15-separator-color-option').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-underline').css('background-color',$('#wpappp-popup15-separator-color-option').val());
});

$( "#wpappp-popup15-subheading-text" ).keyup(function() {
  $('#wpappp-popup15-subtext').html($("#wpappp-popup15-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-subtext').css('color',$('#wpappp-popup15-subheading-text-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-subtext').css('color',$('#wpappp-popup15-subheading-text-color').val());
});


$( "#wpappp-popup15-subheading-font-size" ).change(function() {
  $('#wpappp-popup15-subtext').css('font-size',$('#wpappp-popup15-subheading-font-size :selected').text());
});


$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-yesbtn').css('background-color', $('#wpappp-popup15-yes-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-yesbtn').css('background-color', $('#wpappp-popup15-yes-button-background-color').val());
});

$( "#wpappp-popup15-yes-button-text" ).keyup(function() {
  $('#wpappp-popup15-yesbtn').attr('value' , $("#wpappp-popup15-yes-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-yesbtn').css('color', $("#wpappp-popup15-yes-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-yesbtn').css('color', $("#wpappp-popup15-yes-button-text-color").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-nobtn').css('background-color', $('#wpappp-popup15-no-button-background-color').val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-nobtn').css('background-color', $('#wpappp-popup15-no-button-background-color').val());
});

$( "#wpappp-popup15-no-button-text" ).keyup(function() {
  $('#wpappp-popup15-nobtn').attr('value' , $("#wpappp-popup15-no-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-nobtn').css('color', $("#wpappp-popup15-no-button-text-color").val());
});
$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15')
    $('#wpappp-popup15-nobtn').css('color', $("#wpappp-popup15-no-button-text-color").val());
});


/*============================  popup15 live changes ends here  ========================================*/

/*============================  popup16 live changes  ==================================================*/


$( "#wpappp-popup16-width").focusout(function() {
  $( "#wpappp-popup16-container" ).css( "width",$( "#wpappp-popup16-width").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-container').css('background-color',$('#wpappp-popup16-background-color').val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-container').css('background-color',$('#wpappp-popup16-background-color').val());
});

$( "#wpappp-popup16-heading-text" ).keyup(function() {
  $('#wpappp-popup16-heading').html($("#wpappp-popup16-heading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-heading').css('color',$('#wpappp-popup16-heading-text-color').val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-heading').css('color',$('#wpappp-popup16-heading-text-color').val());
});


$( "#wpappp-popup16-heading-font-size" ).change(function() {
  $('#wpappp-popup16-heading').css('font-size',$('#wpappp-popup16-heading-font-size :selected').text());
});


$( "#wpappp-popup16-subheading-text" ).keyup(function() {
  $('#wpappp-popup16-subtext').html($("#wpappp-popup16-subheading-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-subtext').css('color',$('#wpappp-popup16-subheading-text-color').val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-subtext').css('color',$('#wpappp-popup16-subheading-text-color').val());
});


$( "#wpappp-popup16-subheading-font-size" ).change(function() {
  $('#wpappp-popup16-subtext').css('font-size',$('#wpappp-popup16-subheading-font-size :selected').text());
});


$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-yesbtn').css('background-color', $('#wpappp-popup16-yes-button-background-color').val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-yesbtn').css('background-color', $('#wpappp-popup16-yes-button-background-color').val());
});

$( "#wpappp-popup16-yes-button-text" ).keyup(function() {
  $('#wpappp-popup16-yesbtn').attr('value' , $("#wpappp-popup16-yes-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-yesbtn').css('color', $("#wpappp-popup16-yes-button-text-color").val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-yesbtn').css('color', $("#wpappp-popup16-yes-button-text-color").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-nobtn').css('background-color', $('#wpappp-popup16-no-button-background-color').val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-nobtn').css('background-color', $('#wpappp-popup16-no-button-background-color').val());
});

$( "#wpappp-popup16-no-button-text" ).keyup(function() {
  $('#wpappp-popup16-nobtn').attr('value' , $("#wpappp-popup16-no-button-text").val());
});

$( ".wp-picker-holder>div" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-nobtn').css('color', $("#wpappp-popup16-no-button-text-color").val());
});

$( ".iris-palette" ).click(function() {
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16')
    $('#wpappp-popup16-nobtn').css('color', $("#wpappp-popup16-no-button-text-color").val());
});


/*============================  popup16 live changes ends here  ========================================*/

/*Reset Settings*/

$('#wpappp_reset_popup_settings').click(function(){
  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup1'){
    $( "#wpup-popup1-container" ).css( "width", "500px");
    $( "#wpappp-popup1-width").val('500');
    $('#wpappp-popup1-image-url').val($("#wpappp-default-background-image").val());
    $('#wpappp-popup1-url-image').attr('src', $('#wpappp-popup1-image-url').val());
    $('#wpup-popup1-container').css('background-image','url("'+$("#wpappp-default-background-image").val()+'")');

    $('#wpup-popup1-heading1').css('color',"white");
    $('#wpappp-popup1-heading-text-color').val('#ffffff')
    $('#line-break').css('background-color',"#ff4300");
    $('#wpappp-popup1-seperator-color').val('#ff4300');

    $('#wpup-popup1-heading2').css('color',"#ffffff");
    $('#wpappp-popup1-subheading-text-color').val('#ffffff');

    $('.wpappp-popup1-border-color').css('border',"1px solid #ff4300" );
    $('#wpappp-popup1-text-field-border-color').val('#ff4300');


    $('#wpup-popup1-subscribe-button').css('background-color',"#ff4300" );
    $('#wpappp-popup1-action-button-background-color').val('#ff4300');

    $('#wpup-popup1-subscribe-button').css('color', "#ffffff");
    $('#wpappp-popup1-action-button-text-color').val('#ffffff');

    $('#wpup-popup1-security-note-text').css('color', "#ffffff");
    $('#wpappp-popup1-security-note-text-color').val('#ffffff');

  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup2'){
    $( "#wpup-popup2-container" ).css( "width", "600px");
    $( "#wpappp-popup2-width").val('600');
    $("#wpup-popup2-container-top").css("background-color","#0074ed");
    $("#wpappp-popup2-background-color").val('#0074ed');
    $("#wpappp-popup2-triangle-down").css("border-top", '30px solid #0074ed');
    $("#wpappp-popup2-triangle-down").val('#0074ed');
    $('#wpappp-popup2-image-url').val($("#wpappp-popup2-default-background-image").val());
    $('#wpappp-popup2-url-image').attr('src',$('#wpappp-popup2-image-url').val());
    $('#wpappp-popup2-image1').attr('src', $("#wpappp-popup2-default-background-image").val());

    $('#wpup-popup2-heading1').css('color',"white");
    $('#wpappp-popup2-heading-text-color').val('#ffffff')


    $('#wpup-popup2-subheading1').css('color',"#000000");
    $('#wpappp-popup2-subheading1-text-color').val('#000000');

    $('#wpup-popup2-subheading2').css('color',"#000000");
    $('#wpappp-popup2-subheading2-text-color').val('#000000');



    $('#wpup-popup2-subscribe-button').css('background-color',"#f95549" );
    $('#wpappp-popup2-action-button-background-color').val('#f95549');

    $('#wpup-popup2-subscribe-button').css('color', "#ffffff");
    $('#wpappp-popup2-action-button-text-color').val('#ffffff');

    $('#wpup-popup2-security-note-text').css('color', "#000000");
    $('#wpappp-popup2-security-note-text-color').val('#000000');

    $('#wpup-popup2-subscribe-button').css('box-shadow','5px 2px 5px #f95549');
    $('#wpappp-popup2-action-button-border-shadow-color').val('#f95549');

  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup3'){
    $( "#wpup-popup3-container" ).css( "width", "660px");
    $( "#wpappp-popup3-width").val('660');
    $('#wpappp-popup3-image-url').val($("#wpappp-popup3-default-background-image").val());
    $('#wpappp-popup3-url-image').attr('src',$('#wpappp-popup3-image-url').val());
    $('#wpup-popup3-background-image').css('background-image','url("'+$("#wpappp-popup3-default-background-image").val()+'")');
    $('#wpup-popup3-container-top').css('background-color',"#222222");
    $('#wpappp-popup3-background-color').val('#222222');
    $('#wpup-popup3-heading1').css('color',"#ffffff");
    $('#wpappp-popup3-heading-text-color').val('#ffffff');
    $('#wpup-popup3-subheading1').css('color',"#ffffff");
    $('#wpappp-popup3-subheading1-text-color').val('#ffffff');
    $('#wpup-popup3-subheading2').css('color',"#ffffff");
    $('#wpappp-popup3-subheading2-text-color').val('#ffffff');
    $('#wpup-popup3-container-middle').css('background-color',"#fb0007");
    $('#wpappp-popup3-form-background-color').val('#fb0007');
    $('#wpup-popup3-subscribe-button').css('background-color',"#fb0007" );
    $('#wpappp-popup3-action-button-background-color').val('#fb0007');
    $('#wpup-popup3-subscribe-button').css('color', "#ffffff");
    $('#wpappp-popup3-action-button-text-color').val('#ffffff')
    $('#wpup-popup3-security-note-text').css('color', "#ffffff");
    $('#wpappp-popup3-security-note-text-color').val('#ffffff');
    $('#wpup-popup3-security-note-container').css('background-color',"#222222" );
    $('#wpappp-popup3-security-note-background-color').val('#222222');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup4'){
    $( "#wpup-popup4-container" ).css( "width","600px");
    $( "#wpappp-popup4-width").val('600');
    $('#wpappp-popup4-image-url').val($("#wpappp-popup4-default-background-image").val());
    $('#wpappp-popup4-url-image').attr('src',$('#wpappp-popup4-image-url').val());
    $('#wpup-popup4-container').css('background-image','url("'+$("#wpappp-popup4-default-background-image").val()+'")');
    $('#wpup-popup4-container').css('background-color',"#ffffff");
    $('#wpappp-popup4-background-color').val('#ffffff');
    $('#wpup-popup4-heading1').css('color',"#ffffff");
    $('#wpappp-popup4-heading-text-color').val('#ffffff');
    $('#wpup-popup4-heading2').css('color',"#9296BF");
    $('#wpappp-popup4-subheading1-text-color').val('#9296BF');
    $('#wpup-popup4-subheading1').css('color',"#9296BF");
    $('#wpappp-popup4-subheading2-text-color').val('#9296BF');
    $('#wpup-popup4-center-content').css('background-color', "#88D16F");
    $('#wpappp-popup4-form-background-color').val('#88D16F');
    $('#wpup-popup4-subscribe-button').css('background-color',"#F95549" );
    $('#wpappp-popup4-action-button-background-color').val('#F95549');
    $('#wpup-popup4-subscribe-button').css('color', "#ffffff");
    $('#wpappp-popup4-action-button-text-color').val('#ffffff');
    $('#wpup-popup4-subscribe-button').css('box-shadow','3px 3px 3px #D00F00');
    $('#wpappp-popup4-action-button-border-shadow-color').val('#D00F00');
    $('#wpup-popup4-security-note-text').css('color', "#000000");
    $('#wpappp-popup4-security-note-text-color').val('#000000');

  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup5'){
    $( "#wpup-popup5-container" ).css( "width", "700px");
    $( "#wpappp-popup5-width").val('700');
    $('#wpup-popup5-container').css('background-color',"#FFD804");
    $('#wpappp-popup5-background-color').val('#FFD804');
    $('#wpappp-popup5-image-url').val($("#wpappp-popup5-default-background-image").val());
    $('#wpappp-popup5-url-image').attr('src',$('#wpappp-popup5-image-url').val());
    $('#wpup-popup5-center-content-left').css('background-image','url("'+$("#wpappp-popup5-default-background-image").val()+'")');
    $('#wpup-popup5-header').css('color',"#000000");
    $('#wpappp-popup5-heading-text-color').val('#000000');
    $('#wpup-popup5-subheader').css('color', "#936B0C");
    $('#wpappp-popup5-subheading-text-color').val('#936B0C');
    $('#wpup-popup5-subscribe-button').css('background-color', "#936B0C");
    $('#wpappp-popup5-action-button-background-color').val('#936B0C');
    $('#wpup-popup5-subscribe-button').css('color', "#ffffff");
    $('#wpappp-popup5-action-button-text-color').val('#ffffff');
    $('#wpup-popup5-subscribe-button').css('box-shadow',"3px 3px 3px #936B0C");
    $('#wpappp-popup5-action-button-border-shadow-color').val('#936B0C');
    $('#wpup-popup5-security-note-text').css('color', "#000000");
    $('#wpappp-popup5-security-note-text-color').val('#000000');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup6'){
    $( "#wpup-popup6-container" ).css( "width", "890px");
    $( "#wpappp-popup6-width").val('890');
    $('#wpup-popup6-container').css('background-color', "#e7e7e7");
    $('#wpappp-popup6-background-color').val('#e7e7e7');
    $('#wpup-popup6-heading').css('color', "#363636");
    $('#wpappp-popup6-heading-text-color').val('#363636');
    $('#wpup-popup6-subscribe-button').css('background-color',"#4ecdc4" );
    $('#wpappp-popup6-action-button-background-color').val('#4ecdc4');
    $('#wpup-popup6-subscribe-button').css('color', "#ffffff");
    $('#wpappp-popup6-action-button-text-color').val('#ffffff');
    $('#wpup-popup6-subscribe-button').css('border-bottom',"5px solid #45b7af");
    $('#wpappp-popup6-action-button-border-color').val('#45b7af')
    $('#wpup-popup6-info').css('color', "#000000");
    $('#wpappp-popup6-close-note-text-color').val('#000000');

  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup7'){
    $( "#wpup-popup7-container" ).css( "width","700px");
    $( "#wpappp-popup7-width").val('700');
    $('#wpup-popup7-container').css('background-color',"#f2f2f2");
    $('#wpappp-popup7-background-color').val('#f2f2f2');
    $('#wpup-popup7-heading1').css('color',"#a0a4a9");
    $('#wpappp-popup7-heading-text-color').val('#a0a4a9');
    $('#wpup-popup7-heading2').css('color',"#a0a4a9");
    $('#wpappp-popup7-subheading-text-color').val('#a0a4a9');
    $('#wpup-popup7-email-text').css('border','1px solid #a0a4a9');
    $('#wpappp-popup7-text-field-border-color').val('#a0a4a9');
    $('#wpup-popup7-button').css('background-color',"#c90000" );
    $('#wpappp-popup7-action-button-background-color').val('#c90000');
    $('#wpup-popup7-container').css('border-left','5px solid #c90000');
    $('#wpappp-popup7-action-button-background-color').val('#c90000');
    $('#wpup-popup7-close-note').css('color', "#000000");
    $('#wpappp-popup7-close-note-text-color').val('#000000');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup8'){
    $( "#wpup-popup8-container" ).css( "width","500px");
    $( "#wpappp-popup8-width").val('500');
    $('#wpup-popup8-container').css('background-color',"#ffffff");
    $('#wpappp-popup8-background-color').val('#ffffff');
    $('#wpup-popup8-heading1').css('color',"#e80000");
    $('#wpappp-popup8-heading-text-color').val('#e80000');
    $('#wpup-popup8-heading2').css('color',"#979ea3");
    $('#wpappp-popup8-subheading-text-color').val('#979ea3');
    $('#wpup-popup8-subheading').css('color',"#979ea3");
    $('#wpappp-popup8-subheading2-text-color').val('#979ea3');
    $('#wpup-popup8-button').css('background-color', "#e80000");
    $('#wpappp-popup8-action-button-background-color').val('#e80000');
    $('#wpup-popup8-button').css('color', "#ffffff");
    $("#wpappp-popup8-action-button-text-color").val('#ffffff');
    $('#wpup-popup8-close-text').css('color', "#979ea3");
    $('#wpappp-popup8-close-note-text-color').val('#979ea3');
  }

  if( $('select#wpappp-popup-select-theme option:selected').val() == 'popup9'){
    $( "#wpup-popup9-container" ).css( "width","700px");
    $( "#wpappp-popup9-width").val('700');
    $('#wpup-popup9-container').css('background-color',"#ffffff");
    $('#wpappp-popup9-background-color-top').val('#ffffff');
    $('#wpup-popup9-heading1').css('color',"#000000");
    $('#wpappp-popup9-heading-text-color').val('#000000');
    $('#wpup-popup9-top-content').css('border-bottom','5px solid #e0e0e0');
    $('#wpappp-popup9-seperator-color').val('#e0e0e0');
    $('#wpup-popup9-middle-content').css('background-color', "#d4d4d4");
    $('#wpappp-popup9-background-color-bottom').val('#d4d4d4');
    $('#wpup-popup9-main-text').css('color',"#969696");
    $('#wpappp-popup9-subheading-text-color').val('#969696');
    $('#wpup-popup9-button').css('background-color', "#ef0000");
    $('#wpappp-popup9-action-button-background-color').val('#ef0000');
    $('#wpup-popup9-button').css('color', "#ffffff");
    $("#wpappp-popup9-action-button-text-color").val('#ffffff');
    $('#wpup-popup9-privacy-text').css('color', "#969696");
    $('#wpappp-popup9-privacy-text-color').val('#969696');
    $('#wpup-popup9-close-text').css('color', "#969696");
    $('#wpappp-popup9-close-note-text-color').val('#969696');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup10'){
    $( "#wpup-popup10-container" ).css( "width","600px");
    $( "#wpappp-popup10-width").val('600');
    $('#wpup-popup10-top-content').css('background-color',"#68d1e6");
    $('#wpappp-popup10-background-color-top').val('#68d1e6');
    $('#wpup-popup10-heading1').css('color',"#ffffff");
    $('#wpappp-popup10-heading-text-color').val('#ffffff');
    $('#wpappp-popup10-image-url').val($("#wpappp-popup10-default-background-image").val());
    $('#wpappp-popup10-url-image').attr('src',$('#wpappp-popup10-image-url').val());
    $('#wpup-popup10-info-image').attr('src', $("#wpappp-popup10-default-background-image").val());
    $('#wpup-popup10-middle-content').css('background-color',"#f8f8f8");
    $('#wpappp-popup10-background-color-bottom').val('#f8f8f8');
    $('#wpup-popup10-main-text').css('color',"#d3d3d3");
    $('#wpappp-popup10-subheading-text-color').val('#d3d3d3');
    $('#wpup-popup10-button1').css('background-color',"#f98531" );
    $('#wpappp-popup10-action-button-background-color').val('#f98531');
    $('#wpup-popup10-button1').css('color', "#ffffff");
    $("#wpappp-popup10-action-button-text-color").val('#ffffff');
    $('#wpup-popup10-button2').css('color', "#d3d3d3");
    $('#wpappp-popup10-close-note-text-color').val('#d3d3d3');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup11'){
    $( "#wpup-popup11-container" ).css( "width","700px");
    $( "#wpappp-popup11-width").val('700');
    $('#wpup-popup11-container').css('background-color',"#ffffff");
    $('#wpappp-popup11-background-color').val('#ffffff');
    $('#wpup-popup11-heading').css('color',"#2b2b2b");
    $('#wpappp-popup11-heading-text-color').val('#2b2b2b');
    $('#wpup-popup11-main-text').css('color',"#2b2b2b");
    $('#wpappp-popup11-subheading-text-color').val('#2b2b2b');
    $('#wpup-popup11-button').css('background-color', "#2b2b2b");
    $('#wpappp-popup11-action-button-background-color').val('#2b2b2b');
    $('#wpup-popup11-button').css('color', "#ffffff");
    $("#wpappp-popup11-action-button-text-color").val('"#ffffff');
    $('#wpup-popup11-close-text').css('color', "#2b2b2b");
    $('#wpappp-popup11-close-note-text-color').val('#2b2b2b');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup12'){
    $( "#wpup-popup12-container" ).css( "width","800px");
    $( "#wpappp-popup12-width").val('800');
    $('#wpappp-popup12-image-url').val($("#wpappp-popup12-default-background-image").val());
    $('#wpappp-popup12-url-image').attr('src',$('#wpappp-popup12-image-url').val());
    $('#wpup-popup12-container').css('background-image','url("'+$("#wpappp-popup12-default-background-image").val()+'")');
    $('#wpup-popup12-container').css('background-color',"#ffffff");
    $('#wpappp-popup12-background-color').val('#ffffff');
    $('#wpup-popup12-heading1').css('color',"#ffffff");
    $('#wpappp-popup12-heading-text-color').val("#ffffff");
    $('#wpup-popup12-heading2').css('color',"#ffffff");
    $('#wpappp-popup12-subheading-text-color').val('#ffffff');
    $('#wpup-popup12-button').css('background-color', "#f2ce27");
    $('#wpappp-popup12-action-button-background-color').val('#f2ce27');
    $('#wpup-popup12-button').css('color', "#684436");
    $("#wpappp-popup12-action-button-text-color").val('#684436');
    $('#wpup-popup12-terms').css('color', "#ffffff");
    $('#wpappp-popup12-terms-text-color').val('#ffffff');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup13'){
    $( "#wpup-popup13-container" ).css( "width","800px");
    $( "#wpappp-popup13-width").val('800');
    $('#wpup-popup13-container').css('background-color',"#ffffff");
    $('#wpappp-popup13-background-color').val('#ffffff');
    $('#wpappp-popup13-image-url').val($("#wpappp-popup13-default-background-image").val());
    $('#wpappp-popup13-url-image').attr('src',$('#wpappp-popup13-image-url').val());
    $('#wpup-popup13-left-content').css('background-image','url("'+$("#wpappp-popup13-default-background-image").val()+'")');
    $('#wpup-popup13-heading').css('color',"#000000");
    $('#wpappp-popup13-heading-text-color').val('#000000');
    $('#wpup-popup13-main-text').css('color',"#6e6e6e");
    $('#wpappp-popup13-subheading-text-color').val('#6e6e6e');
    $('#wpup-popup13-button').css('background-color', "#000000");
    $('#wpappp-popup13-action-button-background-color').val('#000000');
    $('#wpup-popup13-button').css('color', "#ffffff");
    $("#wpappp-popup13-action-button-text-color").val('#ffffff');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup14'){
    $( "#wpup-popup14-container" ).css( "width","400px");
    $( "#wpappp-popup14-width").val('400');
    $('#wpup-popup14-container').css('background-color',"#092a4e");
    $('#wpappp-popup14-container-background-color').val('#092a4e');
    $('#wpup-popup14-top-content').css('background-color',"#fecc00");
    $('#wpappp-popup14-subcontainer-background-color').val('#fecc00');
    $('#wpup-popup14-main-text-header').css('color',"#000000");
    $('#wpappp-popup14-heading-text-color').val('#000000');
    $('#wpup-popup14-main-text-subheader').css('color',"#000000");
    $('#wpappp-popup14-subheading-text-color').val('#000000');
    $('#wpup-popup14-button').css('background-color', "#fecc00");
    $('#wpappp-popup14-action-button-background-color').val('#fecc00');
    $('#wpup-popup14-button').css('color', "#092a4e");
    $("#wpappp-popup14-action-button-text-color").val('#092a4e');
    $('#wpup-popup14-privacy-text').css('color', "#ffffff");
    $('#wpappp-popup14-privacy-text-color').val('#ffffff');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup15'){
    $( "#wpappp-popup15-container" ).css( "width","700px");
    $( "#wpappp-popup15-width").val('700');
    $('#wpappp-popup15-rightcontent').css('background-color',"#fcfcfc");
    $('#wpappp-popup15-background-color').val('#fcfcfc');
    $('#wpappp-popup15-image-url').val($("#wpappp-popup15-default-background-image").val());
    $('#wpappp-popup15-url-image').attr('src',$('#wpappp-popup15-image-url').val());
    $('#wpappp-popup15-leftcontent').css('background-image','url("'+$("#wpappp-popup15-default-background-image").val()+'")');
    $('#wpappp-popup15-heading').css('color',"#000000");
    $('#wpappp-popup15-heading-text-color').val('#000000');
    $('#wpappp-popup15-subtext').css('color',"#6e6e6e");
    $('#wpappp-popup15-subheading-text-color').val('#6e6e6e');
    $('#wpappp-popup15-yesbtn').css('background-color', "#00be68");
    $('#wpappp-popup15-yes-button-background-color').val('#00be68');
    $('#wpappp-popup15-yesbtn').css('color', "#ffffff");
    $("#wpappp-popup15-yes-button-text-color").val('#ffffff');
    $('#wpappp-popup15-nobtn').css('background-color', "#ff3548");
    $('#wpappp-popup15-no-button-background-color').val('#ff3548');
    $('#wpappp-popup15-nobtn').css('color', "#ffffff");
    $("#wpappp-popup15-no-button-text-color").val('#ffffff');
  }

  if($('select#wpappp-popup-select-theme option:selected').val() == 'popup16'){
    $( "#wpappp-popup16-container" ).css( "width","700px");
    $( "#wpappp-popup16-width").val('700');
    $('#wpappp-popup16-container').css('background-color',"#ffffff");
    $('#wpappp-popup16-background-color').val('#ffffff');
    $('#wpappp-popup16-image-url').val($("#wpappp-popup16-default-background-image").val());
    $('#wpappp-popup16-url-image').attr('src',$('#wpappp-popup16-image-url').val());
    $('#wpappp-popup16-container').css('background-image','url("'+$("#wpappp-popup16-default-background-image").val()+'")');
    $('#wpappp-popup16-heading').css('color',"#ffffff");
    $('#wpappp-popup16-heading-text-color').val('#ffffff');
    $('#wpappp-popup16-subtext').css('color',"#ffffff");
    $('#wpappp-popup16-subheading-text-color').val('#ffffff');
    $('#wpappp-popup16-yesbtn').css('background-color', "#00b14f");
    $('#wpappp-popup16-yes-button-background-color').val('#00b14f');
    $('#wpappp-popup16-yesbtn').css('color', "#ffffff");
    $("#wpappp-popup16-yes-button-text-color").val('#ffffff');
    $('#wpappp-popup16-nobtn').css('background-color', "#ed4308");
    $('#wpappp-popup16-no-button-background-color').val('#ed4308');
    $('#wpappp-popup16-nobtn').css('color', "#ffffff");
    $("#wpappp-popup16-no-button-text-color").val('#ffffff');
  }

});

if($('select#wpappp-subscribe-dropdown option:selected').val() == 'mail_chimp'){
  $('#wpappp-mail-chimp-settings').show(); 
}
if($('select#wpappp-subscribe-dropdown option:selected').val() == 'local_db'){
  $('#wpappp-mail-chimp-settings').hide(); 
}
if($('select#wpappp-subscribe-dropdown option:selected').val() == 'mail_list'){
  $('#wpappp-email-settings').show(); 
}
if($('select#wpappp-subscribe-dropdown option:selected').val() == 'get_response'){
  $('#wpappp-get-response-settings').show(); 
}
if($('select#wpappp-subscribe-dropdown option:selected').val() == 'active_campaign'){
  $('#wpappp-active-campaign-settings').show(); 
}
$('#wpappp-subscribe-dropdown').change(function(){
  if($('select#wpappp-subscribe-dropdown option:selected').val() == 'mail_chimp'){
   $('#wpappp-email-settings').hide(); 
    $('#wpappp-mail-chimp-settings').show(); 
    $('#wpappp-active-campaign-settings').hide(); 
    $('#wpappp-get-response-settings').hide(); 
  }
  if($('select#wpappp-subscribe-dropdown option:selected').val() == 'local_db'){
   $('#wpappp-email-settings').hide(); 
    $('#wpappp-mail-chimp-settings').hide(); 
    $('#wpappp-active-campaign-settings').hide(); 
    $('#wpappp-get-response-settings').hide(); 
  }
  if($('select#wpappp-subscribe-dropdown option:selected').val() == 'mail_list'){
   $('#wpappp-email-settings').show(); 
    $('#wpappp-mail-chimp-settings').hide(); 
    $('#wpappp-active-campaign-settings').hide(); 
    $('#wpappp-get-response-settings').hide(); 
  }
    if($('select#wpappp-subscribe-dropdown option:selected').val() == 'get_response'){
    $('#wpappp-email-settings').hide(); 
    $('#wpappp-mail-chimp-settings').hide(); 
    $('#wpappp-active-campaign-settings').hide(); 
    $('#wpappp-get-response-settings').show(); 
  }
      if($('select#wpappp-subscribe-dropdown option:selected').val() == 'active_campaign'){
    $('#wpappp-email-settings').hide(); 
    $('#wpappp-mail-chimp-settings').hide(); 
    $('#wpappp-active-campaign-settings').show(); 
    $('#wpappp-get-response-settings').hide(); 
  }
});
if($('#wpapp_selected_id').val() != ''){
  var wpappp_selected_tab = $('#wpapp_selected_id').val();
  $('#'+wpappp_selected_tab).trigger("click");
}

$('.wpappp-popup-tabs').click(function(){
  var btnId = $('input[name=wpappp-popup-tabs]:checked').attr('id');
  $('#wpapp_selected_id').val(btnId);
});

$('.ui-draggable-handle').removeAttr('href');

jQuery(".wpappp-subscribe-button-submit").click(function(){
  var name = jQuery('.wpappp_subscriber_name_submit').val();
  var email = jQuery('.wpappp_subscriber_email_submit').val();
  var redirect_url = $('#wpappp_redirect_after_success').val();
  var successMessage = $('#wpappp-popup-success-message').val();

  /* Sending data to db */
  function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  if(name == ''){
    var requiredField = $('#wpappp-popup-required-field').val();
    if(requiredField != ''){
    }
    else{
      alert('Please fill in the required fields');
      return false;
    }
  }
  if (validateEmail(email)) {
    return true;
  } else {
    var customMessage = $('#wpappp-popup-invalid-email').val();
    if(customMessage !='')
    alert(customMessage);
    else{
      alert("Please enter a valid e-mail");
    }
  }
  return false;
}
  if($('#wpappp_subscribe_option').val()=='local_db' && validate(email) == true){
    alert('hello00');
    jQuery.ajax({
      type: 'POST',
      url: MyAjax.ajaxurl,
      data: {"action": "upc_send_to_db", "dname":name,"demail":email},
      success: function(data){
        if($('#wpappp_close_after_success').val() == '1'){
          $('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
        }
        if(successMessage !=''){
          alert("0000"+successMessage);
        }
        if($('#wpappp_redirect_after_success').val().length >0){
          location.href = redirect_url;
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  }
  /* Sending data to Mail */
  if($('#wpappp_subscribe_option').val()=='mail_list' && validate(email) == true){
    jQuery.ajax({
      type: 'POST',
      url: MyAjax.ajaxurl,
      data: {"action": "upc_send_email", "dname":name,"demail":email},
      success: function(data){
        if($('#wpappp_close_after_success').val() == '1'){
          $('.wpappp_popup_wrapper_container').fadeOut( "slow" ,function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
        }
        if(successMessage !=''){
          alert(successMessage);
        }
        if($('#wpappp_redirect_after_success').val().length >0){
          location.href = redirect_url;
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  }

  /* Sending data to Mailchimp */

  if($('#wpappp_subscribe_option').val()=='mail_chimp' && validate(email) == true){
    jQuery.ajax({
      type: 'POST',
      url: MyAjax.ajaxurl,
      data: {"action": "upc_send_to_mailchimp", "dname":name,"demail":email,"get_mc_api_key":mc_api_key,"get_mc_list_id":mc_list_id},
      success: function(data){
        if(data == 'Unknown Error Occurred'){alert('Unknown Error Occurred');}
        if(data == 'Invalid API Key Or List Name'){alert('Invalid API Key Or List Name');}
        if(data == 'Subscriber Already Exists'){alert('Subscriber Already Exists');}
        if(data == 'success'){alert('success');}
        if(data == 'error'){alert('error');}
        if($('#wpappp_close_after_success').val() == '1'){
          $('.wpappp_popup_wrapper_container').fadeOut( "slow",function (){
            $('.wpappp_popup_wrapper_container').remove();
          } );
                  }
        if(successMessage !=''){
          alert(successMessage);
        }
        if($('#wpappp_redirect_after_success').val().length >0){
          location.href = redirect_url;
        }

      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  }
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});

jQuery("#wpappp_delete_all_data").click(function(){
  var wpappp_confirm_delete = window.confirm("Are you sure you want to delete all subscribers from the database?");
  var wpapp_redirect_refresh = window.location.href;
  if (wpappp_confirm_delete == true) {
    jQuery.ajax({
      type: 'POST',
      url: MyAjax.ajaxurl,
      data: {"action": "upc_delete_db_data"},
      success: function(data){
        location.href = wpapp_redirect_refresh;
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  } 
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});

jQuery(".upc_delete_entry").click(function(){
  var deleterowid = $( this ).attr( "data-delete" );
  var wpappp_confirm_delete = window.confirm("Are you sure you want to delete Record with ID# "+deleterowid);
  var wpapp_redirect_refresh = window.location.href;
  if (wpappp_confirm_delete == true) {
    jQuery.ajax({
      type: 'POST',
      url: MyAjax.ajaxurl,
      data: {"action": "upc_delete_db_record","id":deleterowid},
      success: function(data){
        location.href = wpapp_redirect_refresh;
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) { 
        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
      } 
    });
  } 
// Prevents default submission of the form after clicking on the submit button. 
return false;   
});




});