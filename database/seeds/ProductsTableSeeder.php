<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<30;$i++)
          DB::table('products')->insert([
            'name' => 'sptest',
            'slug' => 'sp-test',
            'content' => 'aaaaaaaaaaaaaaaaaaaaa',
            'origin_price' => '20000',
            'sale_price' => '10000',
            'discount_percent' => '50',
            'user_id' => '1',
            'category_id' => '2',
            'status' => '1'


        ]);
    }
}