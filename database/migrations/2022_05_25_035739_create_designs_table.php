<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->text('url', 1000)->nullable();
            $table->text('note', 1000)->nullable();
            $table->date('date_start')->nullable();
            $table->date('date_finish')->nullable();
            $table->text('font_family', 255)->nullable();
            $table->text('url_example', 1000)->nullable();
            $table->integer('status')->default(0);
            $table->string('photo', 255)->nullable();
            $table->string('code', 255)->nullable();
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
        Schema::dropIfExists('designs');
    }
}
