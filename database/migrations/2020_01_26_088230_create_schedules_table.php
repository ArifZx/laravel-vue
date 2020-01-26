<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('schedules', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->unsignedBigInteger('place_id')->default(0);
            $table->unsignedBigInteger('doctor_id')->default(0);
            $table->boolean('canOnlineBook');
            $table->unsignedInteger('slot')->default(0);
            $table->timestamp('from')->nullable();
            $table->timestamp('to')->nullable();
            $table->timestamps();

            // $table->foreign('place_id')->references('id')->on('places')->onUpdate('cascade')->onDelete('set null');
            // $table->foreign('doctor_id')->references('id')->on('doctors')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
