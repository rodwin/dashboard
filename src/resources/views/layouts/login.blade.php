<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/all.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <style>
        body {
            background: #fff;
        }
        #loading {
            position: fixed;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            display: block;
            background: #fff;
            z-index: 10000;
        }

        #loading img {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -23px 0 0 -23px;
        }
    </style>
</head>
<body>
<div id="app" style="height: 100%">
    <div id="loading"><img src="/images/spinner/loader-dark.gif" alt="Loading..."></div>


    @yield('content')
</div>

<!-- Scripts -->
<script src="/js/all.js"></script>
<script src="/js/app.js"></script>
<script type="text/javascript">
    $(window).load(function () {
        setTimeout(function () {
            $('#loading').fadeOut(400, "linear");
        }, 300);
    });
</script>
</body>
</html>
