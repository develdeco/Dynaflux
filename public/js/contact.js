$(document).ready(function(){
    var map = new MapManager($('#map_canvas')[0]);

    $('#oficinas .office').each(function(key, elem){
        var lat = $(elem).attr('data-lat');
        var lat = $(elem).attr('data-lon');
        map.addMarker(lat, lon);
    });

    $('#oficinas .office').click(function(){
        var lat = $(this).attr('data-lat');
        var lat = $(this).attr('data-lon');
        map.showMarker(lat, lon);
    });

    $('#oficinas .office.1').click();
});