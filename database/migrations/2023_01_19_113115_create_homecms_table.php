<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomecmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homecms', function (Blueprint $table) {
            $table->id();
            $table->string('coursesectiontitle');
            $table->string('aboutsectiontitle');
            $table->string('aboutsectiondescription');
            $table->string('aboutsectioninnertitle');
            $table->string('aboutsectioninnerdescription');
            $table->string('aboutsectionimage');
            $table->string('blogsectiontitle');
            $table->string('blogsectiondescription');
            $table->string('testimonialsectiontitle');
            $table->string('consultingsectiontitle');
            $table->string('consultingsectiondescription');
            $table->string('consultingsectionbtntext');
            $table->string('consultingsectionbtnlink');
            $table->string('educationsectiontitle');
            $table->string('educationsectionimage');
            $table->string('educationsectionimageright');
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
        Schema::dropIfExists('homecms');
    }
}
