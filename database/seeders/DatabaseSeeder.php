<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CategoryPost;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        CategoryPost::factory(10)->create();Post::factory(10)->create();
        Comment::factory(10)->create();
        Category::factory(10)->create();
        CategoryPost::factory(10)->create();
        // User::factory(10)->create();
    }
}
