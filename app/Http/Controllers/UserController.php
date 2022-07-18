<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

// untuk menenskripsikan password
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // function register menyimpan inputan data dari frontend ke database
    function register(request $req) {
        $user = new User;
        $user -> name = $req -> input('name');
        $user -> email = $req -> input('email');
        $user -> password = Hash::make($req -> input('password'));
        $user -> save();
        return $user;
    }
}
