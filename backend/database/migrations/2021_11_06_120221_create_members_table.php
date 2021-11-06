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
            $table->string('member-last-name');
            $table->string('member-first-name');
            $table->string('member-name');
            $table->string('member-last-name-reading');
            $table->string('member-first-name-reading');
            $table->string('member-name-reading');
            $table->string('member-birthday');
            $table->string('member-sex');
            $table->string('member-classification');
            $table->string('member-education-facility');
            $table->string('member-school-name');
            $table->string('member-contract-kinds');
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
