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
        Schema::create('senders', function (Blueprint $table) {
            $table->id();
            $table->string('phone');
            $table->string('name');
            $table->string('email');
            $table->string('civility');
            $table->string('gender');
            $table->string('type_piece')->nullable();
            $table->string('number_piece')->nullable();
            $table->date('created_piece_at')->nullable();
            $table->date('expired_piece_at')->nullable();
            $table->date('dob')->nullable();
            $table->string('unique_id');
            $table->foreignId('country_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('senders');
    }
};
