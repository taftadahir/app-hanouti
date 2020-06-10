<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Audible',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Video',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Software',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Hardware',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Computer science',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'High-Tech & Gadget',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Musical instrument',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Electronic',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Stationery',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Scripture',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Game & Toy',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Clothing',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Beauty',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Hair',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'crockery and cutlery',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Kitchen',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Home appliance',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Home',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Cleaning product',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Toiletry',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Desktop',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Computer component',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Furnishing',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Gardening & field',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Makeup',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Bag',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Jewelry',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Sport',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Transport',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Automobile',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Urban sliding',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Garage',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Grocery',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Food',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Photgraphy',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name'=>'Device',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
