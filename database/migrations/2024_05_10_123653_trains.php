<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("trains", function (Blueprint $table) {
            $table->id();
            $table->string("agency", 50);
            $table->string("departure_station", 50);
            $table->string("arrival_station", 50);
            $table->string("departure_time", 50);
            $table->string("arrival_time", 50);
            $table->string("train_code", 10);
            $table->string("number_of_carriages", 50);
            $table->boolean("on_time")->default(1);
            $table->boolean("deleted")->default(0);
            $table->timestamps();
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
