<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CreateCompanySeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $companies = [
            ['name' => 'LightDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'OfficialDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'newDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'LightDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'OfficialDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'newDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'LightDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'OfficialDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
            ['name' => 'newDev',
                'email' => 'user@lightofficialstudio.com',
                'address' => 'test'
            ],
    ];
        foreach($companies as $companies)
        {
            Company::create($companies);
        }

    }
}