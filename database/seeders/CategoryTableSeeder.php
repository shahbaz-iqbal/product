<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryRecord=[
            ['id'=>1,'name'=>'Youtube Subscription'],
            ['id'=>2,'name'=>'Youtube Views']
        ];
        Category::insert($categoryRecord);
    }
}
