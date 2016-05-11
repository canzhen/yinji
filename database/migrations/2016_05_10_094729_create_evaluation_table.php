<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table->increments('id');//评价编码
            $table->integer('order_id');//订单号
            $table->integer('parent_eva_id');//父级评价编码
            $table->string('user_name');//评价用户名
            $table->string('reply_user_name')->nullable;//评价回复用户名
            $table->string('content');//评价内容
            $table->timestamps();
        });

        DB::table('evaluation')->insert(
            array(
                array(
                    'order_id' => '2',
                    'parent_eva_id' => '-1',
                    'user_name'=> 'jp',
                    'reply_user_name' =>'',
                    'content' => '感觉还可以',
                )
            )
        );
        DB::table('evaluation')->insert(
            array(
                array(
                    'order_id' => '2',
                    'parent_eva_id' => '-1',
                    'user_name'=> 'gyf',
                    'reply_user_name' =>'',
                    'content' => '不怎么样',
                )
            )
        );
        DB::table('evaluation')->insert(
            array(
                array(
                    'order_id' => '2',
                    'parent_eva_id' => '-1',
                    'user_name'=> 'zcz',
                    'reply_user_name' =>'',
                    'content' => '不好看啊',
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
        Schema::drop('evaluation');
    }
}
