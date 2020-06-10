<?php

use App\User;
use App\Product;
use App\Category;
use Cocur\Slugify\Slugify;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {

            $product = new Product;
            $slugify = new Slugify();

            $product->name = $faker->randomElement($array = array ('robe','manteau','veste','jupe','pantalon'));
            $product->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = false);
            $product->price = $faker->randomFloat($nbMaxDecimals = 1, $min = 10, $max = 330);
            $product->size = $faker->randomElement($array = array ('XS','S','M','L','XL'));
            $product->state = $faker->randomElement($array = array ('solde','new'));
            $product->online = $faker->randomElement($array = array ('publish','unpublished'));
            $product->slug = $slugify->slugify($product->name);
            $product->stock = $faker->randomDigit();
            
            $product->category_id = Category::all()->random(1)->first()->id;
            $product->user_id = User::all()->random(1)->first()->id;
            
            $url_image = Str::Random(40) . '.jpeg';
            $product->ref = $url_image;
            $product->save();
        }
    }
}
