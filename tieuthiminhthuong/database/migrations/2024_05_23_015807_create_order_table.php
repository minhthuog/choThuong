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
        Schema::create('ttmt_order', function (Blueprint $table) {
            $table->id(); // id (Primary Key, UNSIGNED, AUTO INCREMENT)
            $table->unsignedInteger('user_id'); // user_id (int, UNSIGNED, Not Null)
            $table->string('name', 255); // name (varchar 255, Not Null)
            $table->string('phone', 255); // phone (varchar 255, Not Null)
            $table->string('email', 255); // email (varchar 255, Not Null)
            $table->string('address', 255); // address (varchar 255, Not Null)
            $table->string('note', 255)->nullable(); // note (varchar 255, Null)
            $table->timestamps(); // created_at and updated_at columns
            $table->unsignedInteger('updated_by')->nullable(); // updated_by (int, UNSIGNED, Null)
            $table->tinyInteger('status')->unsigned()->default(2); // status (tinyint 2, UNSIGNED, Default 2)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttmt_order');
    }
};
