<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function(Blueprint $table)
        {
            $table->increments('admin_id')->unsigned();
            $table->string('staff_no')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('avatar_url')->nullable()->default(NULL);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin');    
    }
}
