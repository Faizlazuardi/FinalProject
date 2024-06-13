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
        // Creating users table with UUID as the primary key
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('user_id')->primary(); // Using UUID as primary key
            $table->string('first_name'); // First Name
            $table->string('last_name');  // Last Name
            $table->string('email')->unique(); // Email
            $table->string('password'); // Password
            $table->string('role'); // Role
            $table->integer('money'); // Money
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

