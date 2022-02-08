<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('travels', function (Blueprint $table) {
      $table->id();
      $table->string('name', 50);
      $table->string('destination', 70);
      $table->unsignedSmallInteger('duration');//(days)
      $table->string('season', 8);
      $table->boolean('flight');
      $table->unsignedInteger('price_adults');
      $table->unsignedInteger('price_children');
      //
      $table->timestamps('');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('travels');
  }
}
