<?php

namespace Database\Seeders;

use App\Models\{Category, User, Post};
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // seed some post
        foreach (range(1, 8) as $i) {
            $post = Post::factory()->create([
                'user_id' => 1,
                'image' => 'img0' . $i . '.jpg',
                'featured' => $i<4 ? true : false ,
            ]);
            $category = Category::factory()->create();

            DB::table('category_post')->insert([
                'post_id' => $post->id,
                'category_id' => $category->id
            ]);

        }
    }

}
