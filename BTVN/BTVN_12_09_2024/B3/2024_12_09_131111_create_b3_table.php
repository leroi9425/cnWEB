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
        Schema::create('it_centers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('location', 255);
            $table->string('contact_email', 50);
        });
        
        Schema::create('hardware_devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_name', );
            $table->enum('type', ['Mouse', 'Keyboard', 'Headset']);
            $table->boolean('status');
            $table->unsignedBigInteger('center_id');
            $table->foreign('center_id')->references('id')->on('it_centers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b3');
    }
};