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
        Schema::create('ttmt_contact', function (Blueprint $table) {
            $table->id(); // id: int, Key, UNSIGNED, AUTO INCREMENT
            $table->unsignedInteger('user_id')->nullable(); // user_id: int, UNSIGNED, Null
            $table->string('name', 255)->nullable(false); // name: varchar(255), Not Null
            $table->string('email', 255)->nullable(false); // email: varchar(255), Not Null
            $table->string('phone', 255)->nullable(false); // phone: varchar(255), Not Null
            $table->string('title', 255)->nullable(false); // title: varchar(255), Not Null
            $table->mediumText('content')->nullable(false); // content: mediumtext, Not Null
            $table->unsignedInteger('reply_id')->default(0); // reply_id: int, UNSIGNED, Default 0
            $table->dateTime('created_at')->nullable(false); // created_at: datetime, Not Null
            $table->dateTime('updated_at')->nullable(); // updated_at: datetime, Null
            $table->unsignedInteger('updated_by')->nullable(); // updated_by: int, UNSIGNED, Null

            // Add indexes and constraints as necessary
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttmt_contact');
    }
};
