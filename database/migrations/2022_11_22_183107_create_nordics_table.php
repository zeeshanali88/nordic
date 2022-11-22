<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nordics', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name');
            $table->string('cli_name');
            $table->string('job');
            $table->string('backup_set');
            $table->string('day');
            $table->string('hourly');
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
        Schema::dropIfExists('nordics');
    }
};
