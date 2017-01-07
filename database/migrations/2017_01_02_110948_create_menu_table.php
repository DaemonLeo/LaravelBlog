<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url')->unique();
            $table->string('icon');
            $table->enum('type', ['0', '1'])->default('0');
            $table->integer('permission')->nullable()->unsigned();
            $table->enum('block', ['0', '1'])->default('0');
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
        Schema::drop('menu_admin');
    }
}
