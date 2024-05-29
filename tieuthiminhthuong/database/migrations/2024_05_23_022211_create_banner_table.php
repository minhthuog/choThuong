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
        Schema::create('ttmt_banner', function (Blueprint $table) {
            $table->id(); // id (Primary Key, UNSIGNED, AUTO INCREMENT)
            $table->string('name', 1000); // name (varchar 1000, Not Null)
            $table->string('link', 1000); // link (varchar 1000, Not Null)
            $table->integer('sort_order')->default(1); // sort_order (int, UNSIGNED, Default 1)
            $table->string('position', 50); // position (varchar 50, Not Null)
            $table->string('description', 255)->nullable(); // description (varchar 255, Null)
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
        Schema::dropIfExists('ttmt_banner');
    }
};
