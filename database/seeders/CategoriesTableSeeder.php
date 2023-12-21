<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food_categories = [
            '寿司','焼肉','パスタ','中華','洋食'
        ];

        foreach ($food_categories as $food_category) {
                Category::create([
                    'name' => $food_category,
                ]);
            }
        }
    }