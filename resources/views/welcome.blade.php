<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title>Hallo World</title>

        
    </head>
    <body>
        <noscript>
            <strong>We're sorry but frontend doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
        </noscript>
        <div id="app"></div>
        <!-- built files will be auto injected -->
        <script src="/js/app.js?{{rand(1,99999999)}}"></script>
    </body>
</html>
