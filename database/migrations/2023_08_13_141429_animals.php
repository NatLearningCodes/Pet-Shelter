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
        Schema::create('Animals', function (Blueprint $table) {
            $table->id('animal_ID');
            $table->string('animal_Name');
            $table->string('animal_Breed');
            $table->integer('animal_Age');
            $table->date('animal_Birthday');
            $table->string('animal_Gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Animals');
    }
};
