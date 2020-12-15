@extends('layouts.admin')
@section('content')
<div class="inner cover d-flex align-items-start">
    <div class="pt-4">
        <h2>
            Welcome, {{ Auth::user()->name }}
        </h2>
        <div>
            Berikut tabel user terdaftar.
        </div>
        <table class="table table-striped pt-3 mt-5" id="example">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>level</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $row)
                <tr class="table-info">
                    <th scope="row">{{++$i}}</th>
                    <td>{{$row->email}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->level}}</td>
                </tr>
                @endforeach
            </tbody>
    </div>
</div>
@endsection