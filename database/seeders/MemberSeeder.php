<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::insert([
            [
                'name' => 'Martin Phill',
                'position' => 'Operation CEO',
                'image' => 'members-1.jpg',
                'facebook' => 'Earum ipsa cum nece',
                'twitter' => 'Rem quisquam laborum',
                'linkedin' => 'Laborum Magnam aut',
            ],
            [
                'name' => 'Abel Carver',
                'position' => 'Advertising Manager',
                'image' => 'members-2.jpg',
                'facebook' => 'Earum ipsa cum nece',
                'twitter' => 'Rem quisquam laborum',
                'linkedin' => 'Laborum Magnam aut',
            ],
            [
                'name' => 'Blossom Butler',
                'position' => 'Technical Manager',
                'image' => 'members-3.jpg',
                'facebook' => 'Earum ipsa cum nece',
                'twitter' => 'Rem quisquam laborum',
                'linkedin' => 'Laborum Magnam aut',
            ],
            [
                'name' => 'Adam Black',
                'position' => 'Accounting Manager',
                'image' => 'members-4.jpg',
                'facebook' => 'Earum ipsa cum nece',
                'twitter' => 'Rem quisquam laborum',
                'linkedin' => 'Laborum Magnam aut',
            ],
        ]);
    }
}
