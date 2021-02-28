<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <script defer src="{{asset('/js/app.js')}}"></script>
    {{--    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">--}}
    {{--    <link rel="shortcut icon" type="image/png" href="img/logo-Roc.png">--}}
    <meta name="description" content="Votre plateforme de mise en relation avec des coachs sportifs multi-compétences">
    <script>
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const coach = { lat: 48.8704808, lng: 2.3630401 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map"), {
                zoom: 16,
                center: coach,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
                position: coach,
                map: map,
            });
        }
    </script>
    <title>Rush Our Coach</title>
</head>
<body>

@yield('content')

@include('partials.footer')

@include('partials.scroll_to_top')

</body>

</html>
