<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_prices', function (Blueprint $table) {
            $table->id();
            $table->double('price_1st', 12, 2)->default(0);
            $table->double('price_2st', 12, 2)->default(0);
            $table->double('price_contract', 12, 2)->default(0);
            $table->double('price_domain', 12, 2)->default(0);
            $table->double('price_hosting', 12, 2)->default(0);
            $table->double('total_price', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contract_prices');
    }
}
