<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('forms', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->json('form_attributes_id');
        //     $table->integer('subsection_title_id')->unsigned();
        //     $table->string('name');
        //     $table->timestamps();
        // });

        // Schema::table('forms', function($table){
        //     $table->foreign('subsection_title_id')->references('id')->on('subsection_titles');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
