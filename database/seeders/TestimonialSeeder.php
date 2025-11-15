<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::insert([
            [
                'name' => 'Michael Roberts',
                'position' => 'CEO Capital',
                'description' => 'The team demonstrated exceptional professionalism and delivered valuable insights that transformed our strategic direction.',
                'image' => 'testimonial-1.jpg',
            ],
            [
                'name' => 'Sophia Martinez',
                'position' => 'Operations Manager',
                'description' => 'Their service exceeded our expectations. The market analysis was precise, actionable, and crucial for our growth.',
                'image' => 'testimonial-2.jpg',
            ],
            [
                'name' => 'David Chen',
                'position' => 'Lead Auditor',
                'description' => 'Reliable, insightful, and highly experienced. We relied on their expertise to streamline our financial planning.',
                'image' => 'testimonial-3.jpg',
            ],
            [
                'name' => 'Emily Thompson',
                'position' => 'Marketing Director',
                'description' => 'A fantastic partner! Their strategic planning sessions helped us redefine our competitive advantage.',
                'image' => 'testimonial-4.jpg',
            ],
            [
                'name' => 'Ahmed Youssef',
                'position' => 'General Manager',
                'description' => 'Professional, punctual, and highly knowledgeable. We appreciated their attention to detail and honest guidance.',
                'image' => 'testimonial-5.jpg',
            ],
            [
                'name' => 'Laura Bennett',
                'position' => 'Finance Lead',
                'description' => 'They played a critical role in our company restructuring. The clarity and depth of their analysis were impressive.',
                'image' => 'testimonial-6.jpg',
            ],
        ]);
    }
}
