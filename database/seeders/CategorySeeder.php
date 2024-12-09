<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             DB::table('categories')->insert([
                [
                    'id' => 1,
                    'name' => 'Gaming & Fun',
                    'slug'=> 'Gaming_Fun',
                    'image'=>'gaming.jpg',
                ],
                [
                    'id' => 2,
                   'name' => 'Printers & Ink',
                   'slug' => 'Printers_Ink',
                   'image' => 'printers.webp',
                ],
                [
                    'id' => 3,
                    'name' => 'CC TV & Audios',
                    'slug'=> 'CC_TV_Audios',
                    'image' => 'cctv.webp',
                ],
                [
                    'id' => 4,
                    'name' => 'Home Equipment',
                    'slug' => 'Home_Equipment',
                    'image' => 'homeequipment.webp',
                 ],
                 [
                    'id' => 5,
                    'name' => 'TV & Cameras',
                    'slug' =>  'TV_Cameras',
                    'image' => 'tv.webp',
                 ],
                 [
                    'id' => 6,
                    'name' => 'Laptops & Computers',
                    'slug' => 'Laptops_Computers',
                    'image' => 'laptop.webp',
                 ],
            ]);    
    }
}
