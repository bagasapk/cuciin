<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>FAQ Cuciin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel=”stylesheet” href=”css/bootstrap.css”> <link rel=”stylesheet” href=”css/bootstrap-responsive.css”> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
</head> -->
@extends('layouts.user')
@section('content')
<link href="{{ asset('css/faq.css') }}" rel="stylesheet">

<body>
    <div class="cover-container">
        <div class="row pt-4 justify-content-center" style="margin-right:0;margin-left:0;">
            @include('component.header')
            <div class="col-md-6 col-lg-8 col-sl-4" style="height: 90vh;">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Frequently Asked Questions</h2>
                        <p>If you do not find the answer to your question below,
                            feel free to CONTACT US. <br />We are here to help.</p>

                        <div class="accordion">
                            <div class="accordion-item">
                                <a>Minimal untuk laundry kiloan berapa?</a>
                                <div class="content">
                                    <p>Tidak ada minimal kiloan nya, karna yang kami hitung per item dari barang nya</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a>Bagaimana proses laundry kiloan di Cuciin?</a>
                                <div class="content">
                                    <p>Proses laundry yang kami lakukan adalah 1 mesin untuk 1 pelanggan tanpa dicampur, ini bertujuan
                                        untuk menjaga kebersihan dan tidak tertukar dengan barang pelanggan lain</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a>Bagaimana jika pakaian luntur untuk laundry kiloan?</a>
                                <div class="content">
                                    <p>Kami sarankan pelanggan untuk memberi tahu barang apa saja yang kemungkinan bisa luntur
                                        agar barang dipisahkan dan dicuci secara terpisah dengan barang lain. Jika tidak ada pemberitahuan, maka
                                        kami tidak bertanggung jawab</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a>Apakah bisa antar-jemput laundry kerumah?</a>
                                <div class="content">
                                    <p>Bisa, kami melayani antar-jemput laundry untuk wilayah Jatinangor dan sekitarnya</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <a>Bagaimana cara order jasa laundry?</a>
                                <div class="content">
                                    <p>Untuk menggunakan layanan kami, pelanggan bisa register pada halaman yang disediakan, kemudian login
                                        dan melakukan pemesanan, setelah selesai akan masuk ke halaman transaksi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
</body>
@endsection