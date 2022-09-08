<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::factory(5)->create();

        /** Create 10 user and make this operation for each user */
        User::factory(10)->create()->each(function ($user) use ($categories) {
            /** Create between 1-3 post for each user and get foreign keys */
            Post::factory(rand(1, 3))->create([
                'user_id' => $user->id,
                'category_id' => ($categories->random(1)->first())->id,
            ]);
        });
    }
}
