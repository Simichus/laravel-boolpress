<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['HTML', 'CSS', 'JS', 'PHP', 'VueJs', 'Laravel'];
        foreach ($names as $name) {
            $category = new Category();
            $category->name = $name;
            $category->save();
        }
    }
}
