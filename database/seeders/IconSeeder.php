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
            ['name' => 'HTML', 'icon_path' => 'img/iconos/html.png'],
            ['name' => 'CSS', 'icon_path' => 'img/iconos/css.png'],
            ['name' => 'JavaScript', 'icon_path' => 'img/iconos/javascript.png'],
            ['name' => 'PHP', 'icon_path' => 'img/iconos/php.png'],
            ['name' => 'Laravel', 'icon_path' => 'img/iconos/laravel.png'],
            ['name' => 'Composer', 'icon_path' => 'img/iconos/composer.png'],
            ['name' => 'Tailwind', 'icon_path' => 'img/iconos/tailwind.png'],
            ['name' => 'StyledComponents', 'icon_path' => 'img/iconos/styled-components.png'],
            ['name' => 'Sass', 'icon_path' => 'img/iconos/sass.png'],
            ['name' => 'React', 'icon_path' => 'img/iconos/react.png'],
            ['name' => 'NodeJS', 'icon_path' => 'img/iconos/nodejs.png'],
            ['name' => 'Java', 'icon_path' => 'img/iconos/java.png'],
            ['name' => 'Gulp', 'icon_path' => 'img/iconos/gulp.png'],
            ['name' => 'GitHub', 'icon_path' => 'img/iconos/githubNombre.png'],
            ['name' => 'Figma', 'icon_path' => 'img/iconos/figma.png'],
            ['name' => 'MySQL', 'icon_path' => 'img/iconos/mysql.png'],
        ]);
    }
}
