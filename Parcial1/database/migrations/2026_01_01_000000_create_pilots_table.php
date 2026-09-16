<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pilots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('origin_city');
            $table->integer('nitro_level');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pilots');
    }
};
