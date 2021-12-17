<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'last_name' => '山田',
            'first_name' => '太朗',
            'name' => '山田 太朗',
            'last_name_reading' => 'やまだ',
            'first_name_reading' => 'たろう',
            'name_reading' => 'やまだ たろう',
            'email' => 'test@example.com',
            'postal_code' => '3998301',
            'prefectures' => '長野県',
            'municipalities' => '安曇野市 穂高有明',
            'house_number' => '2257-32',
            'building_name' => '穂高荘',
            'telephone_number' => '08011111111',
            'emergency_telephone_number' => '09011111111',
            'password' => '12345678',
            'employee' => '1',
        ])
    }
}
