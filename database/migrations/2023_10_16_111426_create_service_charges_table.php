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

        Schema::create('service_charges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('house_id')->nullable()->constrained();
            $table->foreignId('tenant_id')->nullable()->constrained();
            $table->double('amountPaid', 8, 2)->nullable();
            $table->string('week')->nullable();
            $table->date('period')->nullable();
            $table->foreignId('staffCollected')->nullable()->constrained('staff');
            $table->foreignId('adminCollected')->nullable()->constrained('admin');
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
        Schema::dropIfExists('service_charges');
    }
};
