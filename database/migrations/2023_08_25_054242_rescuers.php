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
        Schema::create('Rescuers', function (Blueprint $table) {
            $table->id('rescuer_ID');
            $table->string('rescuer_Name');
            $table->string('rescuer_ContactNumber');
            $table->string('rescuer_Address');
            $table->integer('rescuer_Age');
            $table->date('rescuer_Birthday');
            $table->string('rescuer_Gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Rescuers');
    }
};
