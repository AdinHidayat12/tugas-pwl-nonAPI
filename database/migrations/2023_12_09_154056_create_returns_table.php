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
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // Schema::table('returns', function (Blueprint $table) {
        //     $table->foreign('loan_id')->references('id')->on('loan_details')
        //         ->onUpdate('cascade')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('returns', function (Blueprint $table) {
        //     $table->dropForeign(['loan_id']);
        // });
        Schema::dropIfExists('returns');
    }
};
