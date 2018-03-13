<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('othername')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('age')->nullable();
            $table->string('state_of_residence')->nullable();
            $table->string('home_address')->nullable();
            $table->string('office_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('alternative_phone')->nullable();
            $table->string('email')->unique();
            $table->string('mode_of_study')->nullable();
            $table->string('campus')->nullable();
            $table->string('course')->nullable();
            $table->string('education_level')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('information_source')->nullable();
            $table->string('referral_name')->nullable();
            $table->string('photo')->nullable();
            $table->string('acad_cert_1')->nullable();
            $table->string('acad_cert_2')->nullable();
            $table->string('acad_cert_3')->nullable();
            $table->string('acad_cert_4')->nullable();
            $table->string('cv')->nullable();
            $table->string('user_id')->unique();
            $table->string('uid')->unique();
            $table->boolean('is_completed')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('uid')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
