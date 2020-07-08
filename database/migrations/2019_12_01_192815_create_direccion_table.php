<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('direccion', function (Blueprint $table) {
           $table->increments('id');
           $table->string('street')->nullable();
           $table->string('apartment')->nullable();
           $table->string('postcode')->nullable();
           $table->integer('id_user')->unsigned();
           $table->foreign('id_user')->references('id')->on('users');
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
     Schema::table("direccion",function(Blueprint $table) {
       $table->dropForeign('direccion_id_user_foreign');
     });
       Schema::dropIfExists('direccion');
   }
}
