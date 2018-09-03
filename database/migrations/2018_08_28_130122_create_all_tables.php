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
        
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('subsections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('accounts_subsections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('account_id');
            $table->integer('subsection_id');            
            $table->timestamps();
        });
        Schema::create('forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');          
            $table->timestamps();
        });
        Schema::create('subsections_forms', function (Blueprint $table) {
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
