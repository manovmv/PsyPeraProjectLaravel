<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('profile_id');

            $table->index('doctor_id','doctor_profile_doctor_idx');
            $table->index('profile_id','doctor_profile_profile_idx');

            $table->foreign('doctor_id','doctor_profile_doctor_fk')->on('doctors')->references('id');
            $table->foreign('profile_id','doctor_profile_profile_fk')->on('profiles')->references('id');;

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
        Schema::dropIfExists('doctor_profiles');
    }
}
