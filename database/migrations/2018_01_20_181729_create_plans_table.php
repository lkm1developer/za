<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
			$table->string('planid');
            $table->string('user_id');
            $table->string('currency');
			$table->string('upgrades')->nullable();
			$table->string('payment_method');
			$table->string('datacenter')->nullable();
			$table->string('vat_number')->nullable();
			$table->string('company_name')->nullable();
			$table->string('price_type');
			$table->string('is_business')->nullable();;
			$table->string('dedicated')->nullable();;		
			$table->string('vps')->nullable();;		
			$table->string('domain');		
			$table->integer('periods');			
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
        Schema::dropIfExists('plans');
    }
}
