<?php

use App\Models\Chapitre;
use App\Models\Cours;
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
        Schema::table("chapitres", function(Blueprint $table){
            $table->foreignUuid("cours_id")
            ->references("id")
            ->on("cours")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("chapitres", function (Blueprint $table) {
            $table->dropForeign(['Cours']);
        });
    }
};
