$( document ).ready(function(){
    $('#telefone').mask('(00) 00000-0000'); 

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    function init_map_contato(){
        var myOptions = {
            zoom:15, center:new google.maps.LatLng(-27.608600487690936, -48.53823408691565),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('map-contato'), myOptions);
        marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(-27.608600487690936, -48.53823408691565)});
        infowindow = new google.maps.InfoWindow({content:'<img src="https://www.informatek.com.br/images/logo-informatek.svg" style="width: 100px; margin-left: 23%;"></img> <span style="color: #000; font-size: 12px !important; line-height: 14px !important;"><br> R. Almeida Coelho, <br> Nº 57 - Saco dos Limões <br>Florianópolis - SC <br>88045-110 <br>Brasil</span>' });
        google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});
        infowindow.open(map,marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map_contato);
});