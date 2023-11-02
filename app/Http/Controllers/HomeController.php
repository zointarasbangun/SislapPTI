<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->check()) {
            if (auth()->user()->role == 'admin') {
                return view('dashboard.adminDashboard'); // Ganti dengan nama view admin dashboard
            } else {
                return view('dashboard.userDashboard'); // Ganti dengan nama view user dashboard
            }
        }

        return view('home'); // Tampilan default jika pengguna tidak login
    }
}
