<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id("medicine_id");
            $table->string("name", 255);
            $table->string("brand", 100);
            $table->string("dosage", 50);
            $table->string("form", 50);
            $table->decimal("price");
            $table->integer("stock");
            $table->timestamps();
        });

        Schema::create('sales', function (Blueprint $table) {
            $table->id("sale_id");
            $table->unsignedBigInteger("medicine_id");
            $table->foreign("medicine_id")->references("medicine_id")->on("medicines");
            $table->integer("quantity");
            $table->date("sale_date");
            $table->string("customer_phone", 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
        Schema::dropIfExists('sales');
    }
};
