<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{setting('site.title')}}</title>
        <meta name="description" content="{{setting('site.description')}}"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="storage/{{setting('site.favicon')}}"/>

    </head>
    <body>
        @yield('content')
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
