<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasinalNavbarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casinal_navbars', function (Blueprint $table) {
            $table->id();
            $table->string('casinal_navbar_logo');
            $table->string('casinal_navbar_fb_icon');
            $table->string('casinal_navbar_fb_link');
            $table->string('casinal_navbar_insta_icon');
            $table->string('casinal_navbar_insta_link');
            $table->string('casinal_navbar_twitter_icon');
            $table->string('casinal_navbar_twitter_link');
            $table->string('casinal_navbar_linkedin_icon');
            $table->string('casinal_navbar_linkedin_link');
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
        Schema::dropIfExists('casinal_navbars');
    }
}
