<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<!-- slick slider -->
<script type="text/javascript" src="{{ asset('js/slick.j') }}s"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="{{ asset('js/nouislider.js') }}"></script>

<script type="text/javascript" src="{{ asset('jqueryui/jquery-ui.min.js') }}"></script>


<!-- Custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
<script>
    $(function(){
        $("#term").autocomplete({
            source: "{{ route('properties.autocomplete') }}",
            minLength: 3,
            select: function(event, ui){
                $("#term").val(ui.item.value);
            }
            });
        });
</script>
<!-- jQuery -->
<script src="{{ asset('js/jquery1.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
    }

</script>

<script>
    var map = new google.maps.Map(document.getElementById('map-canvas'),{
        center:{
            lat: 27.72,
            lng: 85.36
        },
        zoom:15
    });

    var marker = new google.maps.Marker({
        position: {
            lat: 27.72,
            lng: 85.36
        },
        map: map,
        draggable: true
    });

    var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
    google.maps.event.addListener(searchBox,'places_changed',function(){

        var places = searchBox.getPlaces();
        var bounds = new google.maps.LatLngBounds();
        var i, place;

        for(i=0; place=places[i];i++){
            bounds.extend(place.geometry.location);
            marker.setPosition(place.geometry.location); //set marker position new...
        }

        map.fitBounds(bounds);
        map.setZoom(15);

    });

    google.maps.event.addListener(marker,'position_changed',function(){

        var lat = marker.getPosition().lat();
        var lng = marker.getPosition().lng();

        $('#lat').val(lat);
        $('#lng').val(lng);

    });
</script>

{{--<script>--}}
    {{--var lat = {{$vendor->lat}};--}}
    {{--var lng = {{$vendor->lng}};--}}

    {{--var map = new google.maps.Map(document.getElementById('map-canvas'),{--}}
        {{--center:{--}}
            {{--lat: lat,--}}
            {{--lng: lng--}}
        {{--},--}}
        {{--zoom: 15--}}
    {{--});--}}

    {{--var marker = new google.maps.Marker({--}}
        {{--position:{--}}
            {{--lat:lat,--}}
            {{--lng: lng--}}
        {{--},--}}
        {{--map:map--}}
    {{--});--}}
{{--</script>--}}
