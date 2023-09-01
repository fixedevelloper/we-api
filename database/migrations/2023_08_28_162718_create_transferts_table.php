<?php

use App\helpers\Constant;
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
        Schema::create('transferts', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('reference');
            $table->string('reason')->nullable();
            $table->string('relaction')->nullable();
            $table->string('t_ref');
            $table->float('amount');
            $table->string('code_partenaire')->nullable();
            $table->string('status_partenaire')->default(Constant::PENDING);
            $table->string('status')->default(Constant::PENDING);
            $table->foreignId('operator_id')->nullable(true)->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->foreignId('sender_id')->constrained();
            $table->foreignId('beneficiary_id')->constrained();
            $table->foreignId('account_key_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transferts');
    }
};
