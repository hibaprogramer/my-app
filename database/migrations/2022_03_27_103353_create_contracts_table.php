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
            $table->integer('continent_id')->nullable();
            $table->string('benifit_comp');//الجهة المستفيدة
            $table->date('cont_date');//رقم العقد
            $table->integer('cont_num');//تاريخ العقد
            $table->integer('full_amnt_cont');//المبلغ الكلي
            $table->string('finn_type');//نوع العمل
            $table->string('cont_subj');//موضوع العقد
            $table->date('cont_end_date');//تاريخ انتهاء العقد
            $table->string('excut_comp');//الشركة المنفذة
            $table->string('excut_comp_rel');//جنسية الشركة
            $table->string('pay_condition');//شروط الدفع
            $table->string('percentage');//النسبة
            $table->string('dscr');//الملاحظات
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
