<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;
use App\Models\Perjalanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AcountController extends Controller
{
    public function index()
    {
        $users = User::all(); // Mengambil semua data pengguna dari database
        return view('acount.manage', compact('users'));
    }


    public function create()
    {
        return view('acount.add');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            // 'role' => 'required|in:user', // Sesuaikan dengan role yang digunakan
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            // 'role' => $validatedData['role'],
        ]);

        $profile = new Profile();
        $profile->user_id = $user->id;
        // Tambahkan kolom lainnya sesuai kebutuhan
        $profile->save();

        return redirect()->route('acount.index')->with('success', 'User created successfully.');
    }

    public function edit(User $user)
    {
        return view('acount.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('acount.index')->with('success', 'Data pengguna diperbarui.');
    }


    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();

            // Hapus terkait perjalans
            $user->perjalans()->delete();

            // Hapus terkait profile
            $user->profile()->delete();

            // Hapus pengguna
            $user->delete();

            DB::commit();

            return redirect()->route('acount.index')->with('success', 'Data pengguna dihapus.');
        } catch (\Exception $e) {
            DB::rollback();

            return redirect()->route('acount.index')->with('error', 'Gagal menghapus data pengguna.');
        }
    }


    // app/Http/Controllers/AdminController.php

        public function getData()
        {
            $perjalanans = Perjalanan::with('kendaraan')->orderBy('created_at', 'desc')->paginate();
            return view('perjalanan.statusPerjalanan', compact('perjalanans'));
        }

    // public function respondToPerjalanan(Request $request, $id)
    // {
    //     $perjalanan = Perjalanan::findOrFail($id);

    //     // ...

    //     if ($request->decision == 'terima') {
    //         // Admin menerima perjalanan
    //         $perjalanan->status_perjalanan = Perjalanan::STATUS_PENDING;
    //     } elseif ($request->decision == 'tolak') {
    //         // Admin menolak perjalanan
    //         $perjalanan->status_perjalanan = Perjalanan::STATUS_DITOLAK;
    //     }

    //     $perjalanan->save();


    // }


}
