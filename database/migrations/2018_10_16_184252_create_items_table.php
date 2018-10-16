<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('items', function(Blueprint $table) {
            $table->increments('id');
            // $table->integer('dish_id')->unsigned()->nullable();
            // $table->foreign('dish_id')->references('id')->on('pratos');
            $table->integer('payment_id')->unsigned()->nullable();
            $table->foreign('payment_id')->references('id')->on('payments');			
            $table->integer('qtd');
            $table->integer('value');			
			$table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');        
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
		Schema::drop('items');
	}

}
