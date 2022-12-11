<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('code',255)->nullable();
            $table->date('signing_date')->nullable();
            $table->date('date_of_delivery')->nullable();            
            $table->double('payment_1st')->nullable();
            $table->double('payment_2st')->nullable();
            $table->date('date_payment_1st')->nullable();
            $table->date('date_payment_2st')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
