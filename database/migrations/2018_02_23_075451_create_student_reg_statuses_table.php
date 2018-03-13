<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRegStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_reg_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('step1')->nullable()->default(false);
            $table->boolean('step2')->nullable()->default(false);
            $table->boolean('step3')->nullable()->default(false);
            $table->boolean('step4')->nullable()->default(false);
            $table->boolean('step5')->nullable()->default(false);
            $table->boolean('step6')->nullable()->default(false);
            $table->string('student_id')->unique();
            $table->timestamps();

            $table->foreign('student_id')->references('uid')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_reg_statuses');
    }
}
