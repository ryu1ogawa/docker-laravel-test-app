<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('name');
            $table->string('last_name_reading');
            $table->string('first_name_reading');
            $table->string('name_reading');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('postal_code');
            $table->string('prefectures');
            $table->string('municipalities');
            $table->string('house_number');
            $table->string('building_name');
            $table->string('telephone_number');
            $table->string('emergency_telephone_number');
            $table->string('password');
            $table->boolean('employee');
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
        Schema::dropIfExists('users');
    }
}
