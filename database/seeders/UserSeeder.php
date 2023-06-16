<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            ['name' => 'User',
                'email' => 'user@lightofficialstudio.com',
                'password' => bcrypt('123456')

            ],

            ['name' => 'Editor',
                'email' => 'editor@lightofficialstudio.com',
                'password' => bcrypt('123456')

            ],

            ['name' => 'Admin',
                'email' => 'Admin@lightofficialstudio.com',
                'password' => bcrypt('123456')

            ],
    ];
        foreach($users as $user)
        {
            User::create($user);
        }
    }
}