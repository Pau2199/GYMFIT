<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('creditCards', function (Blueprint $table) {
            $table->integer('card number')->primaryKey();
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
        Schema::table('creditCards', function (Blueprint $table) {
            //
        });
    }
}
