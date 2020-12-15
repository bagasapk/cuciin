<div>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#cartModal">
        Pesan Sekarang!
    </button>

    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content pt-2">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-image" style="font-size:1em;">
                        <form action="{{route('addToCart')}}" method="POST">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($examples as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>Rp.{{$row->price}}</td>
                                    <td>
                                        <div class="row d-flex justify-content-center ">
                                            <div name="button" type="button" class="sub btn btn-light" onclick="var result = document.getElementById('q{{++$i}}'); var q$i = result.value; if( !isNaN( q$i ) &amp;&amp; q$i > 0 ) result.value--;return false;" class="reduced items-count">-</div>
                                            <input name="quantity" type="text" id="q{{$i}}" value="0" class="col-md-4" style="background-color: light;" />
                                            <input type="hidden" name="{{$i}}" value="" class="form-control">
                                            <div name="button" type="button" class="add btn btn-light" onclick="var result = document.getElementById('q{{$i}}'); var q$i = result.value; if( !isNaN( q$i )) result.value++;return false;" class="increase items-count">+</div>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                    </table>
                    <hr>
                    <!-- <div class="d-flex justify-content-center">
                        Pilih Metode Pembayaran
                    </div>
                    <hr> -->
                    <!-- <div style="font-size:1em">
                        <div onclick="cashPage();">
                            <x-feathericon-check-square class="icons-popup" style="height:2rem;" />
                            Cash
                        </div>
                        <hr>
                        <div onclick="gopayPage();">
                            <x-feathericon-check-square class="icons-popup" style="height:2rem;" />
                            Gopay
                        </div>
                        <hr>
                        <div onclick="transferPage();">
                            <x-feathericon-check-square class="icons-popup" style="height:2rem;" />
                            Transfer Bank
                        </div>
                        <hr>
                    </div> -->
                    <div class="modal-footer border-top-0 d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Checkout</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>