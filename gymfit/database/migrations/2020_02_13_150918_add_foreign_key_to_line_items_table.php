<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lineitems', function (Blueprint $table) {
            $table->bigInteger('idDelivery')->foreign()->references('id')->on('deliveries');
            $table->bigInteger('idProduct')->foreign()->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lineitems', function (Blueprint $table) {
            $table->dropForeign('idDelivery');
            $table->dropForeign('idProduct');
        });
    }
}
