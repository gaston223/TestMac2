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
            $table->string('email',191)->unique();
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->text('adress')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('city')->nullable();
            $table->text('comment')->nullable();
            $table->enum('role', ['writer', 'admin'])->default('writer');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
