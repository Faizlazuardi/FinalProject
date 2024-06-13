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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->uuid('invoice_detail_id')->primary(); // Use UUID for primary key
            $table->foreignId('invoice_header_id'); // UUID for invoice header ID
            $table->foreignId('toy_id'); // UUID for toy ID
            $table->integer('quantity'); // integer for quantity
            $table->integer('subTotal'); // integer for sub-total
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
