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
            $table->string('last-name');
            $table->string('first-name');
            $table->string('name');
            $table->string('last-name-reading');
            $table->string('first-name-reading');
            $table->string('name-reading');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('postal-code');
            $table->string('prefectures');
            $table->string('municipalities');
            $table->string('house-number');
            $table->string('building-name');
            $table->string('telephone-number');
            $table->string('emergency-telephone-number');
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
