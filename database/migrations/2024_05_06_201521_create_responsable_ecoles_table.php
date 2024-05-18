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
        Schema::create('responsable_ecoles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('responsable_users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('responsable_ecole_id')->references('id')->on('ecoles')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_embauche');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responsable_ecoles');
    }
};
