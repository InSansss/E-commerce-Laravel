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

        \App\Models\Category::create([
            'name' => 'Pakaian',
            'icon' => 'fa-shirt',
            'slug' => 'fashion'
        ]);

        \App\Models\Category::create([
            'name' => 'Game',
            'icon' => 'fa-gamepad',
            'slug' => 'game'
        ]);

        \App\Models\Category::create([
            'name' => 'Aksesoris',
            'icon' => 'fa-keyboard',
            'slug' => 'aksesoris'
        ]);

        \App\Models\Category::create([
            'name' => 'Source Code',
            'icon' => 'fa-code',
            'slug' => 'source-code'
        ]);

        \App\Models\Category::create([
            'name' => 'Audio Kamera',
            'icon' => 'fa-camera',
            'slug' => 'audio-kamera'
        ]);

        \App\Models\Category::create([
            'name' => 'Komputer & Laptop',
            'icon' => 'fa-laptop',
            'slug' => 'komputer-laptop'
        ]);

        \App\Models\Category::create([
            'name' => 'Kesehatan',
            'icon' => 'fa-stethoscope',
            'slug' => 'kesehatan'
        ]);

        \App\Models\Category::create([
            'name' => 'Alat Kantor',
            'icon' => 'fa-briefcase',
            'slug' => 'alat-kantor'
        ]);
    }
}
