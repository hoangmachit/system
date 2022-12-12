<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyContractDesigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contract_designs', function (Blueprint $table) {
            $table->foreignId('contract_id')->constrained('contracts');
            $table->foreignId('design_id')->constrained('designs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contract_designs', function (Blueprint $table) {
            $table->dropForeign(['contract_id']);
            $table->dropForeign(['design_id']);
        });
    }
}
