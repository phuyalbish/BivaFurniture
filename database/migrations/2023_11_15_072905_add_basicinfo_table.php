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
        Schema::create('basicinfo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('addredd');
            $table->string('phone');
            $table->string('footer_des');
            $table->string('link');
            $table->string('logo_path')->nullable();
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
