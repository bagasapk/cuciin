@extends('layouts.user')
<style>
    body {
        height: 100vh;
        background-color: #f5f5f5;
    }
</style>
@section('content')

<body>
    <div class="d-flex w-100 flex-column">
        <div class="inner cover pt-5 d-flex align-items-start" style="background-color: #ffccbc; height:400px ">
            <div>
                <img src="img/cuciin.png" alt="Cuciin" class="cuciin pt-5 offset-md-2">
                <p class="home-subtitle col-md-5 offset-md-2">
                    SOLUSI TEPAT UNTUK MEMBERSIHKAN BAJU TANPA KELUAR RUMAH. DENGAN CEPAT DAN TEPAT
                </p>
                <div>
                    <a href="{{route('pemesanan')}}" class="btn btn-primary offset-md-2">MULAI NYUCI</a>
                </div>
            </div>
            <div class="vector pt-3 mt-3 col-md-4">
                <div class="thumbnail">
                    <img src="img/home1.png" alt="home1" style="width:100%;">
                </div>
            </div>
        </div>
        <div class="home-button-section pr-5 mr-2 mt-auto d flex justify-content-center" style="align-items:flex-end;">
            <div class="mt-md-5 col-md-2 box-section " onclick="ContactPage();">
                <div class="customer-service mt-4 mb-4">

                    <x-feathericon-headphones class="home-menu" style="color: #555;" />
                    </br>
                    </br>
                    Hubungi kami
                </div>
            </div>
            <div class="mt-md-5 col-md-2 mr-4 ml-4 box-section " onclick="Pemesanan();">
                <div class="customer-service mt-4 mb-4">

                    <x-feathericon-shopping-cart class="home-menu" style="color: #555;" />
                    </br>
                    </br>
                    Pemesanan
                </div>
            </div>
            <div class="mt-md-5 col-md-2 box-section " onclick="ContactPage();">
                <div class="customer-service mt-4 mb-4">

                    <x-feathericon-user class="home-menu" style="color: #555;" />
                    </br>
                    </br>
                    Profile
                </div>
            </div>
        </div>
    </div>

    <script>
        function ContactPage() {
            window.location.href = ""
        }

        function Pemesanan() {
            window.location.href = "{{route('pemesanan')}}"
        }

        function ContactPage() {
            window.location.href = "{{URL::to('about')}}"
        }
    </script>
</body>
@endsection