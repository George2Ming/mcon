<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->notNull()->comment('产品名称');
            $table->tinyInteger('designer_id')->notNull()->comment('设计师id');
            $table->tinyInteger('material1_id')->notNull()->comment('材料1的id');
            $table->tinyInteger('material2_id')->notNull()->comment('材料2的id');
            $table->string('customer',32)->notNull()->comment('客户名');
            $table->tinyInteger('prime_cost')->notNull()->comment('总成本');
            $table->string('description',32)->notNull()->comment('产品描述');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product');
    }
}
