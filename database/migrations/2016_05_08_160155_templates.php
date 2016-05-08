<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Templates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->increments('id');//模板号
            $table->string('template_name');//模板名
            $table->string('author_name');//制作模板的作者名
            $table->string('saving_path');//模板存储的路径
            $table->string('description')->nullable();//模板介绍
            $table->timestamps();
        });

        Schema::table('templates', function (Blueprint $table) {
            $table->foreign('author_name')->references('name')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('templates');
    }
}
