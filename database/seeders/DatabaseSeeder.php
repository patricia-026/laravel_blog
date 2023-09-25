<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Category::factory(5)->create();

        for ($x = 0; $x < 5; $x++) {
            Post::factory(5)->create([
                'user_id' => $user->id,
                'category_id' => $x+1
            ]);
        }

    }
}
