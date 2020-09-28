<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Student;
use App\models\Subject;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //   $this->call([
    //     StudentsTableSeeder::class,
    //     SubjectsTableSeeder::class,
    Student::factory(10)->create();
    Subject::factory(20)->create();

    // );

    	
        // User::factory(10)->create();
    }
}
