<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // memanggil view tambah
        $i = 0;
        $users = DB::table('users')->get();
        return view('homepageAdmin', ['users' => $users], compact('i'));
    }
}
