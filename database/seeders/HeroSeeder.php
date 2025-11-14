<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::updateOrCreate([
            'main_title' => 'We Help To Push Your Business To The Top Level',
            'btn_title' => 'Learn More',
            'image' => 'hero.png',
            'description' => 'Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem',
        ]);

    }
}
