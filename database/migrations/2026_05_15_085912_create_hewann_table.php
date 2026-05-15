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
        Schema::create('hewann', function (Blueprint $table) {
            $table->id();
            $table->string('hewan',100);
            $table->string('jenis_hewan')->nullable();
            $table->integer('umur')->nullable();
            $table->string('keadaan',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hewann');
    }
};
