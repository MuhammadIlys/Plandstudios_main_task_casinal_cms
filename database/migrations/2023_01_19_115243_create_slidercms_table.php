<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidercmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slidercms', function (Blueprint $table) {
            $table->id();
            $table->string('slider_title');
            $table->string('slider_description');
            $table->string('slider_image');
            $table->string('slider_btn_one_text');
            $table->string('slider_btn_one_link');
            $table->string('slider_btn_two_text');
            $table->string('slider_btn_two_link');
            $table->string('slider_background_image');
            $table->string('slider_page_type');
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
        Schema::dropIfExists('slidercms');
    }
}
