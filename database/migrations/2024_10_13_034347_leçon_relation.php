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
        Schema::table("paragraphes", function(Blueprint $table){
            $table->foreignUuid("leçon_id")
            ->references("id")
            ->on("leçons")
            ->cascadeOnDelete();
        });

        Schema::table("media_leçons", function(Blueprint $table){
            $table->foreignUuid("leçon_id")
            ->references("id")
            ->on("leçons")
            ->cascadeOnDelete();
        });

        Schema::table("ressource_leçons", function(Blueprint $table){
            $table->foreignUuid("leçon_id")
            ->references("id")
            ->on("leçons")
            ->cascadeOnDelete();
        });

        Schema::table("document_leçons", function(Blueprint $table){
            $table->foreignUuid("leçon_id")
            ->references("id")
            ->on("leçons")
            ->cascadeOnDelete();
        });

        Schema::table("exercices", function(Blueprint $table){
            $table->foreignUuid("leçon_id")
            ->references("id")
            ->on("leçons")
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
