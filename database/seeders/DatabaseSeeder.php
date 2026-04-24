<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Akun Admin Utama [cite: 334]
        User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        // 2. Insert Kategori Event (Minimal 3 Kategori sesuai tugas) 
        $catIT = Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $catEnt = Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        $catWorkshop = Category::create([
            'name' => 'Workshop & Design',
            'slug' => 'workshop-design',
        ]);

        // 3. Insert Sampel Events (Minimal 6 Event sesuai tugas) 
        
        // Event Kategori Entertainment
        Event::create([
            'category_id' => $catEnt->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik jazz yang merdu.',
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        // Event Kategori IT
        Event::create([
            'category_id' => $catIT->id,
            'title' => 'Hackaton - Unleash Your Inner Developer',
            'description' => 'Ayo asah skill coding kamu dan ciptakan solusi inovatif!',
            'date' => '2026-05-05 10:00:00',
            'location' => 'Inkubator Amikom',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-2.png',
        ]);

        Event::create([
            'category_id' => $catIT->id,
            'title' => 'AI & FUTURE TECH SUMMIT 2026',
            'description' => 'Jelajahi tren terkini dalam kecerdasan buatan bersama para ahli.',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Cinema Unit 6',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-3.png',
        ]);

        // Tambahan 3 Event Baru untuk memenuhi syarat tugas (Total 6 Event) 
        Event::create([
            'category_id' => $catWorkshop->id,
            'title' => 'UI/UX Masterclass',
            'description' => 'Belajar desain antarmuka modern dari nol hingga mahir.',
            'date' => '2026-06-12 09:00:00',
            'location' => 'Lab Komputer 1',
            'price' => 75000,
            'stock' => 40,
            'poster_path' => 'posters/event-4.png',
        ]);

        Event::create([
            'category_id' => $catEnt->id,
            'title' => 'E-Sport U-Champ',
            'description' => 'Turnamen bergengsi untuk para gamers Amikom.',
            'date' => '2026-07-20 10:00:00',
            'location' => 'Basement Gedung 4',
            'price' => 100000,
            'stock' => 16,
            'poster_path' => 'posters/event-5.png',
        ]);

        Event::create([
            'category_id' => $catWorkshop->id,
            'title' => 'Digital Branding Workshop',
            'description' => 'Strategi membangun brand di era digital untuk pemula.',
            'date' => '2026-08-15 13:00:00',
            'location' => 'Aula BSC',
            'price' => 45000,
            'stock' => 60,
            'poster_path' => 'posters/event-6.png',
        ]);
    }
}