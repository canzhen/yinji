<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable
 * Author Zhou Canzhen
 */
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
            $table->string('password');
			$table->string('privilege');
            $table->string('email')->nullable();
            $table->char('phone_number',11)->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            array(
                array(
                    'name' => 'zcz',
                    'password' => Hash::make('123'),
                    'privilege' => 'admin',
                    'email' => 'xdzcz@outlook.com',
                    'phone_number' => '13269338368'
                ),
                array(
                    'name' => 'jp',
                    'password' => Hash::make('123'),
                    'privilege' => 'user',
                    'email' => 'jp@163.com',
                    'phone_number' => '18904920481'
                ),
                array(
                    'name' => 'scx',
                    'password' => Hash::make('123'),
                    'privilege' => 'user',
                    'email' => 'scx@163.com',
                    'phone_number' => '13234345920'
                ),
                array(
                    'name' => 'yhc',
                    'password' => Hash::make('123'),
                    'privilege' => 'user',
                    'email' => 'yhc95@163.com',
                    'phone_number' => '13295029042'
                ),
                array(
                    'name' => 'gyf',
                    'password' => Hash::make('123'),
                    'privilege' => 'user',
                    'email' => 'gyf@163.com',
                    'phone_number' => '18930957203'
                ),
                array(
                    'name' => 'hxt',
                    'password' => Hash::make('123'),
                    'privilege' => 'user',
                    'email' => 'hxt@126.com',
                    'phone_number' => '13258205819'
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
