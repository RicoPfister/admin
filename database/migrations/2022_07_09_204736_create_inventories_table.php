<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->enum('media', ['Administration', 'Place', 'Furniture', 'PassivDevice', 'ActiveDevice', 'Consumable', 'Book', 'Music', 'Software', 'Video', 'Others']);
            $table->string('keywords')->nullable();
            $table->string('producer')->nullable();
            $table->date('purchase_date');
            $table->integer('price');
            $table->string('location_a');
            $table->string('location_b')->nullable();
            $table->string('discard_date')->nullable();
            $table->string('voucher')->nullable();
            $table->string('rent')->nullable();
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
        Schema::dropIfExists('inventories');
    }
};
