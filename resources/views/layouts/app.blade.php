<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

        <title>{{setting('site.title')}}</title>
        <meta name="robots" content="noindex">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="storage/{{setting('site.favicon')}}"/>

        @if (setting('site.google_analytics_tracking_id'))
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{setting('site.google_analytics_tracking_id')}}"></script>
        <script>
window.dataLayer = window.dataLayer || [];
function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', "{{setting('site.google_analytics_tracking_id')}}");
        </script>
        @endif
    </head>
    <body>
        <main>
            @yield('content')
        </main>
        <footer>
            <img class="img-fluid" src="{{ asset('img/footer.png') }}" alt="">
        </footer>
    </body>
    <script src="{{ mix('/js/app.js') }}"></script>
</html>
