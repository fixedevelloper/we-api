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
        Schema::create('payment_links', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code")->unique();
            $table->string('url');
            $table->string('return_url')->nullable();
            $table->string('logo')->nullable();
            $table->string('description')->nullable();
            $table->boolean('enable')->default(true);
            $table->float('amount');
            $table->foreignId('account_key_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_links');
    }
};
