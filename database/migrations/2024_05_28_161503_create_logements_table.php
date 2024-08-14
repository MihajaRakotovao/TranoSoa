<?php

// use App\Models\Quartier;
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
        Schema::create('logements', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            // ;$table->foreignIdFor(Quartier::class);
            $table->text('description');
            $table->integer('chambre');
            $table->integer('piece');
            $table->integer('etage');
            $table->integer('loyer');
            $table->string('adresse');
            $table->boolean('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logements');
    }
};
