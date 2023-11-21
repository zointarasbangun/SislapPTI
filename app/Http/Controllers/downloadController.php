<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Perjalanan;

class downloadController extends Controller
{
    public function generatePDF()
    {
        $perjalanan = Perjalanan::all();
        $pdf = PDF::loadView('dataperjalanan', ['perjalanan' => $perjalanan]);

        return $pdf->download('laporan_perjalanan.pdf');
    }
}
