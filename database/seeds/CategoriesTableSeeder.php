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
        Category::create([
            'category_code'=> 'sport',
            'category_name'=>'Спорт',
        ]);
        Category::create([
            'category_code'=> 'it',
            'category_name'=>'IT технологии',
        ]);
        Category::create([
            'category_code'=> 'world',
            'category_name'=>'Мир',
        ]);
        Category::create([
            'category_code'=> 'food',
            'category_name'=>'Еда',
        ]);
    }
}
