<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->text('description')->nullable();
            $table->text('notes')->nullable();
            $table->string('state')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->date('purchase_date')->nullable();
            $table->unsignedBigInteger('equipment_id');
            $table->foreign('equipment_id')->references('id')->on('equipment');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
