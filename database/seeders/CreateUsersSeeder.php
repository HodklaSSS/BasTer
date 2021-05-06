<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin A',
                'email' => 'admin_a@mail.com',
                'password' => Hash::make(123456),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
