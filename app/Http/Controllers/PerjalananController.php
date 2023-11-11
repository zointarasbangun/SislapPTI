<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PerjalananController extends Controller
{

    public function create()
    {
        $kendaraan = Kendaraan::all();
        $perjalanans = DB::table('kendaraans')
            ->leftJoin('perjalanans', 'kendaraans.id', '=', 'perjalanans.kendaraan_id')
            ->get();

        // dd($perjalanans);
        return view('perjalanan.tambahDataPerjalananUser', compact('kendaraan','perjalanans'));
    }

    // public function create()
    // {
    //     return view('perjalanan.tambahDataPerjalananUser');
    // }

    public function store(Request $request)
    {
        // Validasi data yang dikirimkan melalui formulir
        $data = $request->validate([
            'tgl_perjalanan' => 'required|date',
            'alamat_awal' => 'required|string',
            'alamat_tujuan' => 'required|string',
            'km_awal' => 'required|numeric',
            'km_akhir' => 'required|numeric',
            'tipe_kendaraan' => 'required|string',
            'no_polisi' => 'required|string',
            'jenis_perjalanan' => 'required|string',
            'lampu_depan' => 'required|string',
            'lampu_sen_depan' => 'required|string',
            'lampu_sen_belakang' => 'required|string',
            'lampu_rem' => 'required|string',
            'lampu_mundur' => 'required|string',
            'body' => 'required|string',
            'ban' => 'required|string',
            'klakson' => 'required|string',
            'pedal_gas' => 'required|string',
            'pedal_kopling' => 'required|string',
            'pedal_rem' => 'required|string',
            'weaper' => 'required|string',
            'air_weaper' => 'required|string',
            'air_radiator' => 'required|string',
            'oli_mesin' => 'required|string',
            'photo_km_awal' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_km_akhir' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'catatan' => 'required|string',
        ]);

        // Mengunggah dan menyimpan gambar km_awal
        if ($request->hasFile('photo_km_awal')) {
            $photoKmAwalPath = $request->file('photo_km_awal')->store('photos', 'public');
            $data['photo_km_awal'] = $photoKmAwalPath;
        }

        // Mengunggah dan menyimpan gambar km_akhir
        if ($request->hasFile('photo_km_akhir')) {
            $photoKmAkhirPath = $request->file('photo_km_akhir')->store('photos', 'public');
            $data['photo_km_akhir'] = $photoKmAkhirPath;
        }

        // Simpan data perjalanan ke dalam database
        Perjalanan::create($data);

        // Redirect ke halaman yang sesuai
        return redirect()->route('perjalanan.index');
    }

    public function edit($id)
    {
        $perjalanan = Perjalanan::findOrFail($id);
        return view('perjalanan.edit', compact('perjalanan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirimkan melalui formulir
        $data = $request->validate([
            'tgl_perjalanan' => 'required|date',
            'alamat_awal' => 'required|string',
            'alamat_tujuan' => 'required|string',
            'km_awal' => 'required|numeric',
            'km_akhir' => 'required|numeric',
            'tipe_kendaraan' => 'required|string',
            'no_polisi' => 'required|string',
            'jenis_perjalanan' => 'required|string',
            'lampu_depan' => 'required|string',
            'lampu_sen_depan' => 'required|string',
            'lampu_sen_belakang' => 'required|string',
            'lampu_rem' => 'required|string',
            'lampu_mundur' => 'required|string',
            'body' => 'required|string',
            'ban' => 'required|string',
            'klakson' => 'required|string',
            'pedal_gas' => 'required|string',
            'pedal_kopling' => 'required|string',
            'pedal_rem' => 'required|string',
            'weaper' => 'required|string',
            'air_weaper' => 'required|string',
            'air_radiator' => 'required|string',
            'oli_mesin' => 'required|string',
            'photo_km_awal' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'photo_km_akhir' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'catatan' => 'required|string',
        ]);

        $perjalanan = Perjalanan::findOrFail($id);

        // Mengunggah dan menyimpan gambar km_awal jika ada perubahan
        if ($request->hasFile('photo_km_awal')) {
            $photoKmAwalPath = $request->file('photo_km_awal')->store('photos', 'public');
            $data['photo_km_awal'] = $photoKmAwalPath;
        }

        // Mengunggah dan menyimpan gambar km_akhir jika ada perubahan
        if ($request->hasFile('photo_km_akhir')) {
            $photoKmAkhirPath = $request->file('photo_km_akhir')->store('photos', 'public');
            $data['photo_km_akhir'] = $photoKmAkhirPath;
        }

        $perjalanan->update($data);

        // Redirect ke halaman yang sesuai
        return redirect()->route('perjalanan.index');
    }


    // public function getData()
    // {
    //     $perjalanan = Perjalanan::with('kendaraan')->paginate();
    //     return view('perjalanan.tambahDataPerjalananUser', compact('perjalanan'));
    // }
}
