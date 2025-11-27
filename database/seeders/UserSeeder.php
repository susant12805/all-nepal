<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create(
            ['name'=> 'Susant',
            'email'=> 'susantgyawali567@gmail.com',
            'phone'=> '9748800787',
            'password'=> bcrypt('asdasdasd')
        ]);
    }
}
