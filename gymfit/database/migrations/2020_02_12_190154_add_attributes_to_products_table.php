<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributesToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->String('name');
            $table->String('brand');
            $table->text('decription');
            $table->float('price');
            $table->integer('iva');
            $table->integer('discount');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('brand');
            $table->dropColumn('decription');
            $table->dropColumn('price');
            $table->dropColumn('iva');
            $table->dropColumn('discount');
        });
    }
}
