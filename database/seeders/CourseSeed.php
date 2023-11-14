<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Course::create([
        'name'=>"curso de laravel N-1",
        'name'=>"curso de laravel N-2",

        
       ]);
    }
}
