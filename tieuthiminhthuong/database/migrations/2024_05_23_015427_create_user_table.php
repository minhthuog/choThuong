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
        Schema::create('ttmt_user', function (Blueprint $table) {
            $table->id(); // id (Primary Key, UNSIGNED, AUTO INCREMENT)
            $table->string('name', 255); // name (varchar 255, Not Null)
            $table->string('email', 255); // email (varchar 255, Not Null)
            $table->string('phone', 255); // phone (varchar 255, Not Null)
            $table->string('username', 255); // username (varchar 255, Not Null)
            $table->string('password', 255); // password (varchar 255, Not Null)
            $table->string('address', 255); // address (varchar 255, Not Null)
            $table->string('image', 255); // image (varchar 255, Not Null)
            $table->string('roles', 50); // roles (varchar 50, Not Null, 'admin' or 'customer')
            $table->dateTime('created_at'); // created_at (datetime, Not Null)
            $table->unsignedInteger('created_by'); // created_by (int, UNSIGNED, Not Null)
            $table->dateTime('updated_at')->nullable(); // updated_at (datetime, Null)
            $table->unsignedInteger('updated_by')->nullable(); // updated_by (int, UNSIGNED, Null)
            $table->tinyInteger('status')->unsigned()->default(2); // status (tinyint 2, UNSIGNED, Default 2)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttmt_user');
    }
};
