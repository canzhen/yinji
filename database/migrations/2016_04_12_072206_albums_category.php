<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * Class CreateAlbumsTable
 * Author Zhou Canzhen on 2016/04/15
 */
class AlbumsCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });

        DB::table('albums_category')->insert(
            array(
                array(
                    'name' => '恋爱'
                ),array(
                    'name' => '健身'
                ),array(
                    'name' => '减肥'
                ),array(
                    'name' => '亲子'
                ),array(
                    'name' => '一家人'
                ),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('albums_category');
    }
}
