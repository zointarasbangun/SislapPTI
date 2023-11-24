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

    public function cetakpdf(Request $request)
    {
        // Proses pencarian data jika terdapat parameter pencarian
        if ($request->has('search')) {
            $searchTerms = explode(' ', $request->search);

            $perjalanans = Perjalanan::where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('alamat_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('alamat_tujuan', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_akhir', 'LIKE', '%' . $term . '%')
                        ->orWhere('jenis_perjalanan', 'LIKE', '%' . $term . '%')
                        ->orWhereHas('user', function ($query) use ($term) {
                            $query->where('name', 'LIKE', '%' . $term . '%');
                        });
                }
            })->get();
        } else {
            // Jika tidak ada pencarian, ambil semua data
            $perjalanans = Perjalanan::all();
        }

        // Load view untuk laporan PDF
        $pdf = PDF::loadView('downloadfile.cetakpdf', ['perjalanans' => $perjalanans]);

        // Download laporan PDF
        return $pdf->download('SeluruhPerjalanan.pdf');
    }

public function cetakpdfuser(Request $request)
{
    // Mendapatkan ID pengguna yang sedang login
    $userId = Auth::id();

    // Proses pencarian data jika terdapat parameter pencarian
    if ($request->has('search')) {
        $searchTerms = explode(' ', $request->search);

        $perjalanans = Perjalanan::where('user_id', $userId)
            ->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('alamat_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('alamat_tujuan', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_akhir', 'LIKE', '%' . $term . '%')
                        ->orWhere('jenis_perjalanan', 'LIKE', '%' . $term . '%');
                }
            })->get();
    } else {
        // Jika tidak ada pencarian, ambil semua data untuk pengguna yang login
        $perjalanans = Perjalanan::where('user_id', $userId)->get();
    }

    // Load view untuk laporan PDF
    $pdf = PDF::loadView('downloadfile.cetakpdfuser', ['perjalanans' => $perjalanans]);

    // Download laporan PDF
    return $pdf->download('perjalananDriver.pdf');
}



}
