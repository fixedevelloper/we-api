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
        Schema::create('account_keys', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_key')->nullable()->unique();
            $table->string('url')->nullable();
            $table->string('name');
            $table->string('callback_url')->nullable();
            $table->float('amount')->default(0.0);
            $table->float('solde')->default(0.0);
            $table->boolean('active')->default(true);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_keys');
    }
};
