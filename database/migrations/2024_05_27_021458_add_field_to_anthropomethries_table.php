<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('anthropometries', function (Blueprint $table) {
            $table->unsignedDouble('weight');
            $table->unsignedDouble('height');
            $table->unsignedInteger('user_id');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anthropometries', function (Blueprint $table) {
            //
        });
    }
};