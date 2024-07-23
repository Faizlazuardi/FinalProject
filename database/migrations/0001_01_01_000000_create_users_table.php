<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Using UUID as primary key
            $table->string('firstName'); // First Name
            $table->string('lastName');  // Last Name
            $table->string('email')->unique(); // Email
            $table->string('password'); // Password
            $table->string('role'); // Role
            $table->integer('money')->default(0); // Money
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}

