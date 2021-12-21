<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('number');
            $table->string('phot');
            $table->string('start_date');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('name');
            $table->string('last_name_reading');
            $table->string('first_name_reading');
            $table->string('name_reading');
            $table->string('birthday');
            $table->string('sex');
            $table->string('classification');
            $table->string('education_facility');
            $table->string('school_name');
            $table->string('anamnesis');
            $table->string('anamnesis_disease_name');
            $table->string('anamnesis_characteristic');
            $table->string('heart_disease');
            $table->string('outpatient');
            $table->string('experience');
            $table->string('contract_kind');
            $table->string('course');
            $table->string('school_bus');
            $table->boolean('status');
            $table->rememberToken();
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
        Schema::dropIfExists('members');
    }
}
