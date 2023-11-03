<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'role' => 'required|in:user', // Sesuaikan dengan role yang digunakan
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

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
        $user->delete();
        return redirect()->route('acount.index')->with('success', 'Data pengguna dihapus.');
    }


}
