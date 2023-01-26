<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRoleUserTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('role_user', function (Blueprint $table) {
            $table->foreign('role_id', 'fk_role_user_to_role')
            ->references('id')->on('role')->onUpdate('cascade')
            ->onDeletes('cascade');
            $table->foreign('user_id', 'fk_role_user_to_users')
            ->references('id')->on('users')->onUpdate('cascade')
            ->onDeletes('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_user', function (Blueprint $table) {
            $table->dropForeign('fk_role_user_to_role');
            $table->dropForeign('fk_role_user_to_users');
        });
    }
}
