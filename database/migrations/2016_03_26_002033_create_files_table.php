<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function(Blueprint $table)
        {
            $table->increments('file_id')->unsigned();
            $table->string('file_name');
            $table->mediumText('file_url');
            $table->integer('project_id')->unsigned();
            $table->timestamps();
 
            $table->foreign('project_id')
                  ->references('project_id')->on('projects')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
