<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGeoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->unsignedBigInteger('country_id');
            // $table->foreign('country_id')->references('id')->on('countries');
            // $table->unsignedBigInteger('state_id');
            // $table->foreign('state_id')->references('id')->on('states');
            // $table->unsignedBigInteger('city_id');
            // $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Schema::disableForeignKeyConstraints();
            // $table->dropForeign(
            //     'users_country_id_foreign',
            //     'users_state_id_foreign',
            //     'users_city_id_foreign'
            // );
            // $table->dropColumn(
            //     'country_id', 
            //     'state_id', 
            //     'city_id'
            // );
            // $table->dropForeign('users_country_id_foreign');
            // $table->dropForeign('users_state_id_foreign');
            // $table->dropForeign('users_city_id_foreign');
            // $table->dropColumn('country_id');
            // $table->dropColumn('state_id');
            // $table->dropColumn('city_id');
            // Schema::enableForeignKeyConstraints();
        });
    }
}
