<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        $userId = auth()->id(); // Mendapatkan ID pengguna yang sedang login
        $profile = Profile::where('user_id', $userId)->first();

        return view('auth.profile', compact('profile'));
    }


    public function edit($userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();

        return view('auth.editProfile', compact('profile'));
    }

    public function update(Request $request, $userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();

        $request->validate([
            'fulname' => 'required|string|max:255',
            'username' => 'nullable|string|max:255|unique:profiles,username,'.$profile->id,
            'phone' => 'nullable|string|max:20',
            'lokasi' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload dan penyimpanan foto profil jika diperlukan
        if ($request->hasFile('foto_profil')) {
            $path = $request->file('foto_profil')->store('profile_images', 'public');
            $profile->foto_profil = $path;
        }

        // Update kolom-kolom profil
        $profile->update($request->only('fulname', 'username', 'phone', 'lokasi', 'bio'));

        return redirect()->route('profile', ['userId' => $userId])->with('success', 'Profil berhasil diperbarui.');
    }

    public function updateAdmin(Request $request, $userId)
    {
        $profile = Profile::where('user_id', $userId)->firstOrFail();

        $request->validate([
            'fulname' => 'required|string|max:255',
            'username' => 'nullable|string|max:255|unique:profiles,username,'.$profile->id,
            'phone' => 'nullable|string|max:20',
            'lokasi' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload dan penyimpanan foto profil jika diperlukan
        if ($request->hasFile('foto_profil')) {
            $path = $request->file('foto_profil')->store('profile_images', 'public');
            $profile->foto_profil = $path;
        }

        // Update kolom-kolom profil
        $profile->update($request->only('fulname', 'username', 'phone', 'lokasi', 'bio'));

        return redirect()->route('profileAdmin')->with('success', 'Profil berhasil diperbarui.');
    }
}
