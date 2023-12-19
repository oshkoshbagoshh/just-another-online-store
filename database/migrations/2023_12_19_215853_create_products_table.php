<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations
     *
     * @return void
     *
     */


    public function up()

    {
        Schema::create('products', function(Blueprint $table) { // Added missing closing parenthesis after $table
            $table->id();
            $table->string('name');
            $table->text('description'); // Fixed typo: changed $table-text to $table->text
            $table->integer('price');
            $table->timestamps();

        });
    }

/**
 *
 * @return void
 */

 public function down ()
 {
    Schema::dropIfExists('products');
 }

};

// Path: database/migrations/2023_12_19_215853_create_products_table.php
