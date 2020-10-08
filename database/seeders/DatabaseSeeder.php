<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< dbnew
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CategoryPost;
use App\models\Student;
use App\models\Subject;
>>>>>>> master

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< dbnew
        Post::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        CategoryPost::factory(10)->create();Post::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        CategoryPost::factory(10)->create();
        Student::factory(10)->create();
        Subject::factory(20)->create();

    // );

    	
>>>>>>> master
        // User::factory(10)->create();
    }
}
