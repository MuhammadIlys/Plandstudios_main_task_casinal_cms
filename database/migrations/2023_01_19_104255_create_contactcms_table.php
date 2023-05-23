<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactcmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactcms', function (Blueprint $table) {
            $table->id();
            $table->string('consultingtitle');
            $table->string('consultingdescription');
            $table->string('consultingbtntext');
            $table->string('consultingbtnlink');
            $table->string('educationtitle');
            $table->string('educationbgimage');
            $table->string('educationrightimage');
            $table->string('pagetype');
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
        Schema::dropIfExists('contactcms');
    }
}
