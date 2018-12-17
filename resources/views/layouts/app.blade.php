<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <script type="text/javascript">
        if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
            document.write('<meta name="viewport" content="width=device-width,initial-scale=1">');
        } else {
            document.write('<meta name="viewport" content="width=1200">');
        }
    </script>

</head>

<body>

<div id="app">
    <example-component></example-component>
</div>
<script src=" {{ mix('js/app.js') }} "></script>
</body>
</html>
