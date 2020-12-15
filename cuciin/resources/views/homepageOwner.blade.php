<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <div class="w-100 h-100 pt-5">
        <header>
            <div class="inner">
                @include('component.header')
            </div>
        </header>
        <!-- <main role="main" class="inner pt-2">
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="align-self-stretch" id="bar1">
                    <p class="name p-2 pt-5">
                        Anugerah Prima Bagaskara
                    </p>
                    <img class="photo" src="{{asset('img/1.jpg')}}" alt="profile1">
                </div>
                <div class="col-md-6">
                    <h1 class="">Selamat Datang, AA</h1>
                </div>
                <div class="col-md-4">
                    Testt
                </div>
            </div>
        </main> -->

        <!-- <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Cover template for <a href="https://getbootstrap.com/">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </footer> -->
    </div>



</body>
<!-- <body class="cover-container d-flex h-100 p-3 mx-auto flex-column" style="background-color: #ffccbc;">
    <header class="masterhead mb-auto">
        @include('component.header')
    </header>
    <main class="inner cover" role="main">
        
    </main>
    <footer class="masfoot mt-auto">
        <div class="inner">
            <p></p>
            <a href="#">bootstrap</a>
        </div>
    </footer>
</body> -->

</html>