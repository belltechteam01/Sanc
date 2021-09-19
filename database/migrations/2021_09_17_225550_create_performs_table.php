<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id');
            $table->string('vaccinated')->nullable();
            $table->string('rule')->nullable();
            $table->string('test')->nullable();
            $table->dateTime('performed_at', $precision = 0)->nullable();
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
        Schema::dropIfExists('performs');
    }
}
