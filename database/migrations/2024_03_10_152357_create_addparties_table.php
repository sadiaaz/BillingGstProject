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
        Schema::create('addparties', function (Blueprint $table) {
            $table->id();
            $table->enum("Party_name",['Employee','Vendor','Client'])->nullable();
            $table->string('full_name')->nullable();
            $table->integer('phone')->nullable();

            $table->string('address')->nullable();

            $table->string('Account_holder_name')->nullable();

            $table->string('account_no')->nullable();

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
        Schema::dropIfExists('addparties');
    }
};
