@extends('layouts.user')
<style>
    body {
        height: 100vh;
        background-color: #f5f5f5;
    }
</style>

<body>


    <script>
        function ContactPage() {
            window.location.href = "{{URL::to('about')}}"
        }
    </script>

    <body style="background-color: #f3f3fd;">
        <div class="cover-container">
            <div class="row" style="margin-right:0;margin-left:0;">
                <div class="col-md-4 col-lg-4 col-sl-4" style="height: 10vh;">

                </div>

                <div class="col-md-12" style="height: 90vh;">
                    <div class="row pt-4 justify-content-center">
                        <div class="col-lg-6 col-md-6" style=" background-color:#fff">

                            <!--Section: Contact v.2-->
                            <section class="mb-4">

                                <!--Section heading-->
                                <h2 class="h1-responsive font-weight-bold text-center my-4">About Cuciin</h2>
                                <!--Section description-->
                                <p class="text-center w-responsive mx-auto mb-5">Cuciin adalah sebuah sistem berbasis website untuk mempermudah masyarakat umum melakukan pemesanan jasa cuci dan setrika pakaian.
                                    Sehingga membuat pakaian anda rapi dan wangi dalam sekejap tanpa ribet. Aplikasi laundry seperti ini sudah ada, contoh: laundry.drop.id tetapi kebanyakan bukan berbasis website dan keunggulan dari cuciin adalah adanya fitur tracking sehingga pelanggan bisa tau laundrynya sudah selesai atau belum.
                                </p>



                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-9 mb-md-0 mb-5">
                                        <form id="contact-form" name="contact-form" action="mail.php" method="POST">





                                    </div>

                            </section>
                            <!--Section: Contact v.2-->

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>

    </html>