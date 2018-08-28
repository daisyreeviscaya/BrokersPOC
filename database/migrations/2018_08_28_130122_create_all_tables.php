<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::dropIfExists('subsection_titles');
        Schema::dropIfExists('forms_attributes');
        Schema::dropIfExists('account_titles');
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('subsection', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('account_subsection', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
            $table->integer('subsection_id');            
            $table->timestamps();
        });
        Schema::create('form', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');          
            $table->timestamps();
        });
        Schema::create('subsection_form', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subsection_id');    
            $table->integer('form_id');        
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
        //
    }
}
