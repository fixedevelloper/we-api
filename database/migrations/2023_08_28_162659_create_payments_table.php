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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('customer_phone')->nullable(true);
            $table->float('amount');
            $table->foreignId('currency_id')->constrained();
            $table->string('status')->default(Constant::PENDING);
            $table->string('reference');
            $table->foreignId('country_id')->constrained();
            $table->string('payment_options')->nullable(true);
            $table->string('customer_name');
            $table->string('customer_email')->nullable(true);
            $table->foreignId('operator_id')->nullable(true)->constrained();
            $table->foreignId('partenaire_id')->nullable(true)->constrained();
            $table->string('card_cvv')->nullable(true);
            $table->string('card_valid_date')->nullable(true);
            $table->string('card_number')->nullable(true);
            $table->string('option_title');
            $table->string('option_description')->nullable(true);
            $table->string('option_logo')->nullable(true);
            $table->string('code_link')->nullable(true);
            $table->foreignId('account_key_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
