<?php

use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

    public function up() {
        Schema::table('shifts', function($table) {
            $table->foreign('manager_id')->references('id')->on('users');
            $table->foreign('employee_id')->references('id')->on('users');
        });
    }

    public function down() {
        Schema::table('shifts', function($table) {
            $table->dropForeign('shifts_manager_id_foreign');
            $table->dropForeign('shifts_employee_id_foreign');
        });
    }

}
