<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WhatsAppController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Ambil perjalanan hanya untuk pengguna yang login dan status selesai
        $perjalanans = Perjalanan::where('user_id', $userId)
            ->get();
        // $perjalanans = Perjalanan::with('kendaraan')->paginate();
        return view('notifikasi.notifikasiUser', compact('perjalanans'));
    }

    public function sendMessage()
{
    $userId = Auth::id();
    $user = User::find($userId);

    if (!$user) {
        // Handle the case where the user is not found
        return response()->json(['error' => 'User not found'], 404);
    }

    $perjalanans = Perjalanan::where('user_id', $userId)->get();

    // You may want to loop through $perjalanans if there are multiple perjalanan records
    foreach ($perjalanans as $perjalanan) {
        $travelDate = $perjalanan->tgl_perjalanan;

        $text = "$user->name akan melakukan perjalanan pada tanggal $travelDate. Silahkan cek aplikasi untuk detail perjalanan.";
        // dd(rawurlencode($text));

        return redirect("https://wa.me/+6285279397399" . "?text=" . rawurlencode($text));
    }

    // Handle the case where there are no perjalanan records for the user
    return response()->json(['error' => 'No travel records found for the user'], 404);
}
}

