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
        Schema::create('add_bills', function (Blueprint $table) {
            $table->id();
            $table->integer('party_id')->nullable();
            $table->date('invoiceDate')->nullable();
            $table->integer('invocieNo')->nullable();
            $table->string('itemDescription')->nullable();
            $table->integer('totalAmount')->nullable();
            $table->integer('cgstRate')->nullable();
            $table->integer('sgstRate')->nullable();
            $table->integer('igstRate')->nullable();
            $table->integer('cgstAmount')->nullable();
            $table->integer('sgstAmount')->nullable();
            $table->integer('igstAmount')->nullable();
            $table->integer('taxAmount')->nullable();
            $table->integer('netAmount')->nullable();
            $table->integer('Declaration')->nullable();
            $table->tinyInteger('is_deleted')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_bills');
    }
};
