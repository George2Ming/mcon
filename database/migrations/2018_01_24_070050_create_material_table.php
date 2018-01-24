<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('material', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',32)->notNull()->comment('材料名称');
            $table->string('description',32)->notNull()->comment('材料描述');
            $table->tinyInteger('price')->notNull()->comment('材料单价');
            $table->tinyInteger('stock')->notNull()->comment('材料库存');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('material');
    }
}
