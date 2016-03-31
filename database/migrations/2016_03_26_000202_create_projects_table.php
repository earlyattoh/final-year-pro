<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function(Blueprint $table)
         {
            $table->increments('project_id')->unsigned();
            $table->string('project_name');
            $table->longText('project_notes');
            $table->string('project_status')->default('Upcoming');
            $table->string('owner');
            $table->string('supervisor');
            $table->date('due_date');
            $table->timestamps();
            $table->softDeletes();
     
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('projects');    
    }
}
