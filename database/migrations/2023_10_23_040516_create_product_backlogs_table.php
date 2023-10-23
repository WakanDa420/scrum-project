<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_backlogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre_productbacklog');
            $table->array('tarea'); 
            $table->foreignId('productbacklog_id')->references('id')->on('productbacklog');
            $table->timeslaps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_backlogs');
    }
};
