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
        Schema::create('ttmt_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id')->notNullable();
            $table->unsignedInteger('brand_id')->notNullable();
            $table->string('name', 1000)->notNullable();
            $table->string('slug', 1000)->notNullable();
            $table->float('price')->notNullable();
            $table->float('pricesale')->nullable();
            $table->string('image', 1000)->notNullable();
            $table->unsignedInteger('qty')->notNullable();
            $table->mediumText('detail')->notNullable();
            $table->string('description', 255)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->unsignedInteger('created_by')->notNullable();
            $table->dateTime('updated_at')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->tinyInteger('status')->unsigned()->default(2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ttmt_product');
    }
};
