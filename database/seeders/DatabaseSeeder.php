<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder ;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CourseSeeder::class,
            ClassroomSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class
        ]);
    }
}
