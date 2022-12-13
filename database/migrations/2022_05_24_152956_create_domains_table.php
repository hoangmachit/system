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
            $table->string('name', 255)->nullable();
            $table->string('domain_name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->integer('domain_init_id')->default(0);
            $table->text('note', 1000)->nullable();
            $table->double('price', 12, 2)->default(0);
            $table->double('price_special', 12, 2)->default(0);
            $table->date('date_payment')->nullable();
            $table->double('year', 4, 1)->nullable();
            $table->integer('status')->default(0);
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
