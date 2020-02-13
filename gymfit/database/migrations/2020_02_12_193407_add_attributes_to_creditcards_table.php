<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributesToCreditcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('creditcards', function (Blueprint $table) {
            $table->String('owner');
            $table->integer('cvv');
            $table->Date('caducity date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('creditcards', function (Blueprint $table) {
            $table->dropColumn('owner');
            $table->dropColumn('cvv');
            $table->dropColumn('caducity date');
        });
    }
}
