<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Mohammad Dandy Putra', 
                'email' => 'dandy@gmail.com',
                'password' => Hash::make('123123')
            ],
            [
                'name' => 'Elydha', 
                'email' => 'elydha@gmail.com',
                'password' => Hash::make('123123')
            ]
        ];

        foreach($users as $value){
            User::create($value);
        }
    }
}
