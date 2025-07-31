<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('daily_ayahs', function (Blueprint $table) {
            $table->id();
            $table->date('date')->unique();
            $table->text('ayah');
            $table->string('surah')->nullable();
            $table->string('ayah_number')->nullable();
            $table->text('translation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('daily_ayahs');
    }
};
