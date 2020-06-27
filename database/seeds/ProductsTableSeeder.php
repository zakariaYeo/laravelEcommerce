<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();
        for ($i=0; $i < 40; $i++) {
            Product::create([
                'title' => $faker->sentence(5),
                'slug' => $faker->slug,
                'subtitle' => $faker->sentence(7),
                'description' => $faker->text,
                'price' => $faker->numberBetween(10, 400) * 100,
                'image' => 'https://via.placeholder.com/200x250'
            ]);
        }
    }
}
