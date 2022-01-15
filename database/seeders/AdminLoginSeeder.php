<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        'name'=>'Nadia',
        'email'=>'n@gmail.com',
        'password'=>bcrypt('12'),
        'mobile'=>'01782269985',
        'role'=>'admin',
    ]);

    }
}
