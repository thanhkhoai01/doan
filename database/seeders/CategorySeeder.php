<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(4)->state(new Sequence(
            ['Name'=>'Fresh Meat'],
            ['Name'=>'Vegetables'],
            ['Name'=>'Fruit & Nut Gifts'],
            ['Name'=>'Fast Food'],
        ))->create();
        Category::factory()->count(2)->state(new Sequence(
            ['Name'=>'Ocean Foods'],
            ['Name'=>'Butter & Eggs'],
        ))->create([
            'ParentId'=>1
        ]);
        Category::factory()->count(3)->state(new Sequence(
            ['Name'=>'Fresh Onions'],
            ['Name'=>'Fresh Berries'],
        ))->create([
            'ParentId'=>2
        ]);
        Category::factory()->count(2)->state(new Sequence(
            ['Name'=>'Oatmeal'],
        ))->create([
            'ParentId'=>4
        ]);
    }
}












