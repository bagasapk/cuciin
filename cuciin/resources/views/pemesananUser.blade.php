<!-- <!doctype html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
@extends('layouts.user')

<style>
    .container {
        padding: 2rem 0rem;
    }


    td,
    th {
        border: 0;
        color: #666;
        font-size: 0.8rem;
    }

    td,
    th {
        vertical-align: middle;
        text-align: center;

        max-width: 2rem;
    }

    .price {
        margin-left: 1rem;
    }

    .modal-footer {
        padding-top: 0rem;
    }
</style>

<!-- </head> -->

<!--
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head> -->

<!-- <body>
    <div class="cover-container" style="height: 100vh;">
        <div class="row" style="height:10vh; width:auto;margin-left:0;">
            <div class="col-md-12" style="padding-right:0;padding-left:0;">
            </div>
        </div> -->
@section('content')
<div class="row" style="height: 90vh;margin-right:0;margin-left:0">
    <form role="form" method="POST" action="{{route('addToCart')}}">
        @csrf
        <div class=" row justify-content-center col-md-12 mt-4">
            <div class=" product--pink col-md-2">
                <div class="product_inner">
                    <img src="img/baju.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Baju</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center">
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q1'); var q1 = result.value; if( !isNaN( q1 ) &amp;&amp; q1 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q1'); var q1 = result.value; if( !isNaN( q1 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q1');  -->
                        <!-- var q1 = result.value; if( !isNaN( q1 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Baju" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="2000" class="form-control"> -->
                    </div>
                </div>
            </div>
            <div class="product--blue col-md-2">
                <div class="product_inner">
                    <img src="img/celana.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Celana</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('q1'); var q1 = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q2'); var q2 = result.value; if( !isNaN( q2 ) &amp;&amp; q2 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q2" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q2'); var q2 = result.value; if( !isNaN( q2 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q2'); var q2 = result.value; if( !isNaN( q2 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Celana" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="2000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--pink col-md-2">
                <div class="product_inner">
                    <img src="img/karpet.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Karpet</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center">
                        <!-- <button onclick="var result = document.getElementById('q2'); var q2 = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q9'); var q9 = result.value; if( !isNaN( q9 ) &amp;&amp; q9 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q9" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q9'); var q9 = result.value; if( !isNaN( q9 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q9'); var q9 = result.value; if( !isNaN( q9 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Karpet" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="5000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--blue col-md-2">
                <div class="product_inner">
                    <img src="img/helm.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Helm</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('q4'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q4'); var q4 = result.value; if( !isNaN( q4 ) &amp;&amp; q4 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q4" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q4'); var q4 = result.value; if( !isNaN( q4 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q4'); var q4 = result.value; if( !isNaN( q4 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Helm" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="2000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--pink col-md-2">
                <div class="product_inner">
                    <img src="img/sepatu.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Sepatu </h4> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q5'); var q5 = result.value; if( !isNaN( q5 ) &amp;&amp; q5 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q5" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q5'); var q5 = result.value; if( !isNaN( q5 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q5'); var q5 = result.value; if( !isNaN( q5 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Sepatu" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="1000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--blue col-md-2">
                <div class="product_inner">
                    <img src="img/tas.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Tas</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q3'); var q3 = result.value; if( !isNaN( q3 ) &amp;&amp; q3 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q3" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q3'); var q3 = result.value; if( !isNaN( q3 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q3'); var q3 = result.value; if( !isNaN( q3 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Tas" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="1000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--pink col-md-2">
                <div class="product_inner">
                    <img src="img/jas.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Jas</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q6'); var q6 = result.value; if( !isNaN( q6 ) &amp;&amp; q6 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q6" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q6'); var q6 = result.value; if( !isNaN( q6 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q6'); var q6 = result.value; if( !isNaN( q6 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Jas" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="3000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--blue col-md-2">
                <div class="product_inner">
                    <img src="img/Jaket.png" width='150px'>
                    </br>
                    <!-- <h4 style="color: black;">Jaket</h4> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q7'); var q7 = result.value; if( !isNaN( q7 ) &amp;&amp; q7 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q7" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q7'); var q7 = result.value; if( !isNaN( q7 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q7'); var q7 = result.value; if( !isNaN( q7 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Jaket" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="3000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <div name="button" type="button" class="add btn btn-light">+</div> -->
                    </div>
                </div>
            </div>
            <div class="product--pink col-md-2">
                <div class="product_inner">
                    <img src="img/syal.png" width='150px'>
                    </br>
                    <!-- <h5 style="color: black;">Syal atau Topi</h5> -->
                    </br>
                    <div class="row d-flex justify-content-center ">
                        <!-- <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q8'); var q8 = result.value; if( !isNaN( q8 ) &amp;&amp; q8 > 0 ) result.value--;return false;" class="reduced items-count">-</div> -->
                        <!-- </button> -->
                        <!-- <input name="quantity" type="text" id="q8" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <!-- <button onclick="var result = document.getElementById('q8'); var q8 = result.value; if( !isNaN( q8 )) result.value++;return false;" class="increase items-count" type="button"> -->
                        <!-- <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q8'); var q8 = result.value; if( !isNaN( q8 )) result.value++;return false;" class="increase items-count">+</div> -->
                        <!-- </button> -->
                        <!-- <input type="hidden" name="product_id" value="" class="form-control"> -->
                        <!-- <input type="hidden" name="name" value="Lain" class="form-control"> -->
                        <!-- <input type="hidden" name="price" value="1000" class="form-control"> -->
                        <!-- <div name="button" type="button" class="sub btn btn-light">-</div> -->
                        <!-- <button class="main_btn">Add to Cart</button> -->
                        <!-- <input name="quantity" type="text" id="1" value="0" class="col-md-4" style="background-color: light;" /> -->
                        <div name="button" type="button" class="add bt"></div>
                    </div>
                    <!-- <div class="justify-content-center"> -->
                    <!-- <button class="main_btn">Add to Cart</button> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <!-- <div style="padding-left:45%;margin:auto" class=" pt-3">
            <input value="save" type="button" class="btn btn-danger" data-toggle="modal" data-target="#cartModal" data-whatever="$addToCart">
                {{__('Pesan Sekarang')}}
            </input>
        </div> -->
        <div>
    </form>
</div>
<div class="mt-2 offset-1">
    @include('component.popup')
</div>
@endsection