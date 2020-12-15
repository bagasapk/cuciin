<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class adminUpdate extends Controller
{
    public function index()
    {
        $hasil = User::all();
        return view('update', ['hasil' => $hasil]);
    }
}
