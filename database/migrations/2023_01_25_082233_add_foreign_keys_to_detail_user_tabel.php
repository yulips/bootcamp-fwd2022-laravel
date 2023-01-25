<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailUserTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_user_tabel', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_detail_user_to_users')
            ->references('id')->on('users')->onUpdate('cascade')
            ->onDeletes('cascade');
            $table->foreign('type_user_id', 'fk_detail_user_to_type_user')
            ->references('id')->on('type_user')->onUpdate('cascade')
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
        Schema::table('detail_user_tabel', function (Blueprint $table) {
            $table->dropForeign('fk_detail_user_to_users');
            $table->dropForeign('fk_detail_user_to_type_user');
        });
    }
}
