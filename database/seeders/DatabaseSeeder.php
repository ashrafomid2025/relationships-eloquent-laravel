<?php

namespace Database\Seeders;

use App\Models\Classes;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * one -to -one users, teacher
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(100)->create();
        // Teacher::factory(10)->create();
        // Classes::factory(5)->create();
        // Student::factory(90)->create();
        // Subject::factory(5)->create();
         Grade::factory(90)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
