<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('gb',255)->nullable();
            $table->string('ram',255)->nullable();
            $table->string('ip',255)->nullable();
            $table->text('note',1000)->nullable();
            $table->double('price')->default(0);
            $table->double('price_special')->default(0);
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
        Schema::dropIfExists('hostings');
    }
}
