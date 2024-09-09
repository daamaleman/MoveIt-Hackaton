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
        Schema::create('cities', function (Blueprint $table) {
            //Tabla para almacenar las ciudades
            $table->id();
            $table->string("name");
            $table->text("location")->nullable();
            $table->unsignedBigInteger("state_id");
            $table->foreign("state_id")->references("id")->on("states");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
