<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('icons')->insert([
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'PHP'],
            ['name' => 'Laravel'],
            ['name' => 'Composer'],
            ['name' => 'Tailwind'],
            ['name' => 'StyledComponents'],
            ['name' => 'Sass'],
            ['name' => 'React'],
            ['name' => 'NodeJS'],
            ['name' => 'Java'],
            ['name' => 'Gulp'],
            ['name' => 'GitHub'],
            ['name' => 'Figma'],
            ['name' => 'MySQL'],
        ]);
    }
}
