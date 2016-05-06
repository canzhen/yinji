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
            $table->string('user_name');
            $table->string('saving_path');
            $table->string('name');
            $table->unsignedInteger('category');
            $table->string('description')->nullable();
            $table->string('motto')->nullable();
            $table->string('author_name')->nullable();
            $table->timestamps();
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('user_name')->references('name')->on('users')->onDelete('cascade');
            $table->foreign('category')->references('id')->on('albums_category')->onDelete('cascade');
        });

        DB::table('albums')->insert(
            array(
                array(
                    'user_name' => 'zcz',
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
