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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 150)->unique();
            $table->text("description")->required();
            $table->text("thumb")->nullable();
            $table->string("price")->required();
            $table->string("series")->required();
            $table->date("sale_date")->required();
            $table->string("type")->nullable();
            $table->string("artists")->required();
            $table->string("writers")->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
