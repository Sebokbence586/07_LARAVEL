<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('diak_nev', 50)->notNull();
            $table->foreignId('schoolclass_id')->constrained('schoolclasses');
            $table->tinyInteger('neme')->notNull();
            $table->string('iranyitoszam')->nullable();
            $table->string('lak_helyseg')->nullable();
            $table->string('lak_cim')->nullable();
            $table->string('szulesi_hely')->nullable();
            $table->date('szulesi_datum')->nullable();
            $table->string('igazolvany_szam')->nullable();
            $table->decimal('atlag', 4, 2)->nullable();
            $table->decimal('osztondij', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
