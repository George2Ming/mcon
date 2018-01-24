<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'name'=>'蒙娜丽莎',
                'designer_id'=>'102',
                'material1_id'=>1,
                'material1_num'=>1,
                'material2_id'=>5,
                'material2_num'=>1,
                'material3_id'=>6,
                'material3_num'=>1,
                'prime_cost'=>25
            ],
            [
                'name'=>'最后的晚餐',
                'designer_id'=>101,
                'material1_id'=>1,
                'material1_num'=>1,
                'material2_id'=>5,
                'material2_num'=>1,
                'material3_id'=>6,
                'material3_num'=>1,
                'prime_cost'=>25
            ],

        ]);
    }
}
