<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $perjalanans = Perjalanan::all();
        if (auth()->check()) {
            if (auth()->user()->role == 'admin') {
                return view('dashboard.adminDashboard', ['perjalanans' => $perjalanans]); // Ganti dengan nama view admin dashboard
            } else {
                $user = Auth::user();
                $jumlahPerjalanan = $user->perjalans()->count();
                return view('dashboard.userDashboard', ['perjalanans' => $perjalanans, 'jumlahPerjalanan' => $jumlahPerjalanan]); // Ganti dengan nama view user dashboard
            }
        }

        return view('home'); // Tampilan default jika pengguna tidak login
    }
}
