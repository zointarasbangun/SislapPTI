<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function home(){

        return view('public/index');
    }

    public function index(){

        return view('auth.login');
    }

    public function loginproses(){

        return view('beranda');
    }
}
