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

            $table->foreignId('ecole_id')->constrained()->onDelete();
            $table->id();
            $table->foreignId('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_embauche');
            $table->string('situation_matimo');
            $table->softDeletes();
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
