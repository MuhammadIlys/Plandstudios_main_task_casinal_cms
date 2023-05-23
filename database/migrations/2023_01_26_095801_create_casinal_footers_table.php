<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasinalFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casinal_footers', function (Blueprint $table) {
            $table->id();
            $table->string('contact_icon');
            $table->string('contact');
            $table->string('email_icon');
            $table->string('email');
            $table->string('footer_information');
            $table->string('footer_logo');
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
        Schema::dropIfExists('casinal_footers');
    }
}
