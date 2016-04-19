<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
/**
 * Class CreateAlbumsTable
 * Author Zhou Canzhen on 2016/04/12
 */
class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('saving_path');
            $table->string('name');
            $table->unsignedInteger('category');
            $table->string('description')->nullable();
            $table->string('motto')->nullable();
            $table->string('author_name')->nullable();
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('albums_category')->onDelete('cascade');
        });

        DB::table('albums')->insert(
            array(
                array(
                    'user_id' => '1',
                    'saving_path' => '',
                    'name' => '我的减肥日记',
                    'category' => '1',
                    'description' => '我要瘦成一道闪电！',
                    'motto'=> '闪电最美',
                    'author_name'=>'传真大人'
                )
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
        Schema::drop('albums');
    }
}
