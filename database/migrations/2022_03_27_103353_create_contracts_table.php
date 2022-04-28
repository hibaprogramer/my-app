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
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fin_id');
            $table->date('cont_date');//رقم العقد
            $table->integer('cont_num');//رقم العقد
            $table->integer('finn_type');// نوع العملة
            $table->integer('full_amnt_cont');//المبلغ الكلي
            $table->date('cont_end_date');//تاريخ انتهاء العقد
            $table->integer('excut_comp');//الشركة المنفذة
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
        Schema::dropIfExists('contracts');
    }
};
