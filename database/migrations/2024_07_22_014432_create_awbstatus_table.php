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
        Schema::create('awbstatus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_status')->unique();
            $table->string('short_status',35)->nullable();
            $table->string('detail_status',75)->nullable();
            $table->string('color_status',35)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('awbstatus');
    }
};
