<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrameworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->id();
            $table ->mediumText('body');
            $table ->string('type'); // economic
            $table ->string('status')->default('NEW');
            $table->integer('userID');
            $table->integer('businessUnitID');
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
        Schema::dropIfExists('frameworks');
    }
}
