<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title>Velocity X,A Complete Fitness Management & Administration</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap-reboot.min.css" />
        @env('local')
        <link rel="stylesheet" type="text/css" href="/assets/css/googleApiFonts1.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/googleApiFonts2.css" />
        <script type="text/javascript">
            const environment = {
                env: '{{app()->environment()}}'
            }
        </script>
        @elseenv('production')
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @endenv
        <script src="/assets/js/injector.js" type="module"></script>
    </head>
    <body>
        @extends('page-wrapper')

        @section('content')
            Testing asdasd
        @endsection
        <script src="/assets/js/jquery.js"></script>
        <script src="/assets/js/popper.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
