<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function(Blueprint $table)
        {
            $table->increments('todo_id')->unsigned();
            $table->string('todo_name');
            $table->longText('todo_description');
            $table->string('todo_status')->default('Will do');
            $table->integer('user_id')->unsigned();
            $table->date('due_date');
            $table->timestamps();
 
            $table->foreign('user_id')
                  ->references('student_id')->on('students')
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
        Schema::drop('todos');    
    }
}
