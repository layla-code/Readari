<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
    Schema::create('levels', function (Blueprint $table) {
        $table->id();
        $table->string('Level');
        $table->text('Description')->nullable();
        $table->timestamps();
    });

    
    DB::table('levels')->insert([
        ['Level'=>'Beginner','Description'=>''],
        ['Level'=>'Intermediate','Description'=>''],
        ['Level'=>'Advanced','Description'=>''],
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('levels');
    }
};
