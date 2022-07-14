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
            $table->id('inventory_id');
            $table->string('item');
            $table->enum('media', ['Book', 'Music', 'Software', 'Video']);
            $table->string('keywords');
            $table->string('producer');
            $table->date('purchase_date');
            $table->integer('price');
            $table->string('location_a');
            $table->string('location_b');
            $table->string('documents', 2048)->nullable();
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
