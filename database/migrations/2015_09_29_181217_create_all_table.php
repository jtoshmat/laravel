<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::dropIfExists("role_user");
	    //Schema::dropIfExists("role_permissions");
	    //Schema::dropIfExists("permissions");
	    Schema::dropIfExists("roles");

        Schema::dropIfExists("users");



        Schema::create("users", function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('role_user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('user_id')->unsigned();
            $table->unsignedInteger('role_id')->unsigned();
	        $table->unique(array('user_id', 'role_id'));
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('roles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
		/*
		 * Commented out because permission table is not being used - 10/02 JT
        Schema::create('role_permissions', function(Blueprint $table)
        {
            return false;
	        $table->increments('id');
            $table->unsignedInteger('role_id')->unsigned();
            $table->unsignedInteger('permission_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('permissions', function(Blueprint $table)
        {
            return false;
	        $table->increments('id');
            $table->string('title');
            $table->timestamps();
        });
	    */

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("roles");
        Schema::dropIfExists("users");
        Schema::dropIfExists("role_user");
        Schema::dropIfExists("permissions");
        Schema::dropIfExists("role_permissions");

    }

}
