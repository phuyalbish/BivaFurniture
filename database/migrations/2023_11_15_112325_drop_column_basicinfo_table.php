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
       Schema::table('basicinfo', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('logo_path');
            
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
