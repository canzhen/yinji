<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
			$table->string('privilege');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                array(
                    'name' => 'zcz',
                    'privilege' => 'admin',
                    'email' => 'xdzcz@outlook.com',
                    'password' => Hash::make('123')
                ),
                array(
                    'name' => 'jp',
                    'privilege' => 'user',
                    'email' => 'jp@163.com',
                    'password' => Hash::make('123')
                ),
                array(
                    'name' => 'scx',
                    'privilege' => 'user',
                    'email' => 'scx@163.com',
                    'password' => Hash::make('123')
                ),
                array(
                    'name' => 'yhc',
                    'privilege' => 'user',
                    'email' => 'yhc95@163.com',
                    'password' => Hash::make('123')
                ),
                array(
                    'name' => 'gyf',
                    'privilege' => 'user',
                    'email' => 'gyf@163.com',
                    'password' => Hash::make('123')
                ),
                array(
                    'name' => 'hxt',
                    'privilege' => 'user',
                    'email' => 'hxt@126.com',
                    'password' => Hash::make('123')
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
        Schema::drop('users');
    }
}
