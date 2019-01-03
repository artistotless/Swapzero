<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSwapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('swaps', function (Blueprint $table) {
             $table->increments('id');
           $table->tinyInteger('user_id')->unsigned();           
           $table->string('currency1')->nullable();           
           $table->string('currency2')->nullable(); 
           $table->tinyInteger('sum')->unsigned();
           $table->string('status')->nullable(); 
             $table->string('curr1details')->nullable(); 
             $table->string('curr2details')->nullable(); 
           
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
      Schema::dropIfExists('swaps');
    }
}
