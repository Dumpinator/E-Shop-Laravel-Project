<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->float('price')->nullable();
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL']);
            $table->enum('online', ['publish', 'unpublished']);
            $table->enum('state', ['solde', 'new']);
            $table->string('ref')->nullable();
            $table->bigInteger('stock')->nullable();
            $table->string('slug')->nullable();
            $table->integer('category_id');
            $table->integer('user_id');
            $table->string('image')->nullable();
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
