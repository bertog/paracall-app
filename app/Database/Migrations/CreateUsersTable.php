<?php

namespace App\Database\Migrations;

use Illuminate\Database\Capsule\Manager;
use Paracall\Commands\Migrate;
use Paracall\Database\Migration;

class CreateUsersTable extends Migration {

    public function up()
    {
        Manager::schema()->create('users', function($table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->timestamps();
        });
    }
}