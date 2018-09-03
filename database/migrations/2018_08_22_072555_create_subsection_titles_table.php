<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubsectionTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::dropIfExists('subsection_titles');
        // Schema::create('subsection_titles', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('account_title_id')->unsigned();
        //     $table->string('name');
        //     $table->timestamps();
        // });

        // Schema::table('subsection_titles', function($table) {
        //     $table->foreign('account_title_id')->references('id')->on('account_titles');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subsection_titles');
    }
}
