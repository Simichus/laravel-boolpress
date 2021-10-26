<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagNames = ['Frontend', 'Backend', 'UI/UX', 'Database'];
        foreach ($tagNames as $tagName) {
            $tag = new Tag();
            $tag->name = $tagName;

            $tag->save();
        }
    }
}
