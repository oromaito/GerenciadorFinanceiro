<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinançasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finanças', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->double('salario');
            $table->double('gastoPD');
            $table->double('valorAtual')->nullable();
            $table->text('status')->nullable();
            $table->double('duração');
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
        Schema::dropIfExists('finanças');
    }
}
