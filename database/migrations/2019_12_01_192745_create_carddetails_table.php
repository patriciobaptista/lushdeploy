<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('carddetails', function (Blueprint $table) {
           $table->increments('id');
           $table->string('number')->nullable();
           $table->string('bank')->nullable();
           $table->string('owner')->nullable();
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
     Schema::table("carddetails",function(Blueprint $table) {
       $table->dropForeign('carddetails_id_user_foreign');
     });
       Schema::dropIfExists('carddetails');
   }
}
