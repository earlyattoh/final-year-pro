<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlterProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function($table)
        {
            $table->foreign('owner')
                  ->references('matric_no')->on('students')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreign('supervisor')
                  ->references('staff_no')->on('staff')
                  ->onUpdate('cascade')
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
      //
    }
}
