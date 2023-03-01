<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id, title, slug, created_at, updated_at

        /*Category::create([
            'title' => Str::slug($this->title)
        ]);*/

        Category::factory(10)->create();
    }
}
