$( document ).ready(function(){
  $('.icone-burger').click(() => {
    $('.bg-burger').fadeIn(400);
    $('.hidden-bar').addClass('hidden-bar-view');
  });

  $('.close-bar').click(() => {
      $('.bg-burger').fadeOut(400);
      $('.hidden-bar').removeClass('hidden-bar-view');
  });
  
  $('.banner').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    adaptiveHeight: true
  });

  function init_map(){
    var myOptions = {
        zoom:15, center:new google.maps.LatLng(-27.608600487690936, -48.53823408691565),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    map = new google.maps.Map(document.getElementById('map'), myOptions);
    marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-27.608600487690936, -48.53823408691565)});
    infowindow = new google.maps.InfoWindow({content:'<img src="https://www.informatek.com.br/images/logo-informatek.svg" style="width: 100px; margin-left: 23%;"></img> <span style="color: #000; font-size: 12px !important; line-height: 14px !important;"><br> R. Almeida Coelho, <br> Nº 57 - Saco dos Limões <br>Florianópolis - SC <br>88045-110 <br>Brasil</span>' });
    google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
    infowindow.open(map,marker);
  }
  google.maps.event.addDomListener(window, 'load', init_map);
});

