<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. انشاء
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Title');
            $table->string('Categorie');
            $table->string('Description')->nullable();
            $table->foreignId('levels_id')->default(1)->constrained('levels')->delete('cascade');
            
        });
    }

    /**
     * Reverse the migrations. ازالة
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
