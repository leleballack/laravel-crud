<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNewbooksTable extends Migration
{

    public function up()
    {
        Schema::table('newbooks', function (Blueprint $table) {
            $table->string("sale_price");
        });
    }


    public function down()
    {
        Schema::table('newbooks', function (Blueprint $table) {
          $table->dropColumn("sale_price");
        });
    }
}
