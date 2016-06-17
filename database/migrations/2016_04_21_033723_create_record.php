<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('record', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('albumId');
            $table->string('autherName');
			$table->text('description');
			$table->string('picPath');
			$table->dateTime('showTime');
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
        Schema::drop('record');
    }
}
