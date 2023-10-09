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
        Schema::create('Adoptors', function (Blueprint $table) {
            $table->id('adoptor_ID');
            $table->string('adoptor_Name');
            $table->string('adoptor_Contactnumber');
            $table->string('adoptor_Address');
            $table->integer('adoptor_Age');
            $table->date('adoptor_Birthday');
            $table->string('adoptor_Gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Adoptors');
    }
};
