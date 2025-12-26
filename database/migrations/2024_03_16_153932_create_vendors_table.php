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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->integer('party_id')->nullable();
            $table->date('invoiceDate')->nullable();
            $table->integer('invocieNo')->nullable();

            $table->string('itemDescription')->nullable();

            $table->string('Account_holder_name')->nullable();
            $table->string('account_no')->nullable();

            $table->integer('totalAmount')->nullable();
            $table->string('Declaration')->nullable();
            $table->string('bank_name')->nullable();

            $table->string('ifcs_code')->nullable();

            $table->string('branch_address')->nullable();

         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};
