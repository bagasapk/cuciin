@extends('Layouts.admin')
@section('content')

<div class="row">
    <div class="col-md-11 pt-2">
        <div class="justify-content-start">
            <table class="table table-striped " id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Konfirmasi</th>
                        <th>Cuci</th>
                        <th>Setrika</th>
                        <th>Packing</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <th scope="row">1</th>
                        <td>Kate</td>
                        <td>Pakaian</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Anna</td>
                        <td>Pakaian</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>

                    <tr class="table-info">
                        <th scope="row">3</th>
                        <td>Tom</td>
                        <td>Karpet</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">5</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">7</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">9</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row">11</th>
                        <td>Jerry</td>
                        <td>Sepatu</td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                        <td><input type="checkbox"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection