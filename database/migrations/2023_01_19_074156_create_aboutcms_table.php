<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutcmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutcms', function (Blueprint $table) {
            $table->id();
            $table->string('about_title');
            $table->string('about_description');
            $table->string('about_inner_title');
            $table->string('about_inner_description');
            $table->string('about_image');
            $table->string('page_type');
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
        Schema::dropIfExists('aboutcms');
    }
}
