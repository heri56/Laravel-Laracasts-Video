<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasSayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas_sayas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('body');
            //$table->boolean('completed');
            //$table->dropColumn('body');
            $table->boolean('completed')->default(false);
            $table->timestamps();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas_sayas');
    }
}
