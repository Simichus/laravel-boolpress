<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;
use App\Category;
use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::select('id')->pluck('id')->toArray();

        for ($i = 0; $i < 50; $i++) {
            $post = new Post();
            $post->category_id = Arr::random($categories);
            $post->title = $faker->text(50);
            $post->content = $faker->paragraph(2, true);
            $post->slug = Str::slug($post->title, '-');

            $post->save();
        }
    }
}
