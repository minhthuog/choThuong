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
        Schema::create('ttmt_category', function (Blueprint $table) {
            $table->id(); // id: int, Key, UNSIGNED, AUTO INCREMENT
            $table->string('name', 1000)->nullable(false); // name: varchar(1000), Not Null
            $table->string('slug', 1000)->nullable(); // slug: varchar(1000), Null
            $table->string('image', 1000)->nullable(); // image: varchar(1000), Null
            $table->integer('parent_id')->unsigned()->default(0); // parent_id: Int(10), UNSIGNED, Default 0
            $table->integer('sort_order')->unsigned()->default(1); // sort_order: int, UNSIGNED, Default 1
            $table->string('description', 255)->nullable(); // description: varchar(255), Null
            $table->dateTime('created_at')->nullable(false); // created_at: datetime, Not Null
            $table->integer('created_by')->unsigned()->nullable(false); // created_by: int, UNSIGNED, Not Null
            $table->dateTime('updated_at')->nullable(); // updated_at: datetime, Null
            $table->integer('updated_by')->unsigned()->nullable(); // updated_by: int, UNSIGNED, Null
            $table->tinyInteger('status')->unsigned()->default(2); // status: tinyint(2), UNSIGNED, Default 2

            // Add indexes and constraints as necessary
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttmt_category');
    }
};
