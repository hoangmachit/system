<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeinkeyContractDomain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contract_domains', function (Blueprint $table) {
            $table->foreignId('contract_id')->constrained('contracts');
            $table->foreignId('domain_id')->constrained('domains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contract_domains', function (Blueprint $table) {
            $table->dropForeign(['contract_id']);
            $table->dropForeign(['domain_id']);
        });
    }
}
