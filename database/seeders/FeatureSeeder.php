<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::insert([
            [
                'title' => 'Best In Industry',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
                'icon' => 'fa-cubes',
            ],
            [
                'title' => '99% Success Rate',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
                'icon' => 'fa-percent',
            ],
            [
                'title' => 'Award Winning',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
                'icon' => 'fa-award',
            ],
            [
                'title' => '100% Happy Client',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
                'icon' => 'fa-smile-beam',
            ],
            [
                'title' => 'Professional Advisors',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
                'icon' => 'fa-user-tie',
            ],
            [
                'title' => '24/7 Customer Support',
                'description' => 'Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos diam dolor',
                'icon' => 'fa-headset',
            ],
        ]);
    }
}
