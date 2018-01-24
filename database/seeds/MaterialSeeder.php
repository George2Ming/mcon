<?php

use Illuminate\Database\Seeder;
use App\model\Material;
class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('material')->insert([
            [
                'name'=>'钾',
                'description'=>'第一位元素',
                'price'=>12,
                'stock'=>2
            ],
            [
                'name'=>'钙',
                'description'=>'第二位元素',
                'price'=>1,
                'stock'=>5
            ]
        ]);
    }
}
