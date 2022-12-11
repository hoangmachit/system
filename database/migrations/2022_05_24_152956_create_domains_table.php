<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('domain_name',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('production_unit',255)->nullable();
            $table->text('note',1000)->nullable();
            $table->double('price')->default(0);
            $table->double('price_special')->default(0);
            $table->date('date_payment')->nullable();
            $table->string('year',255)->nullable();
            $table->string('status',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domains');
    }
}
