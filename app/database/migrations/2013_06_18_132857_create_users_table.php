<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //create the users_table
        Schema::table('users', function($table) {
                    $table->create();

                    $table->increments('id');
                    $table->string('name', 64)->index();
                    $table->string('email', 64)->unique();
                    $table->string('password', 12);
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //drop the table
        Schema::drop('users');
    }

}

