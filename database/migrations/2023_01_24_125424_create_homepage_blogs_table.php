<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepageBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homepage_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('blog_title');
            $table->string('blog_description');
            $table->string('blog_btn_text');
            $table->string('blog_btn_link');
            $table->string('blog_btn_image');
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
        Schema::dropIfExists('homepage_blogs');
    }
}
