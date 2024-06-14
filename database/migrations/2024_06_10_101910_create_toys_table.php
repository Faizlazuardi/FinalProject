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
        Schema::create('toys', function (Blueprint $table) {
            $table->uuid('toy_id')->primary(); // Use UUID for primary key
            $table->foreignId('category_id'); // Define category_id column
            $table->string('image'); // varchar for image URL/path
            $table->string('name'); // varchar for name
            $table->text('description'); // text for description
            $table->integer('stock'); // integer for stock
            $table->integer('price'); // integer for price
            $table->timestamps(); // created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toys');
    }
};
