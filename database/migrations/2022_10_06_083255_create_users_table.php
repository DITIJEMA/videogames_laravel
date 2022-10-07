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
            $table->string('name', 30);
            $table->string('apellido_p', 30);
            $table->string('apellido_m', 30);
            $table->date('date_creation');
            $table->string('direction');
            $table->integer('postcode');
            $table->string('number_phone', 10);
            $table->unsignedBigInteger('id_type_user');
            $table->unsignedBigInteger('id_state');
            $table->unsignedBigInteger('id_status');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('id_type_user')->references('id')->on('type__employees');
            $table->foreign('id_state')->references('id')->on('states');
            $table->foreign('id_status')->references('id')->on('statuses');
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
