<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert([
            [
                'title' => 'Business Research',
                'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
                'icon' => 'fa-user-tie',
            ],
            [
                'title' => 'Stretagic Planning',
                'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
                'icon' => 'fa-chart-pie',
            ],
            [
                'title' => 'Market Analysis',
                'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
                'icon' => 'fa-chart-line',
            ],
            [
                'title' => 'Financial Analaysis',
                'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
                'icon' => 'fa-chart-area',
            ],
            [
                'title' => 'legal Advisory',
                'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
                'icon' => 'fa-balance-scale',
            ],
            [
                'title' => 'Tax & Insurance',
                'description' => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.',
                'icon' => 'fa-house-damage',
            ],
        ]);
    }
}
