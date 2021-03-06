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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('pais')->nullable();
            $table->string('empresa')->nullable();
            $table->string('planta')->nullable();
            $table->string('cargo')->nullable();
            $table->string('tipo_caldera')->nullable();
            $table->string('actividad')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('sector')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('status')->default('activo');
            $table->unsignedBigInteger('plan_id')->default(1);
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
