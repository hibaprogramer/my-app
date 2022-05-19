<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proj_name');
            $table->string('benifit_comp');//الجهة المستفيدة
            $table->string('assig_year');
            $table->integer('proj_cost');
            $table->string('fina_type');
            $table->string('fina_classfic');
            $table->integer('fina_amnt_loc');
            $table->integer('fina_amnt_for');
            $table->string('notes');

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
        Schema::dropIfExists('finances');
    }
};
