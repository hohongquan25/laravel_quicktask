<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('tasks_name');
            $table->text('tasks_content');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id') //cột khóa ngoại là cột `user_id` trong table `tasks`
                ->references('id')->on('users'); //cột sẽ tham chiếu đến là cột `user_id` trong table `users`
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
