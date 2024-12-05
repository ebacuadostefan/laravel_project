<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Support\FacadesDB;

class CategoriesTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['categories_name' => 'Snacks'],
            ['categories_name' => 'Soft Drinks'],
            ['categories_name' => 'Noodles'],
        ];

        DB::table('categories')->insert($categories);
    }
}
