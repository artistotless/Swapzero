<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCryptosTable extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('cryptos', function (Blueprint $table) {
             $table->increments('id');
           $table->tinyInteger('user_id1')->unsigned();
           $table->tinyInteger('user_id2')->unsigned();            
           $table->string('currency')->nullable();           
           $table->tinyInteger('sum')->unsigned();
           $table->string('status')->nullable(); 
           
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
      Schema::dropIfExists('cryptos');
    }
}
