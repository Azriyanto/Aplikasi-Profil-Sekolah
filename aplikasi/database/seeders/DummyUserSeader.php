<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeader extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'status'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Azri',
                'email'=>'azri.guru@gmail.com',
                'status'=>'guru',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'ilham',
                'email'=>'ilham.siswa@gmail.com',
                'status'=>'siswa',
                'password'=>bcrypt('123456')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);

        }
    }
}
