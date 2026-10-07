<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $email = "breteuildentaire@gmail.com";
        $password = "breteuil128@";
        $name = "Admin";

        if (! $email || ! $password) {
            throw new \InvalidArgumentException(
                'Définissez ADMIN_EMAIL et ADMIN_PASSWORD dans le fichier .env avant de lancer le seeder.'
            );
        }

        User::query()->updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password,
                'role' => 'admin',
                'email_verified_at' => now(),
            ]
        );
    }
}
