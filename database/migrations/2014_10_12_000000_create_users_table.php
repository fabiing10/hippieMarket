<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateUsersTable.
 */
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
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('brand')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('password_decode')->nullable();
            $table->boolean('blocked')->nullable()->default(0);
            $table->boolean('active')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('codes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('user_code', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('code_id')->unsigned();
            /*
             * Add Foreign/Unique/Index
             */
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('code_id')
                ->references('id')
                ->on('codes')
                ->onDelete('cascade');

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
        Schema::dropIfExists('codes');
        Schema::dropIfExists('user_code');
    }
}
