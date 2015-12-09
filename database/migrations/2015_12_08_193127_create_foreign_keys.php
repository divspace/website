<?php

use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration {

    public function up() {
        Schema::table('shifts', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down() {
        Schema::table('shifts', function($table) {
            $table->dropForeign('shifts_user_id_foreign');
        });
    }

}
