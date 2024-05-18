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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eleve_users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('eleve_parent_id')->references('id')->on('parents')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('eleve_classe_id')->references('id')->on('classes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('eleve_annee_id')->references('id')->on('annee_scollaires')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
