<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate([
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'facebook' => 'https://www.facebook.com/',
            // 'twitter' => 'https://x.com/',
            'youtube' => 'https://www.youtube.com/',
            // 'linkedin' => 'https://www.linkedin.com/',
            'instagram' => 'https://www.instagram.com/',
        ]);
    }
}
