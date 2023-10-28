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

        Schema::create('house_cash_flows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('house_id')->nullable()->constrained();
            $table->foreignId('wallet_id')->nullable()->constrained();
            $table->double('amount', 8, 2)->nullable();
            $table->foreignId('loggedBy')->nullable()->constrained('users');
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
        Schema::dropIfExists('house_cash_flows');
    }
};
