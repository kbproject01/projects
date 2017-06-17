<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {

            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('address')->nullable();
            $table->string('last_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('mobile',10)->nullable();
            $table->enum('gender',['male','female','transgender']);
            $table->string('profile_pic')->nullable();
            $table->integer('user_id')->unsigned()->nullable();


            $table->softDeletes();

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
