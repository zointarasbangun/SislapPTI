<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
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
            'no_polisi' => 'required|string',
            'tgl_masuk' => 'required|date',
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
        if ($kendaraan->photo) {
            Storage::disk('public')->delete($kendaraan->photo);
        }
        $kendaraan->delete();

        return redirect()->route('kendaraan.index');
    }
}
