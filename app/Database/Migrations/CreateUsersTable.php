<?php


namespace App\Database\Migrations;


use Illuminate\Database\Capsule\Manager;
use Paracall\Console\Migrate\Migration;

class CreateUsersTable extends Migration {

    public function up()
    {
        Manager::schema()->create('users', function($table){
            $table->increments('id');
            $table->string('username', 100)->unique();
            $table->string('password', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Manager::schema()->drop('users');
    }
}