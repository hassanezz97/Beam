<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            'Artist',
            'Musician/Band',
            'Blogger',
            'Clothing',
            'Community',
            'Digital creator',
            'Education',
            'Health/Beauty',
            'Editor',
            'Writer',
            'Personal Blog',
            'Product/Service',
            'Gamer',
            'Restaurant',
            'Beauty, cosmetic & personal care',
            'Photographer',
            'Shopping & retail',
            'Video creator',
            'Content Creator',
            'Comedy',

        ];
        foreach ($categories as $category){
            Category::create(['name' => $category]);
        }

    }
}
