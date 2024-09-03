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
        Schema::create('resevasi_aqis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete(); //
            $table->foreignId('aqiqah_id')->constrained('aqiqahs');
            $table->foreignId('basic_id')->constrained('basics');
            $table->string('name');
            $table->string('date');
            $table->string('address');
            $table->string('selected');
            $table->string('image_dp')->nullable();
            $table->string('image_pay')->nullable();
            $table->string('status_dp')->nullable();
            $table->string('status_pay')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resevasi_aqis');
    }
};
