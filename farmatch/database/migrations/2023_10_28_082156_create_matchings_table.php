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
    Schema::create('matchings', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id1');
        $table->unsignedBigInteger('user_id2');
        $table->string('matching_status');

        $table->foreign('user_id1')->references('id')->on('farmers')->onDelete('cascade');
        $table->foreign('user_id2')->references('id')->on('seekers')->onDelete('cascade');

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matchings');
    }
};
