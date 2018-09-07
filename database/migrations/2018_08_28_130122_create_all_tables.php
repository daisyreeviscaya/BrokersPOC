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
            $table->decimal('level', 4, 2); //gagamitin sa computation 
            $table->timestamps();
        });
        Schema::create('subsections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('level', 4, 2); //gagamitin sa computation 
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
            $table->decimal('level', 4, 2); //gagamitin sa computation      
            $table->timestamps();
        });
        Schema::create('subsections_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subsection_id');    
            $table->integer('form_id');        
            $table->timestamps();
        });
        Schema::create('computations', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('level', 4, 2); // to be used sa output
            $table->string('name');
            $table->integer('year');
            $table->timestamp();
        });
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('company_name');
            $table->string('ic_license_number');
            $table->string('tin');
            $table->string('company_address');
            $table->string('company_president');
        });
        Schema::create('form_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('level_under', 4, 2);
            $table->string('name');
            $table->decimal('balance', 11, 4);
            $table->string('bank_name');
            $table->string('account_number');
            $table->decimal('account_balance',11, 4);
            $table->decimal('currency', 11, 4);
            $table->decimal('balance_per_orig_currency', 11, 4);
            $table->decimal('exchange rate', 11, 4);
            $table->decimal('translated_balance', 11, 4);
            $table->string('particulars');
            $table->integer('certificate_number');
            $table->date('maturity_date');
            $table->decimal('principal', 11, 4);
            $table->decimal('interest', 8, 4);
            $table->string('name_of_assured');
            $table->string('policy_number');
            $table->date('inception_date');
            $table->date('date_collected');
            $table->string('status');//submitted or draft
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
