<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',128)->unique();
            $table->string('slug',128)->unique();
            $table->longtext('description');
            $table->tinyInteger('in_stock')->default(1);
            $table->tinyInteger('active')->default(1);
            $table->decimal('purchase_price',8,2);
            $table->decimal('sale_price',8,2)->nullable();
            $table->unsignedInteger('cat_id');
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
        Schema::dropIfExists('products');
    }
}
