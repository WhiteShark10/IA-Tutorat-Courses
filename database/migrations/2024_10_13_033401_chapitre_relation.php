<?php

use App\Models\Chapitre;
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
        Schema::table('exercices', function (Blueprint $table) {
            $table->foreignUuid("chapitre_id")
            ->references("id")
            ->on("chapitres")
            ->cascadeOnDelete() ;
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
