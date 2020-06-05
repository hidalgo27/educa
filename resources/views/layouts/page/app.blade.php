<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Green Academy</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <v-app>
        @guest
            <nav-component :auth="0" :logo="'{{asset('images/logos/logo-green-edu.png')}}'"></nav-component>
        @else
            <nav-component :auth="{{Auth::user()}}" :csrf="'{{ @csrf_token() }}'" :logo="'{{asset('images/logos/logo-green-edu.png')}}'"></nav-component>
        @endguest


        @yield('content')

        <v-footer
            class="justify-center"
            color="#292929"
            height="100"
        >
            <div class="title font-weight-light grey--text text--lighten-1 text-center">
                &copy; 2020 — Edulab, LLC — Made with 💜 by Lobo
            </div>
        </v-footer>

    </v-app>
</div>
<script src="{{ mix('js/app.js') }}"></script>

</body>
</html>
