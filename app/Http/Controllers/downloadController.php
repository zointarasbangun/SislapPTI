<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class DownloadController extends Controller
{

    public function cetakPDF()
    {
        $perjalanans = Perjalanan::all();

        $pdf = PDF::loadView('perjalanan.cetakpdf', ['perjalanans' => $perjalanans]);

        return $pdf->download('perjalanan.pdf');

        // return $pdf->download('user.pdf');$perjalanans = Perjalanan::all(); // Gantilah sesuai kebutuhan Anda
        // $pdf = PDF::loadView('perjalanan.cetakpdf', ['perjalanans' => $perjalanans]);

        // return $pdf->download('laporan_perjalanan.pdf');
    }
}
