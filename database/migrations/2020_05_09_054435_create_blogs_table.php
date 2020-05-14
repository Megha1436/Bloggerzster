<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('topic_name');
            $table->string('title');
            $table->string('sub_title');
            $table->mediumText('blog1');
            $table->mediumText('blog2');
            $table->mediumText('blog3');
            $table->mediumText('blog4');
            $table->mediumText('blog5');
            $table->mediumText('blog6');
            $table->binary('image1');
            $table->string('image_info1');
            $table->binary('image2');
            $table->string('image_info2');
            $table->binary('image3');
            $table->string('image_info3');
            $table->binary('image4');
            $table->string('image_info4');
            $table->string('url');
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
        Schema::drop('blogs');
    }
}
