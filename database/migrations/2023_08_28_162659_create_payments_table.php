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
            $table->string('customer_phone');
            $table->float('amount');
            $table->string('currency');
            $table->string('status')->default(Constant::PENDING);
            $table->string('reference');
            $table->foreignId('country_id')->constrained();
            $table->string('payment_options');
            $table->string('customer_name');
            $table->string('customer_email');
            $table->foreignId('operator_id')->nullable(true)->constrained();
            $table->foreignId('partenaire_id')->nullable(true)->constrained();
            $table->string('card_cvv')->nullable(true);
            $table->string('card_number')->nullable(true);
            $table->string('option_title');
            $table->string('option_description');
            $table->string('option_logo');
            $table->string('code_link');
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
