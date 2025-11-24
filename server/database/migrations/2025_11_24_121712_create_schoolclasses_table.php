<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('schoolclasses', function (Blueprint $table) {
            $table->id();
            $table->string('osztaly_nev', 10)->notNull();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('schoolclasses');
    }
};
