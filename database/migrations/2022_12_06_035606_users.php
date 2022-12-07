<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // crea una nueva tabla
        Schema::create('users', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->integerIncrements('pk_user', 11);
            $table->string('email', 50)->nullable(false);
            $table->string('name', 50)->nullable();
            $table->string('password', 50)->nullable(false);
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
        //elimina si existe
        Schema::dropIfExists('users');
    }
};
