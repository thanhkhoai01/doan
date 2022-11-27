<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        Product::factory()->count(5)->state(new Sequence(
            [
                'Name'=>'Beef',
                'Avatar'=>'product-1.jpg'
            ],
            [
                'Name'=>'Pork thigh meat',
                'Avatar'=>'product-32.jpg'
            ],
            [
                'Name'=>'Salmon',
                'Avatar'=>'product-19.jpeg'
            ],
            [
                'Name'=>'Pompano',
                'Avatar'=>'product-20.jpeg'
            ],
            [
                'Name'=>'Tuna',
                'Avatar'=>'product-21.jpeg'
            ],

        ))->create([
            'CategoryId'=>1
        ]);
        Product::factory()->count(9)->state(new Sequence(
            [
                'Name'=>'Bananas',
                'Avatar'=>'product-2.jpg'
            ],
            [
                'Name'=>'Guava fruit',
                'Avatar'=>'product-3.jpg'
            ],
            [
                'Name'=>'Grapes',
                'Avatar'=>'product-3.jpg'
            ],
            [
                'Name'=>'Mangoes',
                'Avatar'=>'product-6.jpg'
            ],
            [
                'Name'=>'Watermelon',
                'Avatar'=>'product-7.jpg'
            ],
            [
                'Name'=>'Apple',
                'Avatar'=>'product-8.jpg'
            ],
            [
                'Name'=>'carrot',
                'Avatar'=>'product-13.jpg'
            ],
            [
                'Name'=>'Broccoli',
                'Avatar'=>'product-14.jpeg'
            ],
            [
                'Name'=>'Scallion',
                'Avatar'=>'product-27.jpeg'
            ],
        ))->create([
            'CategoryId'=>2
        ]);
        Product::factory()->count(7)->state(new Sequence(
            [
                'Name'=>'Grape juice',
                'Avatar'=>'product-9.jpg'
            ],
            [
                'Name'=>'Orange juice',
                'Avatar'=>'product-11.jpg'
            ],
            [
                'Name'=>'Combo1',
                'Avatar'=>'product-12.jpg'
            ],
            [
                'Name'=>'Combo2',
                'Avatar'=>'product-15.jpeg'
            ],
            [
                'Name'=>'Combo3',
                'Avatar'=>'product-16.jpeg'
            ],
            [
                'Name'=>'Combo4',
                'Avatar'=>'product-17.jpeg'
            ],
            [
                'Name'=>'Combo5',
                'Avatar'=>'product-17.jpeg'
            ],
        ))->create([
            'CategoryId'=>3
        ]);
        Product::factory()->count(3)->state(new Sequence(
            [
                'Name'=>'Hamburgers',
                'Avatar'=>'product-5.jpg'
            ],
            [
                'Name'=>'Fried chicken',
                'Avatar'=>'product-10.jpg'
            ],
            [
                'Name'=>'Cereal',
                'Avatar'=>'product-30.jpeg'
            ],
            [
                'Name'=>'Oatmeal',
                'Avatar'=>'product-31.jpeg'
            ],

        ))->create([
            'CategoryId'=>4
        ]);
        Product::factory()->count(3)->state(new Sequence(
            [
                'Name'=>'Salmon',
                'Avatar'=>'product-19.jpeg'
            ],
            [
                'Name'=>'Pompano',
                'Avatar'=>'product-20.jpeg'
            ],
            [
                'Name'=>'Tuna',
                'Avatar'=>'product-21.jpeg'
            ],
        ))->create([
            'CategoryId'=>5
        ]);
        Product::factory()->count(3)->state(new Sequence(
            [
                'Name'=>'Fresh Butter',
                'Avatar'=>'product-22.jpeg'
            ],
            [
                'Name'=>'Canned Butter',
                'Avatar'=>'product-23.jpeg'
            ],
            [
                'Name'=>'Eggs',
                'Avatar'=>'product-25.jpeg'
            ],
            [
                'Name'=>'Industrial Eggs',
                'Avatar'=>'product-24.jpeg'
            ],
        ))->create([
            'CategoryId'=>6
        ]);
        Product::factory()->count(3)->state(new Sequence(
            [
                'Name'=>'Scallion',
                'Avatar'=>'product-27.jpeg'
            ],
            [
                'Name'=>'Small Onions',
                'Avatar'=>'product-28.jpeg'
            ],
            [
                'Name'=>'Onion',
                'Avatar'=>'product-29.jpeg'
            ],

        ))->create([
            'CategoryId'=>7
        ]);
        Product::factory()->count(6)->state(new Sequence(
            [
                'Name'=>'Bananas',
                'Avatar'=>'product-2.jpg'
            ],
            [
                'Name'=>'Guava fruit',
                'Avatar'=>'product-3.jpg'
            ],
            [
                'Name'=>'Grapes',
                'Avatar'=>'product-3.jpg'
            ],
            [
                'Name'=>'Mangoes',
                'Avatar'=>'product-6.jpg'
            ],
            [
                'Name'=>'Watermelon',
                'Avatar'=>'product-7.jpg'
            ],
            [
                'Name'=>'Apple',
                'Avatar'=>'product-8.jpg'
            ],

        ))->create([
            'CategoryId'=>8
        ]);
        Product::factory()->count(1)->state(new Sequence(
            [
                'Name'=>'Oatmeal',
                'Avatar'=>'product-31.jpeg'
            ],
        ))->create([
            'CategoryId'=>9
        ]);
    }
}
