<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PerjalananController extends Controller
{
    public function statusPerjalananAdmin()
    {
        $perjalanans = Perjalanan::with('kendaraan')->paginate();
        return view('perjalanan.statusPerjalanan', compact('perjalanans'));
    }

    public function updateStatus(Request $request, $id)
    {
        $perjalanan = Perjalanan::findOrFail($id);

        // Validasi request jika diperlukan
        $request->validate([
            'status' => 'required|in:pending,disetujui,ditolak',
        ]);

        // Setel status perjalanan
        $perjalanan->status = $request->input('status');
        $perjalanan->save();

        // Redirect atau berikan respons sesuai kebutuhan
        return redirect()->back()->with('success', 'Status perjalanan berhasil diperbarui');
    }
    public function index()
    {
        $userId = Auth::id();

        // Ambil perjalanan hanya untuk pengguna yang login dan status selesai
        $perjalanans = Perjalanan::where('user_id', $userId)
            ->get();
        // $perjalanans = Perjalanan::with('kendaraan')->paginate();
        return view('perjalanan.statusPerjalananUser', compact('perjalanans'));
    }

    public function create()
    {
        $kendaraan = Kendaraan::all();
        $perjalanans = DB::table('kendaraans')
            ->leftJoin('perjalanans', 'kendaraans.id', '=', 'perjalanans.tipe_kendaraan_id')
            ->get();

        // dd($perjalanans);
        return view('perjalanan.tambahDataPerjalananUser', compact('kendaraan', 'perjalanans'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'tgl_perjalanan' => 'required|date',
            'alamat_awal' => 'required|string',
            'alamat_tujuan' => 'required|string',
            'km_awal' => 'required|numeric',
            'km_akhir' => 'nullable|numeric',
            'tipe_kendaraan' => 'exists:kendaraans,type',
            'no_polisi' => 'string',
            'jenis_perjalanan' => 'required|string|in:perjalanan luar,perjalanan dalam',
            'lampu_depan' => 'string|in:berfungsi,tidak berfungsi',
            'lampusen_depan' => 'string|in:berfungsi,tidak berfungsi',
            'lampusen_belakang' => 'string|in:berfungsi,tidak berfungsi',
            'lampu_rem' => 'string|in:berfungsi,tidak berfungsi',
            'lampu_mundur' => 'string|in:berfungsi,tidak berfungsi',
            'body' => 'string|in:baik,rusak',
            'ban' => 'string|in:baik,rusak',
            'klakson' => 'string|in:baik,rusak',
            'pedal_gas' => 'string|in:berfungsi,rusak',
            'pedal_kopling' => 'string|in:berfungsi,rusak',
            'pedal_rem' => 'string|in:berfungsi,rusak',
            'weaper' => 'string|in:berfungsi,rusak',
            'air_weaper' => 'string|in:terisi,tidak terisi',
            'air_radiator' => 'string|in:terisi,tidak terisi',
            'oli_mesin' => 'string|in:terisi,tidak terisi',
            'photo_km_awal' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_km_akhir' => $request->isMethod('put') ? 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' : 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catatan' => 'nullable|',
        ]);

        // if($validated->fails()){
        //     throw new ValidationException($validated);
        // }
        // Simpan data ke model

        $perjalanan = new Perjalanan($request->all());
        $perjalanan->tipe_kendaraan_id = Kendaraan::where('type', $request->tipe_kendaraan)->first()->id ?? null;
        $perjalanan->user_id = auth()->id();
        $perjalanan->status_perjalanan = Perjalanan::STATUS_MENUNGGU;
        // $perjalanan->km_akhir = $request->input('km_akhir', 0); // Ganti 0 dengan nilai default lain jika diperluka
        $perjalanan->save();
        // dd($perjalanan);
        // Mengunggah dan menyimpan gambar km_awal
        if ($request->hasFile('photo_km_awal')) {
            $photoKmAwalPath = $request->file('photo_km_awal')->store('photos', 'public');
            $perjalanan->photo_km_awal = $photoKmAwalPath;
            $perjalanan->save();
        }

        // Mengunggah dan menyimpan gambar km_akhir
        if ($request->hasFile('photo_km_akhir')) {
            $photoKmAkhirPath = $request->file('photo_km_akhir')->store('photos', 'public');
            $perjalanan->photo_km_akhir = $photoKmAkhirPath;
            $perjalanan->save();
        }

        return redirect()->route('statusPerjalananUser.index')->with('success', 'Data perjalanan berhasil disimpan');
    }

    public function editadmin($id)
    {
        $kendaraan = Kendaraan::all();
        $perjalanan = Perjalanan::findOrFail($id);

        return view('perjalanan.perjalananEdit', compact('kendaraan', 'perjalanan'));
    }

    public function updateadmin(Request $request, $id)
    {
        // Validasi data yang dikirimkan melalui formulir
        $validated = $request->validate([
            'tgl_perjalanan' => 'required|date',
            'alamat_awal' => 'required|string',
            'alamat_tujuan' => 'required|string',
            'km_awal' => 'required|numeric',
            'km_akhir' => 'required|numeric',
            'tipe_kendaraan' => 'exists:kendaraans,type',
            'no_polisi' => 'string',
            'jenis_perjalanan' => 'required|string|in:perjalanan luar,perjalanan dalam',
            'lampu_depan' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampusen_depan' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampusen_belakang' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampu_rem' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampu_mundur' => 'required|string|in:berfungsi,tidak berfungsi',
            'body' => 'required|string|in:baik,rusak',
            'ban' => 'required|string|in:baik,rusak',
            'klakson' => 'required|string|in:baik,rusak',
            'pedal_gas' => 'required|string|in:berfungsi,rusak',
            'pedal_kopling' => 'required|string|in:berfungsi,rusak',
            'pedal_rem' => 'required|string|in:berfungsi,rusak',
            'weaper' => 'required|string|in:berfungsi,rusak',
            'air_weaper' => 'required|string|in:terisi,tidak terisi',
            'air_radiator' => 'required|string|in:terisi,tidak terisi',
            'oli_mesin' => 'required|string|in:terisi,tidak terisi',
            'photo_km_awal' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_km_akhir' => $request->isMethod('put') ? 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' : 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catatan' => 'nullable|',
        ]);

        $perjalanan = Perjalanan::findOrFail($id);

        $perjalanan->fill($request->all());
        $perjalanan->tipe_kendaraan_id = Kendaraan::where('type', $request->tipe_kendaraan)->first()->id; // Pastikan ini sesuai dengan logika Anda


        // Mengunggah dan menyimpan gambar km_awal
        if ($request->hasFile('photo_km_awal')) {
            $photoKmAwalPath = $request->file('photo_km_awal')->store('photos', 'public');
            $perjalanan->photo_km_awal = $photoKmAwalPath;
        }

        // Mengunggah dan menyimpan gambar km_akhir
        if ($request->hasFile('photo_km_akhir')) {
            $photoKmAkhirPath = $request->file('photo_km_akhir')->store('photos', 'public');
            $perjalanan->photo_km_akhir = $photoKmAkhirPath;
        }

        if ($this->isFormComplete($perjalanan)) {
            // Update status menjadi selesai
            $perjalanan->status_perjalanan = Perjalanan::STATUS_SELESAI;
            // ...
        } else {
            // Update status menjadi pending
            $perjalanan->status_perjalanan = Perjalanan::STATUS_PENDING;
            // ...
        }


        $perjalanan->save();

        return redirect()->route('dataPerjalanan')->with('success', 'Data perjalanan berhasil diperbarui');
    }

    public function destroyadmin(Perjalanan $perjalanan)
    {
        // Pastikan pengguna memiliki izin untuk menghapus
        // Lakukan pengecekan izin sesuai dengan kebutuhan aplikasi Anda

        // Hapus data perjalanan
        $perjalanan->delete();

        // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
        return redirect()->route('dataPerjalanan')
            ->with('success', 'Data perjalanan berhasil dihapus');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::all();
        $perjalanan = Perjalanan::findOrFail($id);

        return view('perjalanan.perjalananEdit', compact('kendaraan', 'perjalanan'));
    }

    private function isFormComplete($perjalanan)
    {
        // Logika untuk menentukan apakah form sudah lengkap
        return !empty($perjalanan->km_akhir) && !empty($perjalanan->photo_km_akhir);
    }


    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan melalui formulir
        $validated = $request->validate([
            'tgl_perjalanan' => 'required|date',
            'alamat_awal' => 'required|string',
            'alamat_tujuan' => 'required|string',
            'km_awal' => 'required|numeric',
            'km_akhir' => 'required|numeric',
            'tipe_kendaraan' => 'exists:kendaraans,type',
            'no_polisi' => 'string',
            'jenis_perjalanan' => 'required|string|in:perjalanan luar,perjalanan dalam',
            'lampu_depan' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampusen_depan' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampusen_belakang' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampu_rem' => 'required|string|in:berfungsi,tidak berfungsi',
            'lampu_mundur' => 'required|string|in:berfungsi,tidak berfungsi',
            'body' => 'required|string|in:baik,rusak',
            'ban' => 'required|string|in:baik,rusak',
            'klakson' => 'required|string|in:baik,rusak',
            'pedal_gas' => 'required|string|in:berfungsi,rusak',
            'pedal_kopling' => 'required|string|in:berfungsi,rusak',
            'pedal_rem' => 'required|string|in:berfungsi,rusak',
            'weaper' => 'required|string|in:berfungsi,rusak',
            'air_weaper' => 'required|string|in:terisi,tidak terisi',
            'air_radiator' => 'required|string|in:terisi,tidak terisi',
            'oli_mesin' => 'required|string|in:terisi,tidak terisi',
            'photo_km_awal' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_km_akhir' => $request->isMethod('put') ? 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' : 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'catatan' => 'nullable|',
        ]);

        $perjalanan = Perjalanan::findOrFail($id);

        $perjalanan->fill($request->all());
        $perjalanan->tipe_kendaraan_id = Kendaraan::where('type', $request->tipe_kendaraan)->first()->id; // Pastikan ini sesuai dengan logika Anda


        // Mengunggah dan menyimpan gambar km_awal
        if ($request->hasFile('photo_km_awal')) {
            $photoKmAwalPath = $request->file('photo_km_awal')->store('photos', 'public');
            $perjalanan->photo_km_awal = $photoKmAwalPath;
        }

        // Mengunggah dan menyimpan gambar km_akhir
        if ($request->hasFile('photo_km_akhir')) {
            $photoKmAkhirPath = $request->file('photo_km_akhir')->store('photos', 'public');
            $perjalanan->photo_km_akhir = $photoKmAkhirPath;
        }

        if ($this->isFormComplete($perjalanan)) {
            // Update status menjadi selesai
            $perjalanan->status_perjalanan = Perjalanan::STATUS_SELESAI;
            // ...
        } else {
            // Update status menjadi pending
            $perjalanan->status_perjalanan = Perjalanan::STATUS_PENDING;
            // ...
        }


        $perjalanan->save();

        return redirect()->route('statusPerjalananUser.index')->with('success', 'Data perjalanan berhasil diperbarui');
    }

    public function getData()
    {
        $perjalanans = Perjalanan::with('kendaraan')
            ->where(function ($query) {
                $query->where('status_perjalanan', Perjalanan::STATUS_PENDING)
                    ->orWhere('status_perjalanan', Perjalanan::STATUS_DITOLAK);
            })
            ->paginate();
        return view('perjalanan.dataPerjalanan', compact('perjalanans'));
    }

    public function riwayat()
    {
        $userId = Auth::id();

        // Ambil perjalanan hanya untuk pengguna yang login dan status selesai
        $perjalanans = Perjalanan::where('user_id', $userId)
            ->where('status_perjalanan', Perjalanan::STATUS_SELESAI)
            ->get();
        return view('perjalanan.riwayatPerjalananDriver', compact('perjalanans'));
    }

    public function approvePerjalanan(Perjalanan $perjalanan)
    {
        $perjalanan->status_perjalanan = 'disetujui';
        $perjalanan->save();

        return response()->json(['message' => 'Perjalanan disetujui.']);
    }

    public function rejectPerjalanan(Perjalanan $perjalanan)
    {
        $perjalanan->status_perjalanan = 'ditolak';
        $perjalanan->save();

        return response()->json(['message' => 'Perjalanan ditolak.']);
    }

    public function search(Request $request)
    {
        $query = Perjalanan::query();

        if ($request->has('search')) {
            $searchTerms = explode(' ', $request->search);

            $query->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('alamat_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('alamat_tujuan', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_akhir', 'LIKE', '%' . $term . '%')
                        ->orWhere('jenis_perjalanan', 'LIKE', '%' . $term . '%') // Tambahkan jenis_perjalanan
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

        return view('perjalanan.dataperjalanan', ['perjalanans' => $perjalanans]);
    }

    public function searchstatus(Request $request)
    {
        $query = Perjalanan::query();

        if ($request->has('search')) {
            $searchTerms = explode(' ', $request->search);

            $query->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('alamat_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('alamat_tujuan', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_akhir', 'LIKE', '%' . $term . '%')
                        ->orWhere('jenis_perjalanan', 'LIKE', '%' . $term . '%') // Tambahkan jenis_perjalanan
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

        return view('perjalanan.statusperjalanan', ['perjalanans' => $perjalanans]);
    }

    public function searchriwayatuser(Request $request)
    {
        $query = Perjalanan::query();

        // Menambahkan kondisi untuk memeriksa ID pengguna yang sedang login
        $query->where('user_id', auth()->user()->id);

        if ($request->has('search')) {
            $searchTerms = explode(' ', $request->search);

            $query->where(function ($query) use ($searchTerms) {
                foreach ($searchTerms as $term) {
                    $query->where('alamat_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('alamat_tujuan', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_awal', 'LIKE', '%' . $term . '%')
                        ->orWhere('km_akhir', 'LIKE', '%' . $term . '%')
                        ->orWhere('jenis_perjalanan', 'LIKE', '%' . $term . '%')
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

        return view('perjalanan.riwayatPerjalananDriver', ['perjalanans' => $perjalanans]);
    }
    // public function search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $cariTanggalAwal = $request->input('cariTanggalAwal');
    //     $cariTanggalAkhir = $request->input('cariTanggalAkhir');

    //     $perjalanans = Perjalanan::where(function ($query) use ($search) {
    //         $query->where('alamat_awal', 'LIKE', '%' . $search . '%')
    //             ->orWhere('alamat_tujuan', 'LIKE', '%' . $search . '%')
    //             ->orWhere('tgl_perjalanan', 'LIKE', '%' . $search . '%')
    //             ->orWhere('jenis_perjalanan', 'LIKE', '%' . $search . '%')
    //             ->orWhere('status_perjalanan', 'LIKE', '%' . $search . '%');
    //     });

    //     if ($cariTanggalAwal && $cariTanggalAkhir) {
    //         $perjalanans->whereBetween('tgl_perjalanan', [$cariTanggalAwal, $cariTanggalAkhir]);
    //     }

    //     $perjalanans = $perjalanans->paginate();

    //     return view('perjalanan.dataPerjalanan', compact('perjalanans'));
    // }
}


// public function getData()
// {
//     $perjalanan = Perjalanan::with('kendaraan')->paginate();
//     return view('perjalanan.tambahDataPerjalananUser', compact('perjalanan'));
// }

// public function store(Request $request)
// {
//     // Validasi data
//     $request->validate([
//         'tgl_perjalanan' => 'required|date',
//         'alamat_awal' => 'required|string',
//         'alamat_tujuan' => 'required|string',
//         'km_awal' => 'required|numeric',
//         'km_akhir' => 'required|numeric',
//         'tipe_kendaraan' => 'required|exists:kendaraans,type',
//         'no_polisi' => 'required|string',
//         'jenis_perjalanan' => 'required|string|in:perjalanan luar,perjalanan dalam',
//         'lampu_depan' => 'required|string|in:berfungsi,tidak berfungsi',
//         'lampusen_depan' => 'required|string|in:berfungsi,tidak berfungsi',
//         'lampusen_belakang' => 'required|string|in:berfungsi,tidak berfungsi',
//         'lampu_rem' => 'required|string|in:berfungsi,tidak berfungsi',
//         'lampu_mundur' => 'required|string|in:berfungsi,tidak berfungsi',
//         'body' => 'required|string|in:baik,rusak',
//         'ban' => 'required|string|in:baik,rusak',
//         'klakson' => 'required|string|in:baik,rusak',
//         'pedal_gas' => 'required|string|in:berfungsi,rusak',
//         'pedal_kopling' => 'required|string|in:berfungsi,rusak',
//         'pedal_rem' => 'required|string|in:berfungsi,rusak',
//         'weaper' => 'required|string|in:berfungsi,rusak',
//         'air_weaper' => 'required|string|in:terisi,tidak terisi',
//         'air_radiator' => 'required|string|in:terisi,tidak terisi',
//         'oli_mesin' => 'required|string|in:terisi,tidak terisi',
//         'photo_km_awal' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         'photo_km_akhir' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
//         'catatan' => 'nullable|string',
//     ]);

//     // Simpan data ke model
//     $perjalanan = new Perjalanan();
//     $perjalanan->tgl_perjalanan = $request->tgl_perjalanan;
//     $perjalanan->alamat_awal = $request->alamat_awal;
//     $perjalanan->alamat_tujuan = $request->alamat_tujuan;
//     $perjalanan->km_awal = $request->km_awal;
//     $perjalanan->km_akhir = $request->km_akhir;
//     $perjalanan->tipe_kendaraan = $request->tipe_kendaraan;
//     $perjalanan->no_polisi = $request->no_polisi;
//     $perjalanan->jenis_perjalanan = $request->jenis_perjalanan;
//     $perjalanan->lampu_depan = $request->lampu_depan;
//     $perjalanan->lampusen_depan = $request->lampusen_depan;
//     $perjalanan->lampusen_belakang = $request->lampusen_belakang;
//     $perjalanan->lampu_rem = $request->lampu_rem;
//     $perjalanan->lampu_mundur = $request->lampu_mundur;
//     $perjalanan->body = $request->body;
//     $perjalanan->ban = $request->ban;
//     $perjalanan->klakson = $request->klakson;
//     $perjalanan->pedal_gas = $request->pedal_gas;
//     $perjalanan->pedal_kopling = $request->pedal_kopling;
//     $perjalanan->pedal_rem = $request->pedal_rem;
//     $perjalanan->weaper = $request->weaper;
//     $perjalanan->air_weaper = $request->air_weaper;
//     $perjalanan->air_radiator = $request->air_radiator;
//     $perjalanan->oli_mesin = $request->oli_mesin;
//     $perjalanan->catatan = $request->catatan;

//     // Simpan ke database
//     $perjalanan->save();

//     // Mengunggah dan menyimpan gambar km_awal
//     if ($request->hasFile('photo_km_awal')) {
//         $photoKmAwalPath = $request->file('photo_km_awal')->store('photos', 'public');
//         $perjalanan->photo_km_awal = $photoKmAwalPath;
//         $perjalanan->save();
//     }

//     // Mengunggah dan menyimpan gambar km_akhir
//     if ($request->hasFile('photo_km_akhir')) {
//         $photoKmAkhirPath = $request->file('photo_km_akhir')->store('photos', 'public');
//         $perjalanan->photo_km_akhir = $photoKmAkhirPath;
//         $perjalanan->save();
//     }

//     // Redirect atau kembalikan respons
//     return redirect()->route('tambahPerjalananUser')->with('success', 'Data perjalanan berhasil disimpan');
// }
