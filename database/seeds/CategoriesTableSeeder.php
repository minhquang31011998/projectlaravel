<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
    		DB::table('categories')->insert([
    			'name' => 'Iphone',
    			'slug' => 'iphone',
    			'depth' => '1'
    		
    		]);
    		DB::table('categories')->insert([
    			'name' => 'Samsung',
    			'slug' => 'samsung',
    			'depth' => '1'
    		
    		]);
    		DB::table('categories')->insert([
    			'name' => 'Oppo',
    			'slug' => 'oppo',
    			'depth' => '1'
    		
    		]);
    		DB::table('categories')->insert([
    			'name' => 'Xiaomi',
    			'slug' => 'xiaomi',
    			'depth' => '1'
    		
    		]);
    }
}
