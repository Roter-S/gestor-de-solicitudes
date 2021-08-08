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
            $table->string('firstName')->nullable();
            $table->string('secondName')->nullable();
            $table->string('firstLastName')->nullable();
            $table->string('secondLastName')->nullable();
            $table->string('marriedLastName')->nullable();
            $table->date('birthDate')->nullable();
            $table->string('dpi', 13)->nullable();
            $table->string('profession')->nullable();
            $table->string('photo')->nullable();
            $table->integer('yearsWorking')->nullable();
            $table->float('salary',9,2)->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->foreignId('role_id');
            $table->foreignId('requestStatuses_id');
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
