<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('imagesproduct', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('product_id')->unsigned();
          $table->foreign('product_id')->references('id')->on('products');
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
    Schema::table("imagesproduct",function(Blueprint $table) {
      $table->dropForeign('imagesproduct_product_id_foreign');
    });
      Schema::dropIfExists('imagesproduct');
  }
}
