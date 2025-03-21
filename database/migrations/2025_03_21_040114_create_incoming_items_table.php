<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('incoming_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->date('date_of_entry');
            $table->integer('quantity_entered');
            $table->string('office_code')->nullable();;
            $table->timestamps();
    
            $table->foreign('item_code')->references('item_code')->on('items')->onDelete('cascade');
            $table->foreign('office_code')->references('office_code')->on('offices')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incoming_items');
    }
};
