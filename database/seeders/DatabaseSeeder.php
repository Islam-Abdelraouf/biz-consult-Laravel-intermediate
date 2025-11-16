<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CompanySeeder::class,
            FeatureSeeder::class,
            HeroSeeder::class,
            MemberSeeder::class,
            MessageSeeder::class,
            ServiceSeeder::class,
            SettingSeeder::class,
            SubscriberSeeder::class,
            TestimonialSeeder::class,
            UserSeeder::class,
        ]);
    }
}
