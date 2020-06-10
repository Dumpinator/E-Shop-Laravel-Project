<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->icon = '<i class="fas fa-male"></i>';
        $category->name = 'Homme';
        $category->save();

        $category = new Category();
        $category->icon = '<i class="fas fa-female"></i>';
        $category->name = 'Femme';
        $category->save();
    }
}
