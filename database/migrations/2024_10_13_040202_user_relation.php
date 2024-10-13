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
        // Schema::table("cours", function(Blueprint $table){
        //     $table->foreignUuid("user_id")
        //     ->references("id")->on("users")
        //     ->cascadeOnDelete();
        // });

        // Schema::table("chapitres", function(Blueprint $table){
        //     $table->foreignUuid("enseignant_id")
        //     ->references("id")->on("users")
        //     ->cascadeOnDelete();
        // });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
