<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar_details', function (Blueprint $table) {
            $table->id();
            $table->integer('scholar_tracker_id');
            $table->string('ronin_address');
            $table->integer('today');
            $table->integer('yesterday');
            $table->integer('average');
            $table->integer('adventure');
            $table->integer('elo');
            $table->string('rank');
            $table->integer('axies');
            $table->string('next_claim');
            $table->integer('scholar');
            $table->integer('manager');
            $table->integer('total');
            $table->integer('lifetime');
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
        Schema::dropIfExists('scholar_details');
    }
}
