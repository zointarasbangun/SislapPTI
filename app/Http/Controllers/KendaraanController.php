<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();
        return view('kendaraan.tipeKendaraan', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'no_polisi' => 'required|string',
            'tgl_masuk' => 'required|date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $data['photo'] = $photoPath;
        }

        Kendaraan::create($data);

        return redirect()->route('kendaraan.index');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'type' => 'required|string',
            'no_polisi' => 'string',
            'tgl_masuk' => 'date',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $data['photo'] = $photoPath;
        }

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update($data);

        return redirect()->route('kendaraan.index');
    }



    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);

        try {
            // Mulai transaksi database
            DB::beginTransaction();

            // Cek apakah kendaraan masih digunakan dalam perjalanan
            if ($kendaraan->perjalanan()->count() > 0) {
                throw new \Exception('Kendaraan masih digunakan dalam perjalanan. Tidak dapat dihapus.');
            }

            // Hapus foto jika ada
            if ($kendaraan->photo) {
                Storage::disk('public')->delete($kendaraan->photo);
            }

            // Hapus kendaraan
            $kendaraan->delete();

            // Commit transaksi
            DB::commit();

            return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan dihapus.');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            return redirect()->route('kendaraan.index')->with('error', $e->getMessage());
        }
    }



    public function getData()
    {
        $kendaraan = Kendaraan::all(); // Ambil semua data kendaraan dari tabel kendaraan
        return view('perjalanan.tambahDataPerjalananUser', compact('kendaraan'));
    }

    public function kondisi()
    {
        $subquery = Perjalanan::selectRaw('tipe_kendaraan_id, MAX(tgl_perjalanan) as max_tgl_perjalanan')
            ->groupBy('tipe_kendaraan_id');

        $perjalanans = Perjalanan::joinSub($subquery, 'latest_perjalanan', function ($join) {
            $join->on('perjalanans.tipe_kendaraan_id', '=', 'latest_perjalanan.tipe_kendaraan_id')
                ->on('perjalanans.tgl_perjalanan', '=', 'latest_perjalanan.max_tgl_perjalanan');
        })
            ->with(['kendaraan', 'user'])
            ->get();


        return view('kendaraan.kondisikendaraan', compact('perjalanans'));
    }

    // public function kondisi()
    // {
    //     $perjalanans = Perjalanan::with(['kendaraan', 'user'])
    //         ->get();

    //     return view('kendaraan.kondisikendaraan', compact('perjalanans'));
    // }


    public function kendaraanUser()
    {
        // Mendapatkan kondisi terakhir dari pengguna yang login
        $subquery = Perjalanan::selectRaw('tipe_kendaraan_id, MAX(tgl_perjalanan) as max_tgl_perjalanan')
            ->where('user_id', auth()->id()) // Filter berdasarkan user yang login
            ->groupBy('tipe_kendaraan_id');

        $perjalanans = Perjalanan::joinSub($subquery, 'latest_perjalanan', function ($join) {
            $join->on('perjalanans.tipe_kendaraan_id', '=', 'latest_perjalanan.tipe_kendaraan_id')
                ->on('perjalanans.tgl_perjalanan', '=', 'latest_perjalanan.max_tgl_perjalanan');
        })
            ->with(['kendaraan', 'user'])
            ->get();

        return view('kendaraan.kendaraanUser', compact('perjalanans'));
    }

    public function search(Request $request)
    {
        $query = Kendaraan::query();

        if ($request->has('search')) {
            $searchTerm = '%' . $request->search . '%';

            $query->where('type', 'LIKE', $searchTerm)
                ->orWhere('no_polisi', 'LIKE', $searchTerm)
                ->orWhere('tgl_masuk', 'LIKE', $searchTerm);
        }

        $kendaraans = $query->get();

        return view('Kendaraan.tipeKendaraan', ['kendaraans' => $kendaraans]);
    }

    public function kondisisearch(Request $request)
    {
        $query = Perjalanan::query();

        if ($request->has('search')) {
            $searchTerms = explode(' ', $request->search);

            $query->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('tipe_kendaraan', 'LIKE', '%' . $term . '%')
                        ->orWhere('no_polisi', 'LIKE', '%' . $term . '%')
                        ->orWhere('tgl_perjalanan', 'LIKE', '%' . $term . '%')
                        ->orWhereHas('user', function ($query) use ($term) {
                            $query->where('name', 'LIKE', '%' . $term . '%');
                        });
                }
            });
        }

        // Cek apakah tanggal awal dan tanggal akhir diisi
        if ($request->filled('cariTanggalAwal') && $request->filled('cariTanggalAkhir')) {
            $cariTanggalAwal = $request->cariTanggalAwal;
            $cariTanggalAkhir = $request->cariTanggalAkhir;

            // Pastikan format tanggal sesuai dengan format yang diharapkan oleh database Anda
            $query->whereBetween('tgl_perjalanan', [$cariTanggalAwal, $cariTanggalAkhir]);
        }

        $perjalanans = $query->get();

        return view('Kendaraan.kondisikendaraan', ['perjalanans' => $perjalanans]);
    }



}
