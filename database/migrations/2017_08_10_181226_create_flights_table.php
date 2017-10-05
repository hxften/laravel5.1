<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::rename('flights' , 'newflights');
        //Schema::dropIfExists('flights');
        Schema::create('flights', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            // 检查表
            if(Schema::hasTable('flights')){
                return 'a';
            }

            // 检查列
            if(Schema::hasTable('flights' , 'name')){
                return 'b';
            }

            $table->increments('id');
            $table->string('name');
            $table->string('airline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flights');
    }
}
