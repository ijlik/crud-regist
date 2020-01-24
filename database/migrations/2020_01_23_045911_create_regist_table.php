<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_regist');
            $table->integer('id_category');
            $table->integer('id_sector');
            $table->unsignedBigInteger('id_user');
            $table->text('notes');
            $table->string('image');
            $table->integer('status');
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
        Schema::dropIfExists('regist');
    }
}
