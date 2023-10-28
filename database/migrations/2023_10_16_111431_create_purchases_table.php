<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('refCode')->unique()->nullable();
            $table->foreignId('house_id')->nullable()->constrained();
            $table->foreignId('flat_id')->nullable()->constrained();
            $table->unsignedBigInteger('FromWallet')->nullable();
            $table->double('amount')->nullable();
            $table->string('invoiceUpload')->nullable();
            $table->enum('paymentMode', ["Card", "Cash", "OutPocket", "Transfer"])->nullable();
            $table->string('status')->nullable()->default('paid');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
};
