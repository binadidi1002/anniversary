<head>
    <title>Anniversary</title>

    {{--Fonts (Google: Archivo)--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,500;1,700&family=Spline+Sans:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    {{--Side-loading icons--}}
    <script
        type="module"
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    </script>
    <script
        nomodule
        src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js">
    </script>

    {{--AOS package--}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    {{--Custom stylesheets--}}
    {{--    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/stylesheet.css') }}">
{{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}


{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}

    <script src="https://kit.fontawesome.com/5860913b3e.js" crossorigin="anonymous"></script>
</head>

{{--Content--}}

{{--@if(Route::currentRouteName() == 'email-verify')--}}
<main class="main">
@include('layouts.navigation')

@yield('content')

{{--@include('layouts.footer')--}}
</main>

<footer>
</footer>

<script>
</script>

