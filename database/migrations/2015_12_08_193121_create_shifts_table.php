<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsTable extends Migration {

    public function up() {
        Schema::create('shifts', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('manager_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->float('break');
            $table->date('start_time');
            $table->date('end_time');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('shifts');
    }

}
