<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<=2; $i++){
            DB::table('product')->insert([
                'title' => $i."_rko".str::random(10), 
                'product_code' => $i."_".str::random(10), 
                'description'  => bcrypt('secret')."_".$i,
            ]);        
        }
    }
}
