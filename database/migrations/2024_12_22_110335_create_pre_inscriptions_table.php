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
        Schema::create('pre_inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string("nom")->require();
            $table->string("prenom")->require();
            $table->string("email")->require();
            $table->string("photo")->require();
            $table->boolean("status")->default(0);
            $table->date("date_naissance")->require();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_inscriptions');
    }
};
