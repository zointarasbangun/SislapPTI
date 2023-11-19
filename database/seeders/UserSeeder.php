<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $users = [
        [
            'name'      => 'admin',
            'email'     => 'admin@admin',
            'password'  => bcrypt('password'),
            'role'      => 'admin',
        ],
        [
            'name'      => 'user',
            'email'     => 'user@user',
            'password'  => bcrypt('password'),
            'role'      => 'user',
        ],
    ];

    foreach ($users as $user) {
        $createdUser = User::create($user);

        // Sekarang, $createdUser sudah berisi instance User yang baru saja dibuat
        $profile = new Profile([
            'user_id' => $createdUser->id,
            // Tambahkan kolom lainnya sesuai kebutuhan
        ]);
        $profile->save();
    }
}

}
