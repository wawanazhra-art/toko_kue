<?php

namespace Database\Seeders;
use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buat 1 akun
        User::create([
            'name'=>'Admin Cake',
            'email'=>'admin@mycake.com',
            'password'=>Hash::make('admin123'),
        ]);
    }
}
