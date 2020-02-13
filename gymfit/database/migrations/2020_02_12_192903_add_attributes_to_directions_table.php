<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributesToDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('directions', function (Blueprint $table) {
            $table->String('street');
            $table->String('locality');
            $table->integer('number');
            $table->integer('postal code');
            $table->String('floor');
            $table->String('door') -> nullable();
            $table->String('type');
            $table->String('province');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('directions', function (Blueprint $table) {
            $table->dropColumn('street');
            $table->dropColumn('locality');
            $table->dropColumn('number');
            $table->dropColumn('postal code');
            $table->dropColumn('floor');
            $table->dropColumn('door');
            $table->dropColumn('type');
            $table->dropColumn('province');
        });
    }
}
