<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesignerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('designer', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('designer_id')->notNull()->comment('设计师id');
            $table->string('designer_name',18)->notNull()->comment('设计师名字');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designer');
    }
}
