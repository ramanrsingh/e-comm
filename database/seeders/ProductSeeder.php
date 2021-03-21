<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Oppo Mobile',
            'price'=>'21000',
            'category'=>'Mobile', 
            'description'=>'a smart phone with 8gb RAM and many more',
            'gallery'=>"https://unsplash.com/photos/1bBCtUAUMFI"
        ],[
            'name'=>'Vivo Mobile',
            'price'=>'7000',
            'category'=>'Mobile', 
            'description'=>'a smart phone with 16gb RAM and many more',
            'gallery'=>"https://unsplash.com/photos/leqrylJNYUQ"
        ],[
            'name'=>'LG TV',
            'price'=>'200000',
            'category'=>'Tv', 
            'description'=>'a smart TV with 4gb RAM and many more',
            'gallery'=>"https://unsplash.com/photos/AzHPen-cymc"
        ],[
            'name'=>'Sony TV',
            'price'=>'2000000',
            'category'=>'Tv', 
            'description'=>'a smart TV with 40gb RAM and many more',
            'gallery'=>"https://unsplash.com/photos/3A0bs74T8zc"
        ],[
            'name'=>'LG Fridge',
            'price'=>'50000',
            'category'=>'Fridge', 
            'description'=>'a smart Fridge',
            'gallery'=>"https://unsplash.com/photos/zLsH8EcWVdc"
        ]
        
        ]);
    }
}
