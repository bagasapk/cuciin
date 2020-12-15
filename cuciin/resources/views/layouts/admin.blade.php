<!doctype html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <div class="cover-container">
        <div class="row" style="margin-right:0;margin-left:0;">
            <div class="col-md-12" style="height: 10vh;">
                @include('Component.header')
            </div>
            <div class="col-md-12" style="height: 90vh;">
                <div class="row">
                    <div class="col-md-2">
                        @include('Component.sidebar')
                    </div>
                    <div class="col-md-10">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>