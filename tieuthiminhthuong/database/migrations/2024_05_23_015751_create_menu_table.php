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
        Schema::create('ttmt_menu', function (Blueprint $table) {
            $table->id(); // id: int, Key, UNSIGNED, AUTO INCREMENT
            $table->string('name', 1000)->nullable(false); // name: varchar(1000), Not Null
            $table->string('link', 1000)->nullable(false); // link: varchar(1000), Not Null
            $table->unsignedInteger('table_id')->nullable(); // table_id: int, UNSIGNED, Null
            $table->string('type', 255)->nullable(false); // type: varchar(255), Not Null
            $table->dateTime('created_at')->nullable(false); // created_at: datetime, Not Null
            $table->unsignedInteger('created_by')->nullable(false); // created_by: int, UNSIGNED, Not Null
            $table->dateTime('updated_at')->nullable(); // updated_at: datetime, Null
            $table->unsignedInteger('updated_by')->nullable(); // updated_by: int, UNSIGNED, Null
            $table->tinyInteger('status', false, true)->default(2); // status: tinyint(2), UNSIGNED, Default 2

            // Add indexes and constraints as necessary
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttmt_menu');
    }
};
